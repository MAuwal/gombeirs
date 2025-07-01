<x-default-layout>

    @section('title')
        Invoice
    @endsection

    <!--begin::Content container-->
    <!-- <a href="{{ $view }}" class="btn btn-info">View</a> -->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <!--begin::Invoice 2 main-->
        <div class="card">
            <!--begin::Body-->
            <div class="card-body p-lg-20">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-xl-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
                        <!--begin::Invoice 2 content-->
                        <div class="mt-n1">
                            <!--begin::Top-->
                            <div class="d-flex flex-stack pb-10">
                                <!--begin::Logo-->
                                <a href="#">
                                    <img alt="Logo" src="assets/media/svg/brand-logos/code-lab.svg" />
                                </a>
                                <!--end::Logo-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-sm btn-success">Pay Now</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Top-->
                            <!--begin::Wrapper-->
                            <div class="m-0">
                                <!-- Your existing content goes here -->
                                <!-- Replace the following comments with your actual content -->
                                <!--begin::Label-->
                                <div class="fw-bold fs-3 text-gray-800 mb-8">Invoice #34782</div>
                                <!--end::Label-->
                                <!-- Your existing content goes here -->

                                <!--begin::Table-->
                                <div class="table-responsive border-bottom mb-9">
                                    <table class="table mb-3">
                                        <!-- Your existing table content goes here -->
                                        <thead>
                                            <tr class="border-bottom fs-6 fw-bold text-muted">
                                                <th class="min-w-175px pb-2">Description</th>
                                                <th class="min-w-70px text-end pb-2">Hours</th>
                                                <th class="min-w-80px text-end pb-2">Rate</th>
                                                <th class="min-w-100px text-end pb-2">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="fw-bold text-gray-700 fs-5 text-end">
                                                <td class="d-flex align-items-center pt-6">
                                                    <i class="fa fa-genderless text-danger fs-2 me-2"></i>Creative Design
                                                </td>
                                                <td class="pt-6">80</td>
                                                <td class="pt-6">$40.00</td>
                                                <td class="pt-6 text-dark fw-bolder">$3200.00</td>
                                            </tr>
                                            <!-- More rows go here -->
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table-->

                                <!-- Your other content goes here -->

                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Invoice 2 content-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Sidebar-->
                    <div class="m-0">
                        <!--begin::Invoice 2 sidebar-->
                        <div class="d-print-none border border-dashed border-gray-300 card-rounded h-lg-100 min-w-md-350px p-9 bg-lighten">
                            <!-- Your existing sidebar content goes here -->
                            <!-- Replace the following comments with your actual sidebar content -->
                            <!--begin::Labels-->
                            <div class="mb-8">
                                <span class="badge badge-light-success me-2">Approved</span>
                                <span class="badge badge-light-warning">Pending Payment</span>
                            </div>
                            <!--end::Labels-->

                            <!-- Your other sidebar content goes here -->

                            <!--end::Invoice 2 sidebar-->
                        </div>
                    </div>
                    <!--end::Sidebar-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Invoice 2 main-->
    </div>
    <!--end::Content container-->

    <!-- Your existing modals and other components go here -->
    <!-- Replace the following comment with your actual modals and other components -->
    

</x-default-layout>
