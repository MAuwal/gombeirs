<x-default-layout>

    @section('title')
        User Invoice
    @endsection

    @section('breadcrumbs')
       
    @endsection

    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    {!! getIcon('magnifier', 'fs-3 position-absolute ms-5') !!}
                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search" id="mySearchInput"/>
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                
                <!--end::Toolbar-->

                <!--begin::Modal-->
               
                <!--end::Modal-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->
            <div class="table-responsive">
                {!! $dataTable->table() !!}
         </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>

    @push('scripts')
       
    {{ $dataTable->scripts() }}
    

        
    @endpush
    
    
     <script>
            // Apply DataTables search when the user types in the search input
           
           $('#mySearchInput').on('keyup', function () {
            var dataTable = $('#kt_datatable_responsive').DataTable();
            dataTable.search($(this).val()).draw();
        });

        </script>

    

</x-default-layout>
