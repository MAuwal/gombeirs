<x-default-layout>

    @section('title')
        Dashboard
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endsection

<!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <div class="col-xl-4">
            <!--begin::Statistics Widget 5-->
            <a href="#" class="card bg-body-white hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <i class="ki-duotone ki-basket text-primary fs-2x ms-n1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                    <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">JEWEL
PLATFORM
TOTAL
REVENUE 
YTD</div>
<!--<div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">-->
<!--    <span class="ms-n1 fw-bold fs-3" id="revenue" data-kt-countup="true" data-kt-countup-value="{{ $totalPayments }}">0</span>-->
<!--</div>-->
<div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">
    NGN <span id="totalPayments"></span>
</div>

<script>
    var totalPayments = {{ $totalPayments }}; // Your variable from server-side
    document.getElementById('totalPayments').innerText = totalPayments.toLocaleString();
</script>

                </div>
                
                 
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
        <div class="col-xl-4">
            <!--begin::Statistics Widget 5-->
            <a href="{{ route('taxpayers.all') }}" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <i class="ki-duotone ki-element-11 text-white fs-2x ms-n1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                   <div class="text-white fw-bold fs-2 mb-2 mt-5">JEWEL
PLATFORM TOTAL
TAXPAYERS</div>
            <div class="fw-semibold text-white fw-bold fs-3"data-kt-countup="true" data-kt-countup-value="{{ $totalTaxpayers }}">0</span></div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
        

        
        <div class="col-xl-4">
            <!--begin::Statistics Widget 5-->
            <a href="#" class="card bg-dark hoverable card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <i class="ki-duotone ki-chart-simple text-gray-100 fs-2x ms-n1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                    <div class="fw-semibold text-white fw-bold fs-3">JEWEL
PLATFORM CURRENT
MONTH <br> <span id="currentMonth"></span>
</div>
                    
                    <div class="fw-semibold text-white fw-bold fs-3">NGN {{ $totalCurrentMonth }}
                    </div>
                </div>
                
                        <script>
                            const currentDate = new Date();
                            const currentYear = currentDate.getFullYear();
                            const monthNames = [
                                "January", "February", "March", "April", "May", "June", 
                                "July", "August", "September", "October", "November", "December"
                            ];
                            const currentMonthName = monthNames[currentDate.getMonth()];
                            console.log(`Current Month: ${currentMonthName}`);
                            console.log(`Current Year: ${currentYear}`);

            document.getElementById("currentMonth").textContent = `${currentMonthName} ${currentYear}`
        </script>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
    </div>
    <!--end::Row-->
    
    
    <!--begin::Row-->
<!--    <div class="row g-5 g-xl-8">-->
        
<!--        <div class="col-xl-6">-->
            <!--begin::Statistics Widget 5-->
<!--            <a href="" class="card bg-primary hoverable card-xl-stretch mb-xl-8">-->
                <!--begin::Body-->
<!--                <div class="card-body">-->
<!--                    <i class="ki-duotone ki-element-11 text-white fs-2x ms-n1">-->
<!--                        <span class="path1"></span>-->
<!--                        <span class="path2"></span>-->
<!--                        <span class="path3"></span>-->
<!--                        <span class="path4"></span>-->
<!--                    </i>-->
<!--                   <div class="text-white fw-bold fs-2 mb-2 mt-5">CURRENT-->
<!--MONTH-->
<!--COLLECTIONS-->
<!--VIA BANKS</div>-->
<!--            <div class="fw-semibold text-white fw-bold fs-3"data-kt-countup="true" data-kt-countup-value="{{ $ubapayments }}">0</span></div>-->
<!--                </div>-->
                <!--end::Body-->
<!--            </a>-->
            <!--end::Statistics Widget 5-->
<!--        </div>-->
        

        
<!--        <div class="col-xl-6">-->
            <!--begin::Statistics Widget 5-->
<!--            <a href="#" class="card bg-dark hoverable card-xl-stretch mb-5 mb-xl-8">-->
                <!--begin::Body-->
<!--                <div class="card-body">-->
<!--                    <i class="ki-duotone ki-chart-simple text-gray-100 fs-2x ms-n1">-->
<!--                        <span class="path1"></span>-->
<!--                        <span class="path2"></span>-->
<!--                        <span class="path3"></span>-->
<!--                        <span class="path4"></span>-->
<!--                    </i>-->
<!--                    <div class="fw-semibold text-white fw-bold fs-3">CURRENT-->
<!--MONTH OTHER-->
<!--COLLECTIONS <br> <span id="currentMonth"></span>-->
<!--</div>-->
                    
<!--                    <div class="fw-semibold text-white fw-bold fs-3">NGN -->
<!--                    </div>-->
<!--                </div>-->
                
                        
                <!--end::Body-->
<!--            </a>-->
            <!--end::Statistics Widget 5-->
<!--        </div>-->
<!--    </div>-->
    <!--end::Row-->
    
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
    <div class="col-xl-12">
        <!--begin::Statistics Widget 5-->
        <a href="" class="card bg-body-white hoverable card-xl-stretch mb-xl-8">
            <!--begin::Body-->
<!--            <div class="card-body">-->
<!--                <i class="ki-duotone ki-element-11 text-white fs-2x ms-n1">-->
<!--                    <span class="path1"></span>-->
<!--                    <span class="path2"></span>-->
<!--                    <span class="path3"></span>-->
<!--                    <span class="path4"></span>-->
<!--                </i>-->
<!--                <div class="text-green-900 fw-bold fs-2 mb-2 mt-5"><center>-->
<!--CURRENT MONTH-->
<!--GOMBE STATE TOTAL IGR        </center>        </div>-->
                
<!--                <div style="display: flex; justify-content: center; align-items: center; height: 30%;">-->
<!--    <div class="text-green-900 fw-bold fs-2 mb-2 mt-5">-->
<!--        NGN {{ $ubapayments }}-->
<!--    </div>-->
<!--</div>-->

<!--            </div>-->
            <!--end::Body-->
        </a>
        <!--end::Statistics Widget 5-->
    </div>
</div>

    <!--end::Row-->
    
    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-xxl-6">
           @include('partials/widgets/tables/_widget-14')
        </div>
        <!--end::Col-->
        <div class="col-xxl-6">
            @include('partials/widgets/charts/_widget-21')
        </div>
        
        <!--end::Col-->
       
    </div>
    <!--end::Row-->
    
    

    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        
        
        
         <div class="col-xxl-6">
            @include('partials/widgets/tables/_widget-15')
        </div>
        
         <div class="col-xxl-6">
            @include('partials/widgets/tables/_widget-211')
        </div>
        
        
        <!--end::Col-->
    </div>
    <!--end::Row-->
   

    <!-- Script to create Chart -->
   
 

</x-default-layout>
