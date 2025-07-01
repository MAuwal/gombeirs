<x-default-layout>

    @section('title')
        Users
    @endsection

   
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    {!! getIcon('magnifier', 'fs-3 position-absolute ms-5') !!}
                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search Payment" id="mySearchInput"/>
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <!--begin::Add user-->
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                        {!! getIcon('plus', 'fs-2', '', 'i') !!}
                        Add User
                    </button> -->
                    <!--end::Add user-->
                </div>
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
                <table id="kt_datatable_responsive" class="table table-striped border rounded gy-5 gs-7">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-800">
                            <th class="min-w-150px" data-priority="1">Id</th>
                            <th class="min-w-300px">Transaction Reference</th>
                            <th class="min-w-300px">Type Channel</th>
                            <!-- <th>Age</th>
                            <th>Start date</th> -->
                            <th class="min-w-100px" data-priority="2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>

    @push('scripts')
      
        <script>
          $("#kt_datatable_responsive").DataTable({
                responsive: true
            });
        </script>
    @endpush

</x-default-layout>
