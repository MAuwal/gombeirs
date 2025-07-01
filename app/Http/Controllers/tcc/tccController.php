<?php

namespace App\Http\Controllers\tcc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Dompdf\Dompdf;
use App\Models\Tcc;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class tccController extends Controller
{
    public function create()
    {
        return view('tcc.tcc-form');
        
    }
    
    public function watermark()
    {
        return view('tcc.watermark');
    }
    
    public function showTccs()
    {
        $tccs = Tcc::all(); // Fetch all TCC records from the database
        return view('tcc.showTCC', compact('tccs'));
    }
    
    public function TCCreviewer()
    {
        $tccs = Tcc::all(); // Fetch all TCC records from the database
        return view('tcc.TCCreviewer', compact('tccs'));
    }
    public function TCCapprover()
    {
        $tccs = Tcc::all(); // Fetch all TCC records from the database
        return view('tcc.TCCapprover', compact('tccs'));
    }
    
    
    public function approve($id)
{
    $tcc = Tcc::find($id);
    
    if ($tcc) {
        $tcc->status = 'approved';
        $tcc->save();
        return redirect()->back()->with('success', 'TCC approved successfully.');
    } else {
        return redirect()->back()->with('error', 'TCC not found.');
    }
}

public function reject(Request $request, $id)
{
    $tcc = TCC::findOrFail($id);
    $tcc->status = 'rejected';
    $tcc->comment = $request->input('reason'); 
    $tcc->save();

    return redirect()->back()->with('success', 'TCC rejected with reason.');
}


    public function edit($id)
{
    $tcc = Tcc::findOrFail($id);
    return view('tcc.edit', compact('tcc'));
    
}

public function update(Request $request, $id)
{
    // $tcc = Tcc::findOrFail($id);
    // $tcc->update($request->all());
    //  return view('tcc.showTCC', ['tcc' => $tcc])->with('success', 'TCC record updated successfully!');
    $tcc = Tcc::findOrFail($id);
    // Set status to pending before updating other fields
    $tcc->status = 'pending';
    $tcc->update($request->all());
    $tcc->save(); 
    return redirect()->route('showTCC')->with('success', 'TCC record updated successfully!');
}

public function show($id)
{
    $tcc = Tcc::findOrFail($id);
    return view('tcc.TCCapprover', compact('tcc')); // Create a modal-content.blade.php
}

    
    
    protected function getWatermark($paymentDate, $phone, $gtin)
    {
        $response = Http::withHeaders([
            'authkey' => '^LnWuuMz',
            'Content-Type' => 'application/json'
        ])->post('https://getproict.com.ng/watermark/api', [
            'paymentdate' => $paymentDate,
            'phone' => $phone,
            'gtin' => $gtin
        ]);
    
        if ($response->successful()) {
            $data = $response->json();
            return $data['watermark'];
        }
    
        return null; // Handle error appropriately
    }



     public function index(Request $request)
{
    $doi = date('Y-m-d'); // Format: YYYY-MM-DD

    // Retrieve data from the form fields
    $formData = [
        'tcc' => $request->input('tcc'),
        'name' => $request->input('name'),
        'doi' => $doi,
        'ed' => '2024-12-31',
        'business_address' => $request->input('business_address'),
        'rc' => $request->input('rc'),
        'date_of_incorporation' => $request->input('date_of_incorporation'),
        'gtin' => $request->input('gtin'),
        'tin' => $request->input('tin'),
        'business_status' => $request->input('business_status'),
        'Chargeableyr1' => $request->input('Chargeableyr1'),
        'taxpaidyr1' => $request->input('taxpaidyr1'),
        'receiptidyr1' => $request->input('receiptidyr1'),
        'issuedateyr1' => $request->input('issuedateyr1'),
        'Chargeableyr2' => $request->input('Chargeableyr2'),
        'taxpaidyr2' => $request->input('taxpaidyr2'),
        'issuedateyr2' => $request->input('issuedateyr2'),
        'receiptidyr2' => $request->input('receiptidyr2'),
        'Chargeableyr3' => $request->input('Chargeableyr3'),
        'taxpaidyr3' => $request->input('taxpaidyr3'),
        'receiptidyr3' => $request->input('receiptidyr3'),
        'issuedateyr3' => $request->input('issuedateyr3'),
        'tccType' => $request->input('tccType'),
        'sourcrOfInc' => $request->input('sourcrOfInc'),
        'othercomment' => $request->input('othercomment'),
        'certificateExpires' => $request->input('certificateExpires'),
    ];

    // Retrieve the watermark
    $watermark = $this->getWatermark($doi, $request->input('phone'), $formData['gtin']);

    if (!$watermark) {
        return response()->json(['error' => 'Failed to retrieve watermark'], 500);
    }

    // Choose the view based on the button clicked
    $pdfView = $request->has('corporate') ? 'tcc.tcc-pdf' : 'tcc.tcc-individual-pdf';

    // Generate the HTML for the PDF using the selected view
    $html = View::make($pdfView, compact('formData', 'watermark'))->render();

    Log::info('Data for PDF: ' . json_encode($formData));

    // Generate the PDF
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    // Save the PDF to disk
    $pdf = $dompdf->output();
    $pdfPath = 'pdfs/' . uniqid() . '.pdf';  // Customize the path as needed
    Storage::put($pdfPath, $pdf);

    // Call the store method to save the data to the database
    $this->store(new Request($formData));

    // Clear the session data
    // session(['generated_tin' => null, 'data' => null]);

    // Download the PDF
    return response()->streamDownload(function () use ($dompdf) {
        // echo $dompdf->output();
    }, 'tcc.pdf', [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="tcc.pdf"'
    ]);
}




    
    public function downloadPdf($tccId)
    {
        // Checking if the TCC record exists in the database
        if (!Tcc::where('id', $tccId)->exists()) {
            abort(404); // Return a 404 error if the record doesn't exist
             Log::info('TCC not available:');
        }
    
        // Fetch the TCC record from the database
        $tcc = Tcc::findOrFail($tccId);
        
        // Log the fetched TCC record
         echo $tcc;
    
        // Log TCC details
        Log::info('TCC details: ' . $tcc);
    
        // Generate the HTML for the PDF using the view
        $html = View::make('tcc.tcc-pdf', compact('tcc'))->render();
    
        // Generate the PDF
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
    
        // Get the PDF content
        $pdfContent = $dompdf->output();
    
        // Return the PDF content for downloading
        return response()->streamDownload(function () use ($pdfContent) {
            echo $pdfContent;
        }, 'tcc.pdf', [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="tcc.pdf"'
        ]);
    }
    public function downloadPdf2($tccId)
    {
        // Checking if the TCC record exists in the database
        if (!Tcc::where('id', $tccId)->exists()) {
            abort(404); // Return a 404 error if the record doesn't exist
             Log::info('TCC not available:');
        }
    
        // Fetch the TCC record from the database
        $tcc = Tcc::findOrFail($tccId);
        
        // Log the fetched TCC record
         echo $tcc;
    
        // Log TCC details
        Log::info('TCC details: ' . $tcc);
    
        // Generate the HTML for the PDF using the view
        $html = View::make('tcc.tcc-individual-pdf', compact('tcc'))->render();
    
        // Generate the PDF
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
    
        // Get the PDF content
        $pdfContent = $dompdf->output();
    
        // Return the PDF content for downloading
        return response()->streamDownload(function () use ($pdfContent) {
            echo $pdfContent;
        }, 'tcc.pdf', [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="tcc.pdf"'
        ]);
    }
    
     public function verifyTcc2()
    {
       
        return view('tcc/verifyTCC2'); 
    }
    
   public function getTccDetails($id)
{
    $columnNames = ['gtin', 'tin'];
    $tcc = null;

    foreach ($columnNames as $columnName) {
        $tcc = Tcc::where($columnName, $id)->first();
        if ($tcc) {
            break;
        }
    }

    if ($tcc) {
        return response()->json(['success' => true, 'tcc' => $tcc]);
    } else {
        return response()->json(['success' => false, 'message' => 'Tcc not found'], 404);
    }
}


    // check duplicate record of name or gtin, receipt ids
    public function checkDuplicate(Request $request)
    {
        // Get the input values
        $gtin = $request->input('gtin');
        $name = $request->input('name');
        $receiptidyr1 = $request->input('receiptidyr1');
        $issuedateyr2 = $request->input('issuedateyr2');
        $receiptidyr3 = $request->input('receiptidyr3');
    
        // Check for duplicates in the database
        $exists = Tcc::where('gtin', $gtin)
                     ->orWhere('name', $name)
                     ->orWhere('receiptidyr1', $receiptidyr1)
                     ->orWhere('issuedateyr2', $issuedateyr2)
                     ->orWhere('receiptidyr3', $receiptidyr3)
                     ->exists();
    
        // Return JSON response based on duplicate status
        if ($exists) {
            return response()->json(['status' => 'duplicate', 'message' => 'already exists.']);
        } else {
            return response()->json(['status' => 'unique']);
        }
    }

   
    
    public function store(Request $request)
    {
        // dd($request->all());
        try {

        $request->validate([
            
        ]);
        
        // Create a new TCC instance and fill it with the request data
        $tcc = new Tcc($request->all());
        $tcc->ref_no = Str::random(14);
        
        // Save the TCC data to the database
        $tcc->save();

        // Retrieve the TIN from the session
        $randomTin = session('generated_tin');

        // If TIN is not in the session, generate a new one
        if (!$randomTin) {
            // Generate a random 12-digit number for 'tin'
            $randomTin = str_pad(rand(1, 999999999999), 12, '0', STR_PAD_LEFT);

            // Store the generated TIN in the session
            session(['generated_tin' => $randomTin]);
        }

        // // Create a new TCC instance and fill it with the request data
        // $tcc = new Tcc($request->all());

        // Set the 'tin' field with the generated random number
        $tcc->tin = $randomTin;
        
         // Fetch the latest TCC record from the database
        $latestTcc = Tcc::latest()->first();

        // Generate the TCC number using the latest ID
        $tccNumber = 'TCC' . str_pad($latestTcc->id, 5, '0', STR_PAD_LEFT);

        // Update the TCC record with the generated TCC number
        $latestTcc->update(['tcc' => $tccNumber]);
        
        Log::info('Stored Successfully: ');
        session(['data' => $request->all()]);


        // Save the TCC data to the database
        $tcc->save();
        // Log::info('Stored Successfully: ');
        
        // session(['data' => $request->all()]);
        Log::info('Stored Data in Session: ' . json_encode(session('data')));

        return back()->withSuccess('TCC data stored successfully.'); 
    } catch (\Exception $e) {
        // Log the exception
        Log::error($e->getMessage());

        // Handle the exception as needed
        return back()->withError('An error occurred while storing TCC data.');
    }
    }   
    
    // public function store(Request $request)
    // {
    //     // Check for duplicate submission using a session token
    //     $submissionToken = $request->session()->get('submission_token');
        
    //     if ($submissionToken && $submissionToken === $request->input('submission_token')) {
    //         // If the token matches the one in the session, it’s a duplicate submission
    //         return back()->withError('Duplicate submission detected. Please do not resubmit.');
    //     }
    
    //     try {
    //         // Begin a database transaction to ensure atomicity
    //         DB::transaction(function () use ($request) {
    
    //             // Validate the request data as needed
    //             $request->validate([
    //                 // Define validation rules here if required
    //             ]);
    
    //             // Create a new TCC instance and fill it with the request data
    //             $tcc = new Tcc($request->all());
    //             $tcc->ref_no = Str::random(14);
                
    //             // Retrieve or generate the TIN from the session
    //             $randomTin = session('generated_tin');
    //             if (!$randomTin) {
    //                 // Generate a random 12-digit TIN if not already generated
    //                 $randomTin = str_pad(rand(1, 999999999999), 12, '0', STR_PAD_LEFT);
    //                 session(['generated_tin' => $randomTin]);
    //             }
    //             $tcc->tin = $randomTin;
    
    //             // Fetch the latest TCC record from the database
    //             $latestTcc = Tcc::latest()->first();
    
    //             // Generate the TCC number using the latest record's ID
    //             $tccNumber = 'TCC' . str_pad($latestTcc->id ?? 1, 5, '0', STR_PAD_LEFT);
    //             $tcc->tcc = $tccNumber; // Assign the generated TCC number
    
    //             // Save the TCC record to the database
    //             $tcc->save();
    
    //             // Update the session with a new unique submission token to prevent duplicate submissions
    //             $request->session()->put('submission_token', Str::uuid()->toString());
                
    //             Log::info('TCC stored successfully: ' . json_encode($tcc));
    //             session(['data' => $request->all()]);
    //         });
    
    //         return back()->withSuccess('TCC data stored successfully.');
    
    //     } catch (\Exception $e) {
    //         // Log any errors
    //         Log::error('Error storing TCC data: ' . $e->getMessage());
    
    //         // Return with an error message
    //         return back()->withError('An error occurred while storing TCC data.');
    //     }
    // }
    


   
}
