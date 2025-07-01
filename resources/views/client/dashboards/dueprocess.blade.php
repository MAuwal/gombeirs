<x-default-layout>

    @section('title')
        Due Process 
    @endsection

    @section('breadcrumbs')
        Due Process  Dashboard
    @endsection


   <div class="row g-5 g-xl-8">
        <div class="col-xl-4">
            <!--begin::Statistics Widget 5-->
            <a href="{{ route('dueprocessVetting.list') }}" class="card bg-body-white hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <i class="ki-duotone ki-basket text-primary fs-2x ms-n1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                    <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">Current Month (Vetting Fee)</div>
<!--<div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">-->
<!--    <span class="ms-n1 fw-bold fs-3" id="revenue" data-kt-countup="true" data-kt-countup-value="{{ $totalPayments }}">0</span>-->
<!--</div>-->
<div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">
    NGN <span id="TotalUserMonthly">{{ $TotalVetMonthly }}</span>
</div>



                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
        <div class="col-xl-4">
            <!--begin::Statistics Widget 5-->
            <a href="{{ route('dueprocessReg.list') }}" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <i class="ki-duotone ki-element-11 text-white fs-2x ms-n1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                     <div class="text-white fw-bold fs-2 mb-2 mt-5"> Current Month (Registration Fees) </div>
                   <div class="text-white fw-bold fs-2 mb-2 mt-5"> NGN <span id="TotalUserMonthly">{{ $TotalRegMonthly }}</span></div>
           
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
        <div class="col-xl-4">
            <!--begin::Statistics Widget 5-->
            <a href="{{ route('dueprocessTender.list') }}" class="card bg-dark hoverable card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <i class="ki-duotone ki-chart-simple text-gray-100 fs-2x ms-n1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                    <div class="text-gray-100 fw-bold fs-2 mb-2 mt-5">Current Month (Tender Fees)</div>
                    <div class="text-white fw-bold fs-2 mb-2 mt-5"> NGN <span id="TotalUserMonthly">{{ $TotalTenderMonthly }}</span></div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
    </div>
    <div class="row g-5 g-xl-8">
    <div class="col-xl-12">
        <!--begin::Statistics Widget 5-->
        <a href="" class="card bg-body-white hoverable card-xl-stretch mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
                <i class="ki-duotone ki-element-11 text-white fs-2x ms-n1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
                <div class="text-green-900 fw-bold fs-2 mb-2 mt-5"><center>
CURRENT MONTH DUE PROCESS REVENUE        </center>        </div>
                <!-- Display the ubaCurrentMonth value dynamically -->
                <div style="display: flex; justify-content: center; align-items: center; height: 30%;">
    <div class="text-green-900 fw-bold fs-2 mb-2 mt-5">
        NGN {{ $TotalUserMonthly }}
    </div>
</div>

            </div>
            <!--end::Body-->
        </a>
        <!--end::Statistics Widget 5-->
    </div>
</div>
   
</x-default-layout>
