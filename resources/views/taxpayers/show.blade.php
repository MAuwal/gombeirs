<x-default-layout>

    @section('title')
        Taxpayer
    @endsection

    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    {!! getIcon('magnifier', 'fs-3 position-absolute ms-5') !!}
                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search Taxpayer" id="mySearchInput"/>
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" >
                    <!--begin::Add user-->
                    <button type="button" class="btn btn-primary"  data-bs-target="">
                        {!! getIcon('plus', 'fs-2', '', 'i') !!}
                        Add Taxpayer
                    </button>
                    <!--end::Add user-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Modal-->
                <livewire:user.add-user-modal></livewire:user.add-user-modal>
                <!--end::Modal-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->
            <div class="table-responsive">
            <table id="taxpayers-table" class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Taxpayer Type</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($taxpayers as $taxpayer)
                <tr>

                
                    <td><a href="{{ route('taxpayers.show', ['id' => $taxpayer->id]) }}">
                            {{ $taxpayer->name }}
                        </a></td>
                    <td>{{ $taxpayer->phone_number }}</td>
                    <td>{{ $taxpayer->taxpayer_type }}</td>
                    <td>{{ $taxpayer->email }}</td>
                    <td>{{ $taxpayer->address }}</td>
                    <td><a href="{{ route('taxpayers.show', ['id' => $taxpayer->id]) }}">
                             View
                             
                        </a></td>
                
                </tr>
            @endforeach
        </tbody>
    </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>

    

    <script>
        $(document).ready(function() {
            $('#taxpayers-table').DataTable();
        });
    </script>

</x-default-layout>


