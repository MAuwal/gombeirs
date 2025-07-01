<x-default-layout>

<style>
    th {
        font-weight: 700;
    }
    h1 {
        font-size: 18px;
        font-weight: bold;
        text-align: left;
        margin-top: 0;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        padding: 1px;
    }
    th, td {
        padding: 1px;
        text-align: left;
    }
    th {
        background-color: rgba(17, 153, 5, 0.774);
    }
    .logo {
        position: relative;
        margin-top: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 50px;
    }
    .img {
        width: 120px;
        height: 120px;
    }
    .img2 {
        width: 180px;
        height: 130px;
    }
    .qrcode img {
        height: 150px;
        width: 150px;
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
            <th>Approval Status</th>
            <th>Rejection Status</th>
            <th>View TCC</th>
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
            <!--<td>-->
            <!--    @if($tcc->status !== 'approved')-->
            <!--    <form action="{{ route('tcc.approve', $tcc->id) }}" method="POST">-->
            <!--        @csrf-->
            <!--        <button type="submit" class="btn btn-success">Approve</button>-->
            <!--    </form>-->
            <!--    @else-->
            <!--    Approved-->
            <!--    @endif-->
            <!--</td>-->
            <td>
            @if($tcc->status === 'approved')
                Approved
            @elseif($tcc->status !== 'rejected')
                <form action="{{ route('tcc.approve', $tcc->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Approve</button>
                </form>
            @else
                <!-- Status is "rejected" so nothing is displayed -->
            @endif
        </td>
            <td>
                @if($tcc->status !== 'approved' && $tcc->status !== 'rejected')
                <button type="button" class="btn btn-danger reject-btn" data-tcc-id="{{ $tcc->id }}" data-bs-toggle="modal" data-bs-target="#rejectModal">Reject</button>
                @elseif($tcc->status === 'rejected')
                Rejected
                @endif
            </td>
            <td>
                <button type="button" class="btn btn-primary view-tcc-btn" data-tcc="{{ json_encode($tcc) }}" data-bs-toggle="modal" data-bs-target="#tccModal">
                    View TCC
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


<!-- Modal structure -->
<div class="modal fade" id="tccModal" tabindex="-1" aria-labelledby="tccModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tccModalLabel">Tax Clearance Certificate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="tccContent">
                   
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rejectModalLabel">Reason for Rejection</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="rejectForm" action="" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="reason" class="form-label">Please provide a reason for the rejection:</label>
                        <textarea class="form-control" id="reason" name="reason" rows="3" required></textarea>
                    </div>
                    <input type="hidden" name="tcc_id" id="tcc_id" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Reject</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
   $(document).on('click', '.reject-btn', function () {
        var tccId = $(this).data('tcc-id');
        $('#rejectForm').attr('action', '/tcc/reject/' + tccId);
        $('#tcc_id').val(tccId);
    });



    $(document).on('click', '.view-tcc-btn', function () {
        var tcc = $(this).data('tcc');
        var modalBody = `
            <h1 style="text-align:center">Gombe State Internal Revenue Service</h1>
            <h4 style="text-align:center">ADDRESS: Opposite Custodian Hotel...</h4>
            <h3 style="text-align: center; font-weight: bold; background-color: rgb(17, 153, 5); color: #fff; padding: 5px;">GOMBE STATE TAX CLEARANCE CERTIFICATE</h3>
            <table>
                <tr><td><b>TCC No:</b></td><td>: ${tcc.id}</td></tr>
                <tr><td><b>Date Of Issue:</b></td><td>: ${new Date().toLocaleDateString()}</td></tr>
                <tr><td><b>Expiry Date:</b></td><td>: 31-12-2024</td></tr>
                <tr><td><b>Name Of Taxpayer:</b></td><td>: ${tcc.name}</td></tr>
                <tr><td><b>BN No:</b></td><td>: ${tcc.rc || ''}</td></tr>
                <tr><td><b>Date Of Incorporation:</b></td><td>: ${tcc.date_of_incorporation || ''}</td></tr>
                <tr><td><b>GTIN:</b></td><td>: ${tcc.gtin}</td></tr>
                <tr><td><b>TIN:</b></td><td>: ${tcc.tin || ''}</td></tr>
                <tr><td><b>Business Address:</b></td><td>: ${tcc.business_address || ''}</td></tr>
                <tr><td><b>Business Status:</b></td><td>: ${tcc.business_status || ''}</td></tr>
                <tr><td><b>Tax Paid (2021):</b></td><td>: NGN ${tcc.taxpaidyr1}</td></tr>
                <tr><td><b>Tax Paid (2022):</b></td><td>: NGN ${tcc.taxpaidyr2}</td></tr>
                <tr><td><b>Tax Paid (2023):</b></td><td>: NGN ${tcc.taxpaidyr3}</td></tr>
            </table>
          
        `;
        $('#tccContent').html(modalBody);
    });

    $(document).ready(function () {
        $('#tccss').DataTable();
    });
</script>

</x-default-layout>
