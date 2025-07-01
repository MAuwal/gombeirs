<x-default-layout>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">
	    
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Page bg image-->
			<style>body { background-image: url('assets/media/auth/bg10.jpeg'); } [data-bs-theme="dark"] body { background-image: url('assets/media/auth/bg10-dark.jpeg'); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - New password -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="d-flex flex-lg-row-fluid">
					<!--begin::Content-->
					<div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
						<!--begin::Image-->
					<img
                  class="rounded-pill"
                  src="{{ asset('landingPage/img/logo.jpg') }}"
                  alt=""
                  style="width: 200px"
              />
						<!--end::Image-->
						<!--begin::Title-->
						<h3 class="text-gray-700 fs-2qx fw-bold text-center mb-7">Verify the Genuineness of your Receipt</h3>
						<!--end::Title-->
						
						<div id="invoiceDetailsSection" style="display: none;">
                            
                            <h2>Taxpayer Name: <span id="Name"></span></h2>
                            <h2>Revenue Item Name: <span id="revenueItemName"></span></h2>
                            <h2>Agency Name: <span id="agencyName"></span></h2>
                            <h2>Amount: <span id="amount"></span></h2>
                            <h2>Transaction Ref: <span id="ref"></span></h2>
                            <h2>Status: <span id="status"></span></h2>
                        </div>
						
					</div>
					<!--end::Content-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
					<!--begin::Wrapper-->
					<div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
						<!--begin::Content-->
						<div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
							<!--begin::Wrapper-->
							<div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
								<!--begin::Form-->
								<form class="form w-100" novalidate="novalidate" id="kt_new_password_form" data-kt-redirect-url="../../demo25/dist/authentication/layouts/overlay/sign-in.html" action="#">
									<!--begin::Heading-->
									<div class="text-center mb-10">
										<!--begin::Title-->
										<h1 class="text-dark fw-bolder mb-3">Input your Receipt Reference Number</h1>
										<!--end::Title-->
									
									</div>
									<!--begin::Heading-->
									<!--begin::Input group-->
									<div class="fv-row mb-8" data-kt-password-meter="true">
										<!--begin::Wrapper-->
										<div class="mb-1">
											<!--begin::Input wrapper-->
											
										
									<!--end::Input group=-->
									<div class="fv-row mb-8">
										<!--begin::Repeat Password-->
										<input type="text" placeholder="" name="receipt_reference" autocomplete="off" class="form-control bg-transparent" />
										<!--end::Repeat Password-->
									</div>
									<!--end::Input group=-->
									
									<!--begin::Action-->
									<div class="d-grid mb-10">
										<button type="button" id="kt_new_password_submit" class="btn btn-primary">
											<!--begin::Indicator label-->
											<span class="indicator-label">Verify</span>
											<!--end::Indicator label-->
											<!--begin::Indicator progress-->
											<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											<!--end::Indicator progress-->
										</button>
									</div>
									<!--end::Action-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Footer-->
							<div class="w-lg-500px d-flex flex-stack">
								<!--begin::Languages-->
								<div class="me-10">
								
									
								</div>
								<!--end::Languages-->
								<!--begin::Links-->
								
								<!--end::Links-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - New password-->
		</div>
		
		
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/authentication/reset-password/new-password.js"></script>
		<!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $("#kt_new_password_submit").click(function () {
                var invoiceId = $("input[name='receipt_reference']").val();
    
                $.ajax({
                    url: '/receipt/' + invoiceId,
                    type: 'GET',
                    success: function (response) {
                        if (response.success) {
                            // Update the displayed details
                            $("#agencyName").text(response.invoice.agency_name);
                            $("#revenueItemName").text(response.invoice.revenue_item_name);
                             $("#Name").text(response.invoice.taxpayer_name);
                           
                             $("#status").text(response.invoice.status);
                             $("#amount").text(response.invoice.rate);
                             $("#ref").text(response.invoice.transaction_ref);
                            
    
                            // Show the details section
                            $("#invoiceDetailsSection").show();
                        } else {
                            alert('Invoice not found');
                        }
                    },
                    error: function (xhr, status, error) {
                        alert('Error: ' + error);
                    }
                });
            });
        });
    </script>

		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>


</x-default-layout>