<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{MDA,Subhead};

class SubheadDropDownController extends Controller
{
    public function index()
    {
        $agencies = MDA::get(['mda_name','mda_code']);
        return view('dropdown',compact('agencies'));
    }
 
    public function fetchSubhead(Request $request)
    {
        $data['subheads'] = Subhead::where('mda_code',$request->mda_code)->get(['revenue_item','revenue_item_code']);
        return response()->json($data);
    }
 
}
