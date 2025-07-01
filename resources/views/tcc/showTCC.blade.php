<x-default-layout>

<style>
    th{
        font-weight: 700;
    }
</style>

    <h1>TCC Records</h1>
    
  <table id="tccss" class="table table-striped border rounded gy-5 gs-7">
    <thead>
        <tr>
            <th>Name</th>
            <th>GTIN</th>
            <th>Tax paid 2023 (NGN)</th>
            <th>Tax Outstanding 2023 (NGN)</th>
            <th>Business Status</th>
            <th>Ref Number</th>
            <th>Download</th>
            <th>Comment</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tccs as $tcc)
            <tr>
                <td>{{ $tcc->name }}</td>
                <td>{{ $tcc->gtin }}</td>
                <td>{{ $tcc->taxpaidyr3 }}</td>
                <td>{{ $tcc->taxOutstandingyr3 }}</td>
                <td>{{ $tcc->business_status }}</td>
                <td>{{ $tcc->ref_no }}</td>
                <td>
                  @if($tcc->status === 'approved')
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton{{ $tcc->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                Download
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $tcc->id }}">
                                <li><a class="dropdown-item downloadIndividual" href="#" data-tcc-id="{{ $tcc->id }}">Download Individual</a></li>
                                <li><a class="dropdown-item downloadBtn" href="#" data-tcc-id="{{ $tcc->id }}">Download All</a></li>
                            </ul>
                        </div>
                    @elseif($tcc->status === 'rejected')
                        <h6 style="color: red;">TCC Rejected</h6>
                    @else
                        TCC not Approved
                    @endif
                </td>
                <td>{{ $tcc->comment }}</td>
                <td>
                    @if($tcc->status === 'rejected')
                        <a href="{{ route('tcc.edit', $tcc->id) }}" class="btn btn-primary btn-sm editTcc" data-tcc-id="{{ $tcc->id }}">
                            Edit
                        </a>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>




 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<script>
    $('#tccss').DataTable();
    
$(document).on('click', '.downloadBtn', function() {
    var tccId = $(this).data('tcc-id');
    console.log("Button clicked with tccId:", tccId);
    downloadPdf(tccId);
});

function downloadPdf(tccId) {
    var url = '{{ route("downloadPdf", ":tccId") }}';
    url = url.replace(':tccId', tccId);
    console.log("Download URL:", url);
    window.location = url;
}
$(document).on('click', '.downloadIndividual', function() {
    var tccId = $(this).data('tcc-id');
    console.log("Button clicked with tccId:", tccId);
    downloadPdf2(tccId);
});

function downloadPdf2(tccId) {
    var url = '{{ route("downloadPdf2", ":tccId") }}';
    url = url.replace(':tccId', tccId);
    console.log("Download URL:", url);
    window.location = url;
}

$(document).ready(function() {
    $('.editTcc').click(function() {
        var id = $(this).data('tcc-id');
        var url = '{{ route("tcc.edit", ":id") }}';
        url = url.replace(':id', id);
    });
});




</script>

</x-default-layout>
