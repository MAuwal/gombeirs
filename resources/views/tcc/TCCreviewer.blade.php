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
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tccs as $tcc)
        <tr>
            <td>{{ $tcc->name }}</td>
            <td>{{ $tcc->gtin }}</td>
            <td>{{ $tcc->taxpaidyr3 }}</td>
            <td>{{ $tcc->tccType }}</td>
            <td>{{ $tcc->business_status }}</td>
            <td>{{ $tcc->ref_no }}</td>
            <td>
                @if ($tcc->status === 'rejected')
                <a href="{{ route('tcc.edit', $tcc->id) }}" class="btn btn-primary">Edit</a>
                @else
                <span class="text-muted">Approved</span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Include Bootstrap and DataTable JS files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#tccss').DataTable();

        // Download button logic for downloading PDFs
        $(document).on('click', '.downloadBtn', function() {
            var tccId = $(this).data('tcc-id');
            downloadPdf(tccId);
        });

        function downloadPdf(tccId) {
            var url = '{{ route("downloadPdf", ":tccId") }}';
            url = url.replace(':tccId', tccId);
            window.location = url;
        }

        $(document).on('click', '.downloadIndividual', function() {
            var tccId = $(this).data('tcc-id');
            downloadPdf2(tccId);
        });

        function downloadPdf2(tccId) {
            var url = '{{ route("downloadPdf2", ":tccId") }}';
            url = url.replace(':tccId', tccId);
            window.location = url;
        }

        // Handle edit button click
        $('.editTcc').click(function() {
            var id = $(this).data('tcc-id');
            var url = '{{ route("tcc.edit", ":id") }}';
            url = url.replace(':id', id);
        });
    });
</script>


</x-default-layout>
