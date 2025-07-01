<!DOCTYPE html>
<html lang="en" >
  
<!--begin::Head-->
<head>
    
    <base href=""/>
    <title>Gombe</title>
    <meta name="csrf-token" content="FFp4IgPD2dyAhypymnGRMGqehdiTu2mQ5JaIXzUi">
    <meta charset="utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content=""/>
    <link rel="canonical" href=""/>
    <meta name="csrf-token" content="FFp4IgPD2dyAhypymnGRMGqehdiTu2mQ5JaIXzUi" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-xrR5ZMjn1YtVqdZg1fKOotL2fPz9t86r46cSpKJ2n2ZCX+C37DE5e5RzU0Tl4U5zmvAjrMqchLNMPtNjP/l9Gg==" crossorigin="anonymous" /> -->



    <link rel="shortcut icon" href="https://gombeirs.com/assets/media/logos/favicon.ico" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">
    <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
            <link rel="stylesheet" href="https://gombeirs.com/assets/plugins/global/plugins.bundle.css">
            <link rel="stylesheet" href="https://gombeirs.com/assets/css/style.bundle.css">
        <!--end::Global Stylesheets Bundle-->

    <!--begin::Vendor Stylesheets(used by this page)-->
            <link rel="stylesheet" href="https://gombeirs.com/assets/plugins/custom/datatables/datatables.bundle.css">
        <!--end::Vendor Stylesheets-->

    <!--begin::Custom Stylesheets(optional)-->
        <!--end::Custom Stylesheets-->

    <!-- Livewire Styles -->
<style >
    [wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {
        display: none;
    }

    [wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {
        display:none;
    }

    [wire\:offline] {
        display: none;
    }

    [wire\:dirty]:not(textarea):not(input):not(select) {
        display: none;
    }

    input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {
        animation-duration: 50000s;
        animation-name: livewireautofill;
    }

    @keyframes livewireautofill { from {} }
</style>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
    <!-- added for datatable   -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    
    
     <style>
        .uppercase {
            text-transform: uppercase;
        }
    </style>
 
    
</head>
<!--end::Head-->

<!--begin::Body-->
<body class="app-default" id="kt_app_body" data-kt-name="metronic" data-kt-app-layout="light-sidebar" data-kt-app-header-fixed="false" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"  oncontextmenu="return false">

<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
<!--end::Theme mode setup on page load-->


    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
	<!--begin::Header container-->
	<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
		<!--begin::Sidebar mobile toggle-->
		<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
			<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle"><span class="ki-duotone ki-abstract-14 fs-2 fs-md-1"><span class="path1"></span><span class="path2"></span></span></div>
		</div>
		<!--end::Sidebar mobile toggle-->
		<!--begin::Mobile logo-->
		<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
			<a href="https://gombeirs.com/dashboard" class="d-lg-none">
				<img alt="Logo" src="https://gombeirs.com/assets/media/logos/default-small.svg" class="h-30px" />
			</a>
		</div>
		<!--end::Mobile logo-->
		<!--begin::Header wrapper-->
		<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
						<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0">
    <!--begin::Search-->
    <div class="app-navbar-item align-items-stretch ms-1 ms-md-3">
       
    </div>
    <!--end::Search-->
    <!--begin::Activities-->
	<div class="app-navbar-item ms-1 ms-md-4">
        <!--begin::Drawer toggle-->
		<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" id="kt_activities_toggle"></div>
        <!--end::Drawer toggle-->
    </div>
    <!--end::Activities-->
    <!--begin::Notifications-->
	<div class="app-navbar-item ms-1 ms-md-4">
        <!--begin::Menu- wrapper-->
		<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" id="kt_menu_item_wow"></div>
       
        <!--end::Menu wrapper-->
    </div>
    <!--end::Notifications-->
    <!--begin::Chat-->
	<div class="app-navbar-item ms-1 ms-md-4">
        <!--begin::Menu wrapper-->
		<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px position-relative" id="kt_drawer_chat_toggle"><span class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span> 
		<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span></div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::Chat-->
    <!--begin::My apps links-->
	<div class="app-navbar-item ms-1 ms-md-4">
        <!--begin::Menu wrapper-->
		<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"><span class="ki-duotone ki-element-11 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span></div>
       
        <!--end::Menu wrapper-->
    </div>
    <!--end::My apps links-->
    <!--begin::User menu-->
	<div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
		<div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                            <img src="https://gombeirs.com/storage/avatars/Jxx8JTfISxcJ5tpPKrhZ6eLevyd4ztBHkMLLY1nt.jpg" class="rounded-3" alt="user" />
                    </div>
        <!--begin::User account menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="https://gombeirs.com/storage/avatars/Jxx8JTfISxcJ5tpPKrhZ6eLevyd4ztBHkMLLY1nt.jpg"/>
                            </div>
            <!--end::Avatar-->
            <!--begin::Username-->
            <div class="d-flex flex-column">
                <div class="fw-bold d-flex align-items-center fs-5">Abdulrahman Saeed
                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                </div>
                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">abdrhmnsaeed@gmail.com</a>
            </div>
            <!--end::Username-->
        </div>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="#" class="menu-link px-5">My Profile</a>
    </div>
    <!--end::Menu item-->
  
   
    <!--end::Menu item-->
    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->
    <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
        <a href="#" class="menu-link px-5">
			<span class="menu-title position-relative">Mode 
			<span class="ms-5 position-absolute translate-middle-y top-50 end-0"><span class="ki-duotone ki-night-day theme-light-show fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></span> <span class="ki-duotone ki-moon theme-dark-show fs-2"><span class="path1"></span><span class="path2"></span></span></span></span>
		</a>
		<!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
	<!--begin::Menu item-->
	<div class="menu-item px-3 my-0">
		<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
			<span class="menu-icon" data-kt-element="icon"><span class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></span></span>
			<span class="menu-title">Light</span>
		</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item px-3 my-0">
		<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
			<span class="menu-icon" data-kt-element="icon"><span class="ki-duotone ki-moon fs-2"><span class="path1"></span><span class="path2"></span></span></span>
			<span class="menu-title">Dark</span>
		</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item px-3 my-0">
		<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
			<span class="menu-icon" data-kt-element="icon"><span class="ki-duotone ki-screen fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span></span>
			<span class="menu-title">System</span>
		</a>
	</div>
	<!--end::Menu item-->
</div>
<!--end::Menu-->	</div>
	<!--end::Menu item-->
	
	
    
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a class="button-ajax menu-link px-5" href="#" data-action="https://gombeirs.com/logout" data-method="post" data-csrf="FFp4IgPD2dyAhypymnGRMGqehdiTu2mQ5JaIXzUi" data-reload="true">
            Sign Out
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::User account menu-->
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->
    <!--begin::Header menu toggle-->
	<div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
		<div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle"><span class="ki-duotone ki-element-4 fs-1"><span class="path1"></span><span class="path2"></span></span></div>
    </div>
    <!--end::Header menu toggle-->
	<!--begin::Aside toggle-->
	<!--end::Header menu toggle-->
</div>
<!--end::Navbar-->
		</div>
		<!--end::Header wrapper-->
	</div>
	<!--end::Header container-->
</div>
<!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Sidebar-->
<div id="kt_app_sidebar" data-kt-app-layout="light-sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
	<!--begin::Logo-->
<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
	<!--begin::Logo image-->
	<a href="https://gombeirs.com/dashboard">
		<img alt="Logo" src="https://gombeirs.com/assets/media/logos/states.png" class="h-25px app-sidebar-logo-default" />
		<img alt="Logo" src="https://gombeirs.com/assets/media/logos/states.png" class="h-20px app-sidebar-logo-minimize" />
	</a>
	<!--end::Logo image-->
	<!--begin::Sidebar toggle-->
	<!--begin::Minimized sidebar setup:
            if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") {
                1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
                2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
                3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
                4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
            }
        -->
	<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize"><span class="ki-duotone ki-black-left-line fs-3 rotate-180 ms-1"><span class="path1"></span><span class="path2"></span></span></div>
	<script type="text/javascript">
		var sidebar_toggle = document.getElementById("kt_app_sidebar_toggle");  // Get the sidebar toggle button element
			</script>
	<!--end::Sidebar toggle-->
</div>
<!--end::Logo-->
	<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid" data-kt-app-layout="light-sidebar">
	<!--begin::Menu wrapper-->
	<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
		<!--begin::Menu-->
		<div class="menu menu-column menu-rounded menu-sub-indention px-3 fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
			<!--begin:Menu item-->
			
													
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon"><span class="ki-duotone ki-element-11 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span></span>
					<span class="menu-title">Dashboards</span>
					<span class="menu-arrow"></span>
				</span>i
				<!--end:Menu link-->
				<!--begin:Menu sub-->
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="https://gombeirs.com/adm/dashboard">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Default</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				</div>
				<!--end:Menu sub-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<div class="menu-item pt-5">
				<!--begin:Menu content-->
				<div class="menu-content">
					<span class="menu-heading fw-bold text-uppercase fs-7">Category</span>
				</div>
				<!--end:Menu content-->
			</div>
			<!--end:Menu item-->

					<div class="menu-item">
						<!--begin:Menu link-->

						
						<a href="https://gombeirs.com/taxpayers/all" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3"><span class="ki-duotone ki-abstract-44 text-info fs-1"><span class="path1"></span><span class="path2"></span></span></span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">Taxpayers</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon"><span class="ki-duotone ki-element-11 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span></span>
					<span class="menu-title">TCC</span>
					<span class="menu-arrow"></span>
				</span>i
				<!--end:Menu link-->
				<!--begin:Menu sub-->
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="https://gombeirs.com/tcc-form">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">New</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				</div>
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="https://gombeirs.com/showTCC">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">View</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				</div>
				<!--end:Menu sub-->
			</div>
			
			
					
					<div class="menu-item">
						
						<!--begin:Menu link-->

						<a href="https://gombeirs.com/invoices2" class="menu-link">

							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3"><span class="ki-duotone ki-switch text-warning fs-1"><span class="path1"></span><span class="path2"></span></span></span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">Invoice</span>
							</span>
						</a>
					</div>
					
						<div class="menu-item">
						<!--begin:Menu link-->

						<a href="https://gombeirs.com/verify2" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3"><span class="ki-duotone ki-abstract-42 text-danger fs-1"><span class="path1"></span><span class="path2"></span></span></span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">Verify Receipt</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					
					<div class="menu-item">
						<!--begin:Menu link-->

						<a href="https://gombeirs.com/invoices/report" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3"><span class="ki-duotone ki-abstract-42 text-danger fs-1"><span class="path1"></span><span class="path2"></span></span></span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">Report</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					
					


																										
						<div class="menu-item">
						<!--begin:Menu link-->

						
						<a href="https://gombeirs.com/taxpayers" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3"><span class="ki-duotone ki-abstract-44 text-info fs-1"><span class="path1"></span><span class="path2"></span></span></span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">User Taxpayers</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>

					<div class="menu-item">
						<!--begin:Menu link-->
						<a href="https://gombeirs.com/returns" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3"><span class="ki-duotone ki-call text-primary fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span></span></span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">Returns</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					
					
					

					<div class="menu-item">
						
						<!--begin:Menu link-->

						<a href="https://gombeirs.com/Userinvoices" class="menu-link">

							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3"><span class="ki-duotone ki-switch text-warning fs-1"><span class="path1"></span><span class="path2"></span></span></span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">User Invoice</span>
							</span>
						</a>
					</div>
					
				
					<div class="menu-item">
						<!--begin:Menu link-->
			
						<a class="button-ajax menu-link px-5" href="#" data-action="https://gombeirs.com/logout" data-method="post" data-csrf="FFp4IgPD2dyAhypymnGRMGqehdiTu2mQ5JaIXzUi" data-reload="true">
           
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3"></span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">Sign Out</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					
			<!--begin:Menu item-->
			<div class="menu-item pt-5">
				<!--begin:Menu content-->
				<!-- <div class="menu-content">
					<span class="menu-heading fw-bold text-uppercase fs-7">Help</span>
				</div> -->

				<!--end:Menu content-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<div class="menu-item">
				<!--begin:Menu link-->
				<!-- <a class="menu-link " href="https://gombeirs.com/token">
					<span class="menu-icon"><span class="ki-duotone ki-rocket fs-2"><span class="path1"></span><span class="path2"></span></span></span>
					<span class="menu-title">Generate Token</span>
				</a> -->
				
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<div class="menu-item">
				<!--begin:Menu link-->
				<!-- <a class="menu-link " href="https://gombeirs.com/rrr">
					<span class="menu-icon"><span class="ki-duotone ki-rocket fs-2"><span class="path1"></span><span class="path2"></span></span></span>
					<span class="menu-title">Generate RRR</span>
				</a> -->
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->
				<!--begin:Menu item-->
				<div class="menu-item">
				<!--begin:Menu link-->
				<!-- <a class="menu-link " href="https://gombeirs.com/create">
					<span class="menu-icon"><span class="ki-duotone ki-rocket fs-2"><span class="path1"></span><span class="path2"></span></span></span>
					<span class="menu-title">Test Store RRR</span>
				</a> -->

				
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<div class="menu-item">
				<!--begin:Menu link-->
				<!-- <a class="menu-link" href="https://preview.keenthemes.com/laravel/metronic/docs/changelog" target="_blank">
					<span class="menu-icon"><span class="ki-duotone ki-code fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span></span>
					<span class="menu-title">Changelog v8.2.0</span>
				</a> -->
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->
		</div>
		<!--end::Menu-->
	</div>
	<!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->
	<!--begin::Footer-->

<!--end::Footer-->
</div>
<!--end::Sidebar-->
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
	<!--begin::Toolbar container-->
	<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
		<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
	<!--begin::Title-->
	<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
			</h1>
	<!--end::Title-->
	<!--begin::Breadcrumb-->
		<!--end::Breadcrumb-->
</div>
<!--end::Page title-->
		<!--begin::Actions-->
		<div class="d-flex align-items-center gap-2 gap-lg-3">
		</div>
		<!--end::Actions-->
	</div>
	<!--end::Toolbar container-->
</div>
<!--end::Toolbar-->
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-fluid">
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.20/jspdf.plugin.autotable.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dompurify@2"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>




<style>

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

form {
	margin: 0 auto;
	padding:10px;
	width:100%;
	height:auto;
	overflow:hidden;
	background:white;
	border-radius:10px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background-color: #03223e24;
}

form label {
	font-size:14px;
	color:darkgray;
	cursor:pointer;
    text-align: center;
}

form label,
form input {
	float:left;
	clear:both;
}



button[type=submit] {
	padding:15px 50px;
	width:auto;
	background:#1abc9c;
	border:none;
	color:white;
	cursor:pointer;
	display:inline-block;
	float:right;
	clear:right;
	-webkit-transition:0.2s ease all;
	   -moz-transition:0.2s ease all;
	    -ms-transition:0.2s ease all;
	     -o-transition:0.2s ease all;
	        transition:0.2s ease all;
}

input[type=submit]:hover {
	opacity:0.8;
}
input[type=date] {
	border-radius: 20px;
	width: 50%;
	height: 30px;
	border: 0;
	padding: 10px;
}
select {
	border-radius: 20px;
	width: 50%;
	height: 35px;
	border: 0;
	padding: 5px;
}

input[type="submit"]:active {
	opacity:0.4;
}
 table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px; /* Adjust margin as needed */
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    .label{
        width: 20%;
    }

    .filter{
        position: static;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .body{
         position: relative;
    }
    
     #invoice table {
            display: table;
        }
</style>


<div class="filter">

<!-- Filter Selection Form -->

<!--<form id="monthlyReportForm" method="GET" action="https://gombeirs.com/invoices/report">-->
<!--    <div class="label">-->
<!--        <label for="agency">Select Agency:</label>-->
<!--    </div>-->
<!--    <select id="agency" name="agency_name">-->
<!--        <option value="">--Select Agency--</option>-->
<!--        -->
<!--            <option value="gombe-state-internal-revenue-service">Gombe State Internal Revenue Service</option>-->
<!--        -->
<!--            <option value="ministry-of-trade-commerce-and-industry">Ministry of Trade, Commerce and Industry</option>-->
<!--        -->
<!--            <option value="gombe-state-commodity-exchange">Gombe State Commodity Exchange
</option>-->
<!--        -->
<!--            <option value="ministry-of-water-resources">Ministry of Water Resources
</option>-->
<!--        -->
<!--            <option value="ministry-of-works-and-transport">Ministry of Works and Transport</option>-->
<!--        -->
<!--            <option value="ministry-of-education">Ministry of Education
</option>-->
<!--        -->
<!--            <option value="fire-service-directorate">Fire Service Directorate
</option>-->
<!--        -->
<!--            <option value="sharia-court-of-appeal">Sharia Court of Appeal
</option>-->
<!--        -->
<!--            <option value="gombe-geographic-information-system-gogis">Gombe Geographic Information System GOGIS</option>-->
<!--        -->
<!--            <option value="high-court-of-justice">High Court of Justice
</option>-->
<!--        -->
<!--            <option value="ministry-of-health">Ministry of Health
</option>-->
<!--        -->
<!--            <option value="gombe-state-environmental-protection-agency-gosepa">Gombe State Environmental Protection Agency (GOSEPA)
</option>-->
<!--        -->
<!--            <option value="gombe-enterprises-development-and-promotion-agency-gespa">Gombe Enterprises Development and Promotion Agency (GESPA)
</option>-->
<!--        -->
<!--            <option value="gombe-state-investment-property-development-company">Gombe State Investment Property Development Company
</option>-->
<!--        -->
<!--            <option value="local-government-service-commission">LOCAL GOVERNMENT SERVICE COMMISSION</option>-->
<!--        -->
<!--            <option value="judicial-service-commission">JUDICIAL SERVICE COMMISSION</option>-->
<!--        -->
<!--            <option value="college-of-nursing-gombe">COLLEGE OF NURSING, GOMBE</option>-->
<!--        -->
<!--            <option value="college-of-health-technology">COLLEGE OF HEALTH TECHNOLOGY</option>-->
<!--        -->
<!--            <option value="gombe-state-scholarship-board">GOMBE STATE SCHOLARSHIP BOARD</option>-->
<!--        -->
<!--            <option value="teachers-service-commission">TEACHERS SERVICE COMMISSION </option>-->
<!--        -->
<!--            <option value="gombe-state-water-board">Gombe State Water Board
</option>-->
<!--        -->
<!--            <option value="ministry-of-youth-and-sports-development">Ministry of Youth and Sports Development
</option>-->
<!--        -->
<!--            <option value="office-of-the-state-auditor-general">Office of the State Auditor General
</option>-->
<!--        -->
<!--    </select>-->
<!--    <div class="label">-->
<!--        <label for="month">Select Month:</label>-->
<!--    </div>-->
<!--    <select id="month" name="month">-->
<!--        <option value="">--Select Month--</option>-->
<!--        -->
<!--            <option value="2024-01">January</option>-->
<!--        -->
<!--            <option value="2024-02">February</option>-->
<!--        -->
<!--            <option value="2024-03">March</option>-->
<!--        -->
<!--            <option value="2024-04">April</option>-->
<!--        -->
<!--            <option value="2024-05">May</option>-->
<!--        -->
<!--            <option value="2024-06">June</option>-->
<!--        -->
<!--            <option value="2024-07">July</option>-->
<!--        -->
<!--            <option value="2024-08">August</option>-->
<!--        -->
<!--            <option value="2024-09">September</option>-->
<!--        -->
<!--            <option value="2024-10">October</option>-->
<!--        -->
<!--            <option value="2024-11">November</option>-->
<!--        -->
<!--            <option value="2024-12">December</option>-->
<!--        -->
<!--    </select>-->
<!--    <button type="button" id="generateMonthlyReport" class="btn btn-sm btn-light-primary">-->
<!--        <i class="ki-duotone ki-cloud-download fs-3">-->
<!--            <span class="path1"></span>-->
<!--            <span class="path2"></span>-->
<!--        </i>Generate Report-->
<!--    </button>-->
<!--</form>-->


 
</div>

<!-- Section to display the monthly report details -->
<div id="monthly-report-section" style="display: none;">
    
    
</div>


<!-- Your main view -->
<div class="body">
    <!-- Display Agencies and Total Amounts -->
    <table id="invoice">
        <thead>
            <tr>
                <th>Agency Name</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="gombe-state-internal-revenue-service">Gombe State Internal Revenue Service</a></td>
                <td>N20,522,458</td>
            </tr>
            <tr id="details-gombe-state-internal-revenue-service" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="ministry-of-trade-commerce-and-industry">Ministry of Trade, Commerce and Industry</a></td>
                <td>N89,400</td>
            </tr>
            <tr id="details-ministry-of-trade-commerce-and-industry" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="gombe-state-commodity-exchange">Gombe State Commodity Exchange
</a></td>
                <td>N6,000</td>
            </tr>
            <tr id="details-gombe-state-commodity-exchange" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="ministry-of-water-resources">Ministry of Water Resources
</a></td>
                <td>N30,400</td>
            </tr>
            <tr id="details-ministry-of-water-resources" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="ministry-of-works-and-transport">Ministry of Works and Transport</a></td>
                <td>N38,250</td>
            </tr>
            <tr id="details-ministry-of-works-and-transport" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="ministry-of-education">Ministry of Education
</a></td>
                <td>N200</td>
            </tr>
            <tr id="details-ministry-of-education" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="fire-service-directorate">Fire Service Directorate
</a></td>
                <td>N5,000</td>
            </tr>
            <tr id="details-fire-service-directorate" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="sharia-court-of-appeal">Sharia Court of Appeal
</a></td>
                <td>N2,600</td>
            </tr>
            <tr id="details-sharia-court-of-appeal" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="gombe-geographic-information-system-gogis">Gombe Geographic Information System GOGIS</a></td>
                <td>N805,081</td>
            </tr>
            <tr id="details-gombe-geographic-information-system-gogis" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="high-court-of-justice">High Court of Justice
</a></td>
                <td>N603,800</td>
            </tr>
            <tr id="details-high-court-of-justice" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="ministry-of-health">Ministry of Health
</a></td>
                <td>N300,000</td>
            </tr>
            <tr id="details-ministry-of-health" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="gombe-state-environmental-protection-agency-gosepa">Gombe State Environmental Protection Agency (GOSEPA)
</a></td>
                <td>N30,000</td>
            </tr>
            <tr id="details-gombe-state-environmental-protection-agency-gosepa" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="gombe-enterprises-development-and-promotion-agency-gespa">Gombe Enterprises Development and Promotion Agency (GESPA)
</a></td>
                <td>N7,000</td>
            </tr>
            <tr id="details-gombe-enterprises-development-and-promotion-agency-gespa" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="gombe-state-investment-property-development-company">Gombe State Investment Property Development Company
</a></td>
                <td>N200,000</td>
            </tr>
            <tr id="details-gombe-state-investment-property-development-company" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="local-government-service-commission">LOCAL GOVERNMENT SERVICE COMMISSION</a></td>
                <td>N8,100</td>
            </tr>
            <tr id="details-local-government-service-commission" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="judicial-service-commission">JUDICIAL SERVICE COMMISSION</a></td>
                <td>N0</td>
            </tr>
            <tr id="details-judicial-service-commission" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="college-of-nursing-gombe">COLLEGE OF NURSING, GOMBE</a></td>
                <td>N0</td>
            </tr>
            <tr id="details-college-of-nursing-gombe" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="college-of-health-technology">COLLEGE OF HEALTH TECHNOLOGY</a></td>
                <td>N0</td>
            </tr>
            <tr id="details-college-of-health-technology" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="gombe-state-scholarship-board">GOMBE STATE SCHOLARSHIP BOARD</a></td>
                <td>N1,000</td>
            </tr>
            <tr id="details-gombe-state-scholarship-board" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="teachers-service-commission">TEACHERS SERVICE COMMISSION </a></td>
                <td>N21,000</td>
            </tr>
            <tr id="details-teachers-service-commission" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="gombe-state-water-board">Gombe State Water Board
</a></td>
                <td>N1,500</td>
            </tr>
            <tr id="details-gombe-state-water-board" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="ministry-of-youth-and-sports-development">Ministry of Youth and Sports Development
</a></td>
                <td>N0</td>
            </tr>
            <tr id="details-ministry-of-youth-and-sports-development" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                                    <tr>
                <td><a href="#" class="agency-link" data-agency="office-of-the-state-auditor-general">Office of the State Auditor General
</a></td>
                <td>N12</td>
            </tr>
            <tr id="details-office-of-the-state-auditor-general" style="display: none;">
                <td colspan="2">
                    <table id="subHeadinvoice">
                        <thead>
                            <tr>
                                <th>Subhead</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="subhead-details">
                            
                        </tbody>
                    </table>
                </td>
            </tr>
                    </tbody>
    </table>
</div>

<div style="margin-top: 20px; display: flex; gap: 20px;">
    <button id="downloadButton" class="btn btn-sm btn-light-primary" style="border: 1px solid" onclick="downloadAgency()">
        <i class="ki-duotone ki-cloud-download fs-3">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>Download Agency Table
    </button>
    <button id="downloadButton" class="btn btn-sm btn-light-primary" style="border: 1px solid" onclick="downloadSubhead()">
        <i class="ki-duotone ki-cloud-download fs-3">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>Download Subhead Table
    </button>
    <!--<button id="downloadButton" class="btn btn-sm btn-light-primary" style="border: 1px solid" onclick="download()">-->
    <!--    <i class="ki-duotone ki-cloud-download fs-3">-->
    <!--        <span class="path1"></span>-->
    <!--        <span class="path2"></span>-->
    <!--    </i>Download as PDF-->
    <!--</button>-->
</div>

<script>

  document.getElementById("filterForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission behavior
        var formData = new FormData(this);
        var queryString = new URLSearchParams(formData).toString(); // Serialize form data

        // Send an AJAX request with the serialized data appended to the URL
        fetch(`${this.getAttribute("action")}?${queryString}`, {
            method: 'GET',
        })
        .then(response => response.text())
        .then(data => {
            console.log(data); // Handle the response data as needed
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
    
    
    
document.getElementById('generateMonthlyReport').addEventListener('click', function () {
    const agencyName = document.getElementById('agency').value;
    const month = document.getElementById('month').value;

    if (!agencyName || !month) {
        alert('Please select both an agency and a month.');
        return;
    }

    fetchMonthlyData(agencyName, month);
});

function fetchMonthlyData(agencyName, month) {
    fetch(`https://gombeirs.com/invoices/report?agency_name=${agencyName}&month=${month}`, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (!data || typeof data !== 'object') {
            console.error('Unexpected data format:', data);
            document.querySelector('#monthly-report-section').innerHTML = '<p>Error: Unexpected data format received.</p>';
            return;
        }

        let overallTotalPaidRate = 0;
        const monthlyDetails = Object.entries(data).map(([revenueItemName, details]) => {
            if (!details || !Array.isArray(details.payments)) {
                console.error('Unexpected data format for', revenueItemName, ':', details);
                return '';
            }

            const totalPaidRate = details.payments
                .filter(invoice => invoice.status === 'paid')
                .reduce((total, invoice) => total + parseFloat(invoice.rate), 0);

            overallTotalPaidRate += totalPaidRate;

            return totalPaidRate > 0 ? `
                <tr>
                    <td>${revenueItemName}</td>
                    <td>N${totalPaidRate.toLocaleString()}</td>
                </tr>
            ` : '';
        }).join('');

        if (!monthlyDetails.trim()) {
            document.querySelector('#monthly-report-section').innerHTML = '<p>No valid data available for the selected month.</p>';
            return;
        }

        const formattedMonthYear = new Date(`${month} 1`).toLocaleString('en-US', { month: 'long', year: 'numeric' });

        const reportTable = `
            <table id="monthlyReportTable">
                <thead>
                    <tr>
                        <th colspan="2" style="text-align: center;">${agencyName.toUpperCase()}:  ${formattedMonthYear} Report</th>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <th>N${overallTotalPaidRate.toLocaleString()}</th>
                    </tr>
                    <tr>
                        <th>Subhead</th>
                        <th>Total Paid Rate</th>
                    </tr>
                </thead>
                <tbody>${monthlyDetails}</tbody>
            </table>
            
             <div style="padding: 20px">
            <button id="downloadButton" class="btn btn-sm btn-light-primary" style="border: 1px solid" onclick="downloadMonth()">
        <i class="ki-duotone ki-cloud-download fs-3">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>Download as PDF
    </button>
    </div>
        `;

        const reportSection = document.querySelector('#monthly-report-section');
        reportSection.innerHTML = reportTable;
        reportSection.style.display = 'block';
    })
    .catch(error => console.error('Error fetching monthly data:', error));
}

document.addEventListener('DOMContentLoaded', (event) => {
    let fixed = document.getElementById('applyFilter');
    fixed.addEventListener('click', function () {
        console.log("removed");
        let form = document.getElementById('monthlyReportForm');
        
            form.remove();
        
    });
});










  document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.agency-link').forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const agencyName = this.dataset.agency;
                const detailsRow = document.querySelector(`#details-${agencyName}`);

                // Hide the outer invoice table
                document.querySelector('#invoice thead').style.display = 'none';
                document.querySelectorAll('#invoice > tbody > tr:not([id^="details-"])').forEach(row => row.style.display = 'none');

                if (detailsRow && detailsRow.style.display === 'none') {
                    fetchSubheads(agencyName, detailsRow);
                } else if (detailsRow) {
                    detailsRow.style.display = 'none';
                }
            });
        });
    });



   function fetchSubheads(agencyName, detailsRow) {
    fetch(`https://gombeirs.com/invoices/report?agency_name=${agencyName}`, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        const subheadDetails = detailsRow.querySelector('.subhead-details');
        subheadDetails.innerHTML = '';
        const paidSubheads = data.filter(invoice => invoice.status === 'paid');

        if (paidSubheads.length > 0) {
            paidSubheads.forEach(invoice => {
                const subheadSlug = encodeURIComponent(invoice.revenue_item_name);
                const row = document.createElement('tr');
                row.innerHTML = `<td><a href="#" class="subhead-link" data-subhead="${subheadSlug}">${invoice.revenue_item_name}</a></td><td>N${invoice.rate}</td>`;
                subheadDetails.appendChild(row);
            });
            detailsRow.style.display = 'table-row';

            // Add event listeners to the subhead links
            document.querySelectorAll('.subhead-link').forEach(function (link) {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const subheadName = decodeURIComponent(this.dataset.subhead);
                    const paymentsRowId = `payments-${subheadName}`;
                    let paymentsRow = document.querySelector(`[id="${paymentsRowId}"]`);

                    if (!paymentsRow) {
                        paymentsRow = document.createElement('tr');
                        paymentsRow.id = paymentsRowId;
                        paymentsRow.innerHTML = `
                            <td colspan="2">
                                <table id="payment">
                                    <thead>
                                        <tr>
                                            <th>Taxpayer Name</th>
                                            <th>Agency Name</th>
                                            <th>Subhead</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Phone Number</th>
                                            <th>Details</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="payment-details">
                                        <!-- Payment details will be appended here -->
                                    </tbody>
                                </table>
                                 <button id="downloadButton" class="btn btn-sm btn-light-primary" style="border: 1px solid" onclick="download()">
        <i class="ki-duotone ki-cloud-download fs-3">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>Download as PDF
    </button>
                            </td>
                        `;
                        this.closest('tr').after(paymentsRow);
                    }

                    if (paymentsRow.style.display === 'none' || !paymentsRow.style.display) {
                        fetchPayments(subheadName, paymentsRow);
                    } else {
                        paymentsRow.style.display = 'none';
                    }
                });
            });
        } else {
            subheadDetails.innerHTML = '<tr><td colspan="2">No data available</td></tr>';
            detailsRow.style.display = 'table-row';
        }
    })
    .catch(error => console.error('Error fetching subheads:', error));
}

   function fetchPayments(subheadName, paymentsRow) {
    fetch(`https://gombeirs.com/invoices/report?subhead_name=${subheadName}`, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        const paymentDetails = paymentsRow.querySelector('.payment-details');
        paymentDetails.innerHTML = '';
        const paidInvoices = data.filter(invoice => invoice.status === 'paid');
        
        if (paidInvoices.length > 0) {
            paidInvoices.forEach(invoice => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${invoice.taxpayer_name}</td>
                    <td>${invoice.agency_name}</td>
                    <td>${invoice.revenue_item_name}</td>
                    <td>N${invoice.rate}</td>
                    <td>${invoice.status}</td>
                    <td>${invoice.phone_number}</td>
                    <td>${invoice.details}</td>
                    <td>${invoice.created_at}</td>
                `;
                paymentDetails.appendChild(row);
            });
            paymentsRow.style.display = 'table-row';
        } else {
            paymentDetails.innerHTML = '<tr><td colspan="5">No data available</td></tr>';
            paymentsRow.style.display = 'table-row';
        }
    })
    .catch(error => console.error('Error fetching payments:', error));
}




// function getCurrentMonth() {
//     const now = new Date();
//     const options = { month: 'long' };
//     return now.toLocaleDateString('en-US', options);
// }


// const currentMonth = getCurrentMonth();
// console.log(currentMonth);



    
    
function downloadMonth() {

    window.jsPDF = window.jspdf.jsPDF;
  // Create a new jsPDF object
  var doc = new jsPDF('p', 'pt', 'a4'); // 'l' for landscape, 'pt' for points, 'a4' for paper size

  // Get the table element by its id
  var table = document.getElementById('monthlyReportTable');
  let monthName = document.getElementById('month').value;

  // Use the autoTable plugin to add the table to the PDF document
  // Your original CSS styles
const tableStyles = {
    width: '100%',
    borderCollapse: 'collapse',
    marginTop: 20,
};

const cellStyles = {
    border: '1px solid #dddddd',
    textAlign: 'left',
    padding: 8,
};

const headerStyles = {
    backgroundColor: '#f2f2f2',
};

const hoverStyles = {
    backgroundColor: '#f5f5f5',
};

// Applying styles to autoTable
doc.autoTable({
    html: table, // HTML element
    margin: { top: 60 }, // Margin from the top
    styles: { fontSize: 10, ...tableStyles }, // Font size for the table and other table styles
    headStyles: headerStyles, // Background color for the table header
    bodyStyles: cellStyles, // Styles for table body cells
    alternateRowStyles: [null, hoverStyles], // Alternate row hover style
});

  // Save the PDF document with a given name
  doc.save(`${monthName}Report.pdf`);
}

function downloadAgency() {

    window.jsPDF = window.jspdf.jsPDF;
  // Create a new jsPDF object
  var doc = new jsPDF('p', 'pt', 'a4'); // 'l' for landscape, 'pt' for points, 'a4' for paper size

  // Get the table element by its id
  var table = document.getElementById('invoice');

  // Use the autoTable plugin to add the table to the PDF document
  // Your original CSS styles
const tableStyles = {
    width: '100%',
    borderCollapse: 'collapse',
    marginTop: 20,
};

const cellStyles = {
    border: '1px solid #dddddd',
    textAlign: 'left',
    padding: 8,
};

const headerStyles = {
    backgroundColor: '#f2f2f2',
};

const hoverStyles = {
    backgroundColor: '#f5f5f5',
};

// Applying styles to autoTable
doc.autoTable({
    html: table, // HTML element
    margin: { top: 60 }, // Margin from the top
    styles: { fontSize: 10, ...tableStyles }, // Font size for the table and other table styles
    headStyles: headerStyles, // Background color for the table header
    bodyStyles: cellStyles, // Styles for table body cells
    alternateRowStyles: [null, hoverStyles], // Alternate row hover style
});

  // Save the PDF document with a given name
  doc.save('AgencyReport.pdf');
}

function downloadSubhead() {

    window.jsPDF = window.jspdf.jsPDF;
  // Create a new jsPDF object
  var doc = new jsPDF('p', 'pt', 'a4'); // 'l' for landscape, 'pt' for points, 'a4' for paper size

  // Get the table element by its id
  var table = document.getElementById('subHeadinvoice');

  // Use the autoTable plugin to add the table to the PDF document
  // Your original CSS styles
const tableStyles = {
    width: '100%',
    borderCollapse: 'collapse',
    marginTop: 20,
};

const cellStyles = {
    border: '1px solid #dddddd',
    textAlign: 'left',
    padding: 8,
};

const headerStyles = {
    backgroundColor: '#f2f2f2',
};

const hoverStyles = {
    backgroundColor: '#f5f5f5',
};

// Applying styles to autoTable
doc.autoTable({
    html: table, // HTML element
    margin: { top: 60 }, // Margin from the top
    styles: { fontSize: 10, ...tableStyles }, // Font size for the table and other table styles
    headStyles: headerStyles, // Background color for the table header
    bodyStyles: cellStyles, // Styles for table body cells
    alternateRowStyles: [null, hoverStyles], // Alternate row hover style
});

  // Save the PDF document with a given name
  doc.save('SubheadReport.pdf');
}
function download() {

    window.jsPDF = window.jspdf.jsPDF;
  // Create a new jsPDF object
  var doc = new jsPDF('p', 'pt', 'a4'); // 'l' for landscape, 'pt' for points, 'a4' for paper size

  // Get the table element by its id
  var table = document.getElementById('payment');

  // Use the autoTable plugin to add the table to the PDF document
  // Your original CSS styles
const tableStyles = {
    width: '100%',
    borderCollapse: 'collapse',
    marginTop: 20,
};

const cellStyles = {
    border: '1px solid #dddddd',
    textAlign: 'left',
    padding: 8,
};

const headerStyles = {
    backgroundColor: '#f2f2f2',
};

const hoverStyles = {
    backgroundColor: '#f5f5f5',
};

// Applying styles to autoTable
doc.autoTable({
    html: table, // HTML element
    margin: { top: 60 }, // Margin from the top
    styles: { fontSize: 10, ...tableStyles }, // Font size for the table and other table styles
    headStyles: headerStyles, // Background color for the table header
    bodyStyles: cellStyles, // Styles for table body cells
    alternateRowStyles: [null, hoverStyles], // Alternate row hover style
});

  // Save the PDF document with a given name
  doc.save('SubheadReport2.pdf');
}











//     document.addEventListener('DOMContentLoaded', function () {
//         document.querySelectorAll('.agency-link').forEach(function (link) {
//             link.addEventListener('click', function (e) {
//                 e.preventDefault();
//                 const agencyName = this.dataset.agency;
//                 const detailsRow = document.querySelector(`#details-${agencyName}`);

//                 if (detailsRow && detailsRow.style.display === 'none') {
//                     fetchSubheads(agencyName, detailsRow);
//                 } else if (detailsRow) {
//                     detailsRow.style.display = 'none';
//                 }
//             });
//         });
//     });

//     function fetchSubheads(agencyName, detailsRow) {
//         fetch(`https://gombeirs.com/invoices/report?agency_name=${agencyName}`, {
//             headers: {
//                 'X-Requested-With': 'XMLHttpRequest'
//             }
//         })
//         .then(response => response.json())
//         .then(data => {
//             const subheadDetails = detailsRow.querySelector('.subhead-details');
//             subheadDetails.innerHTML = '';
//             if (data.length > 0) {
//                 data.forEach(invoice => {
//                     const subheadSlug = encodeURIComponent(invoice.revenue_item_name);
//                     const row = document.createElement('tr');
//                     row.innerHTML = `<td><a href="#" class="subhead-link" data-subhead="${subheadSlug}">${invoice.revenue_item_name}</a></td><td>N${invoice.rate}</td>`;
//                     subheadDetails.appendChild(row);
//                 });
//                 detailsRow.style.display = 'table-row';

//                 // Add event listeners to the subhead links
//                 document.querySelectorAll('.subhead-link').forEach(function (link) {
//                     link.addEventListener('click', function (e) {
//                         e.preventDefault();
//                         const subheadName = decodeURIComponent(this.dataset.subhead);
//                         const paymentsRowId = `payments-${subheadName}`;
// let paymentsRow = document.querySelector(`[id="${paymentsRowId}"]`);


//                         if (!paymentsRow) {
//                             paymentsRow = document.createElement('tr');
//                             paymentsRow.id = paymentsRowId;
//                             paymentsRow.innerHTML = `
//                                 <td colspan="2">
//                                     <table>
//                                         <thead>
//                                             <tr>
//                                                 <th>Taxpayer Name</th>
//                                                 <th>Agency Name</th>
//                                                 <th>Amount</th>
//                                                 <th>Status</th>
//                                                 <th>Date</th>
//                                             </tr>
//                                         </thead>
//                                         <tbody class="payment-details">
//                                             <!-- Payment details will be appended here -->
//                                         </tbody>
//                                     </table>
//                                 </td>
//                             `;
//                             this.closest('tr').after(paymentsRow);
//                         }

//                         if (paymentsRow.style.display === 'none' || !paymentsRow.style.display) {
//                             fetchPayments(subheadName, paymentsRow);
//                         } else {
//                             paymentsRow.style.display = 'none';
//                         }
//                     });
//                 });
//             } else {
//                 subheadDetails.innerHTML = '<tr><td colspan="2">No data available</td></tr>';
//                 detailsRow.style.display = 'table-row';
//             }
//         })
//         .catch(error => console.error('Error fetching subheads:', error));
//     }

//     function fetchPayments(subheadName, paymentsRow) {
//         fetch(`https://gombeirs.com/invoices/report?subhead_name=${subheadName}`, {
//             headers: {
//                 'X-Requested-With': 'XMLHttpRequest'
//             }
//         })
//         .then(response => response.json())
//         .then(data => {
//             const paymentDetails = paymentsRow.querySelector('.payment-details');
//             paymentDetails.innerHTML = '';
//             if (data.length > 0) {
//                 data.forEach(invoice => {
//                     const row = document.createElement('tr');
//                     row.innerHTML = `
//                         <td>${invoice.taxpayer_name}</td>
//                         <td>${invoice.agency_name}</td>
//                         <td>N${invoice.rate}</td>
//                         <td>${invoice.status}</td>
//                         <td>${invoice.created_at}</td>
//                     `;
//                     paymentDetails.appendChild(row);
//                 });
//                 paymentsRow.style.display = 'table-row';
//             } else {
//                 paymentDetails.innerHTML = '<tr><td colspan="5">No data available</td></tr>';
//                 paymentsRow.style.display = 'table-row';
//             }
//         })
//         .catch(error => console.error('Error fetching payments:', error));
//     }





function downloadPDF() {
            window.jsPDF = window.jspdf.jsPDF;
            // Create a new jsPDF object
            var doc = new jsPDF('p', 'pt', 'a4'); // 'l' for landscape, 'pt' for points, 'a4' for paper size

            // Get the .body div element
            var bodyDiv = document.querySelector('.body');

            // Get the HTML content of the .body div
            var bodyContent = bodyDiv.innerHTML;

            // Add the content to the PDF document
            doc.html(bodyContent, {
                callback: function (doc) {
                    // Save the PDF document with a given name
                    doc.save('report.pdf');
                },
                margin: 10 // Set a uniform margin of 10 points
            });
        }





//   function downloadPDF() {

//     window.jsPDF = window.jspdf.jsPDF;
//   // Create a new jsPDF object
//   var doc = new jsPDF('p', 'pt', 'a4'); // 'l' for landscape, 'pt' for points, 'a4' for paper size

//   // Get the table element by its id
//   var table = document.getElementById('invoice');

//   // Use the autoTable plugin to add the table to the PDF document
//   // Your original CSS styles
// const tableStyles = {
//     width: '100%',
//     borderCollapse: 'collapse',
//     marginTop: 20,
// };

// const cellStyles = {
//     border: '1px solid #dddddd',
//     textAlign: 'left',
//     padding: 8,
// };

// const headerStyles = {
//     backgroundColor: '#f2f2f2',
// };

// const hoverStyles = {
//     backgroundColor: '#f5f5f5',
// };

// // Applying styles to autoTable
// doc.autoTable({
//     html: table, // HTML element
//     margin: { top: 60 }, // Margin from the top
//     styles: { fontSize: 10, ...tableStyles }, // Font size for the table and other table styles
//     headStyles: headerStyles, // Background color for the table header
//     bodyStyles: cellStyles, // Styles for table body cells
//     alternateRowStyles: [null, hoverStyles], // Alternate row hover style
// });

//   // Save the PDF document with a given name
//   doc.save('report.pdf');
// }

function downloadSUBHEAD() {

    window.jsPDF = window.jspdf.jsPDF;
  // Create a new jsPDF object
  var doc = new jsPDF('p', 'pt', 'a4'); // 'l' for landscape, 'pt' for points, 'a4' for paper size

  // Get the table element by its id
  var table = document.getElementById('invoice');

  // Use the autoTable plugin to add the table to the PDF document
  // Your original CSS styles
const tableStyles = {
    width: '100%',
    borderCollapse: 'collapse',
    marginTop: 20,
};

const cellStyles = {
    border: '1px solid #dddddd',
    textAlign: 'left',
    padding: 8,
};

const headerStyles = {
    backgroundColor: '#f2f2f2',
};

const hoverStyles = {
    backgroundColor: '#f5f5f5',
};

// Applying styles to autoTable
doc.autoTable({
    html: table, // HTML element
    margin: { top: 60 }, // Margin from the top
    styles: { fontSize: 10, ...tableStyles }, // Font size for the table and other table styles
    headStyles: headerStyles, // Background color for the table header
    bodyStyles: cellStyles, // Styles for table body cells
    alternateRowStyles: [null, hoverStyles], // Alternate row hover style
});

  // Save the PDF document with a given name
  doc.save('SubheadReport.pdf');
}

function downloadAGENCY() {

    window.jsPDF = window.jspdf.jsPDF;
  // Create a new jsPDF object
  var doc = new jsPDF('p', 'pt', 'a4'); // 'l' for landscape, 'pt' for points, 'a4' for paper size

  // Get the table element by its id
  var table = document.getElementById('agency');

  // Use the autoTable plugin to add the table to the PDF document
  // Your original CSS styles
const tableStyles = {
    width: '100%',
    borderCollapse: 'collapse',
    marginTop: 20,
};

const cellStyles = {
    border: '1px solid #dddddd',
    textAlign: 'left',
    padding: 8,
};

const headerStyles = {
    backgroundColor: '#f2f2f2',
};

const hoverStyles = {
    backgroundColor: '#f5f5f5',
};

// Applying styles to autoTable
doc.autoTable({
    html: table, // HTML element
    margin: { top: 60 }, // Margin from the top
    styles: { fontSize: 10, ...tableStyles }, // Font size for the table and other table styles
    headStyles: headerStyles, // Background color for the table header
    bodyStyles: cellStyles, // Styles for table body cells
    alternateRowStyles: [null, hoverStyles], // Alternate row hover style
});

  // Save the PDF document with a given name
  doc.save('Agencyreport.pdf');
}


</script>
                            </div>
                            <!--end::Content container-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->
                    <!--begin::Footer-->
<div id="kt_app_footer" class="app-footer">
	<!--begin::Footer container-->
	<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
		<!--begin::Copyright-->
		<div class="text-dark order-2 order-md-1">
			<span class="text-muted fw-semibold me-1">2024&copy; Gombe State Government</span>
		</div>
		<!--end::Copyright-->
		
		<!--begin::Menu-->
		<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
		</ul>
		<!--end::Menu-->
	</div>
	<!--end::Footer container-->
</div>
<!--end::Footer-->
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->

    <!--begin::Drawers-->
<!--begin::Activities drawer-->
<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
	<div class="card shadow-none border-0 rounded-0">
		<!--begin::Header-->
		<div class="card-header" id="kt_activities_header">
			<h3 class="card-title fw-bold text-dark">Activity Logs</h3>
			<div class="card-toolbar">
				<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close"><span class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></span></button>
			</div>
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body position-relative" id="kt_activities_body">
			<!--begin::Content-->
			<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
				<!--begin::Timeline items-->
				<div class="timeline">
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line w-40px"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon symbol symbol-circle symbol-40px me-4">
							<div class="symbol-label bg-light"><span class="ki-duotone ki-message-text-2 fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></div>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
										<img src="https://gombeirs.com/assets/media/avatars/300-14.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
							<!--begin::Timeline details-->
							<div class="overflow-auto pb-5">
								<!--begin::Record-->
								<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
									<!--begin::Title-->
									<a href="#" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
									<!--end::Title-->
									<!--begin::Label-->
									<div class="min-w-175px pe-2">
										<span class="badge badge-light text-muted">Application Design</span>
									</div>
									<!--end::Label-->
									<!--begin::Users-->
									<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px">
											<img src="https://gombeirs.com/assets/media/avatars/300-2.jpg" alt="img" />
										</div>
										<!--end::User-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px">
											<img src="https://gombeirs.com/assets/media/avatars/300-14.jpg" alt="img" />
										</div>
										<!--end::User-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px">
											<div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
										</div>
										<!--end::User-->
									</div>
									<!--end::Users-->
									<!--begin::Progress-->
									<div class="min-w-125px pe-2">
										<span class="badge badge-light-primary">In Progress</span>
									</div>
									<!--end::Progress-->
									<!--begin::Action-->
									<a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
									<!--end::Action-->
								</div>
								<!--end::Record-->
								<!--begin::Record-->
								<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
									<!--begin::Title-->
									<a href="#" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
									<!--end::Title-->
									<!--begin::Label-->
									<div class="min-w-175px">
										<span class="badge badge-light text-muted">CRM System Development</span>
									</div>
									<!--end::Label-->
									<!--begin::Users-->
									<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px">
											<img src="https://gombeirs.com/assets/media/avatars/300-20.jpg" alt="img" />
										</div>
										<!--end::User-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px">
											<div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
										</div>
										<!--end::User-->
									</div>
									<!--end::Users-->
									<!--begin::Progress-->
									<div class="min-w-125px">
										<span class="badge badge-light-success">Completed</span>
									</div>
									<!--end::Progress-->
									<!--begin::Action-->
									<a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
									<!--end::Action-->
								</div>
								<!--end::Record-->
							</div>
							<!--end::Timeline details-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line w-40px"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon symbol symbol-circle symbol-40px">
							<div class="symbol-label bg-light"><span class="ki-duotone ki-flag fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></span></div>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n2">
							<!--begin::Timeline heading-->
							<div class="overflow-auto pe-3">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
										<img src="https://gombeirs.com/assets/media/avatars/300-1.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line w-40px"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon symbol symbol-circle symbol-40px">
							<div class="symbol-label bg-light"><span class="ki-duotone ki-disconnect fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span></div>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="mb-5 pe-3">
								<!--begin::Title-->
								<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
										<img src="https://gombeirs.com/assets/media/avatars/300-23.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
							<!--begin::Timeline details-->
							<div class="overflow-auto pb-5">
								<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
									<!--begin::Item-->
									<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
										<!--begin::Icon-->
										<img alt="" class="w-30px me-3" src="https://gombeirs.com/assets/media/svg/files/pdf.svg" />
										<!--end::Icon-->
										<!--begin::Info-->
										<div class="ms-1 fw-semibold">
											<!--begin::Desc-->
											<a href="#" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
											<!--end::Desc-->
											<!--begin::Number-->
											<div class="text-gray-400">1.9mb</div>
											<!--end::Number-->
										</div>
										<!--begin::Info-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
										<!--begin::Icon-->
										<img alt="?page=apps/projects/project" class="w-30px me-3" src="https://gombeirs.com/assets/media/svg/files/doc.svg" />
										<!--end::Icon-->
										<!--begin::Info-->
										<div class="ms-1 fw-semibold">
											<!--begin::Desc-->
											<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
											<!--end::Desc-->
											<!--begin::Number-->
											<div class="text-gray-400">18kb</div>
											<!--end::Number-->
										</div>
										<!--end::Info-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-aligns-center">
										<!--begin::Icon-->
										<img alt="?page=apps/projects/project" class="w-30px me-3" src="https://gombeirs.com/assets/media/svg/files/css.svg" />
										<!--end::Icon-->
										<!--begin::Info-->
										<div class="ms-1 fw-semibold">
											<!--begin::Desc-->
											<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
											<!--end::Desc-->
											<!--begin::Number-->
											<div class="text-gray-400">20mb</div>
											<!--end::Number-->
										</div>
										<!--end::Icon-->
									</div>
									<!--end::Item-->
								</div>
							</div>
							<!--end::Timeline details-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line w-40px"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon symbol symbol-circle symbol-40px">
							<div class="symbol-label bg-light"><span class="ki-duotone ki-abstract-26 fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></span></div>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">Task
								<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
								<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
										<img src="https://gombeirs.com/assets/media/avatars/300-14.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line w-40px"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon symbol symbol-circle symbol-40px">
							<div class="symbol-label bg-light"><span class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></span></div>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
										<img src="https://gombeirs.com/assets/media/avatars/300-2.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
							<!--begin::Timeline details-->
							<div class="overflow-auto pb-5">
								<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
									<!--begin::Item-->
									<div class="overlay me-10">
										<!--begin::Image-->
										<div class="overlay-wrapper">
											<img alt="img" class="rounded w-150px" src="https://gombeirs.com/assets/media/stock/600x400/img-29.jpg" />
										</div>
										<!--end::Image-->
										<!--begin::Link-->
										<div class="overlay-layer bg-dark bg-opacity-10 rounded">
											<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="overlay me-10">
										<!--begin::Image-->
										<div class="overlay-wrapper">
											<img alt="img" class="rounded w-150px" src="https://gombeirs.com/assets/media/stock/600x400/img-31.jpg" />
										</div>
										<!--end::Image-->
										<!--begin::Link-->
										<div class="overlay-layer bg-dark bg-opacity-10 rounded">
											<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="overlay">
										<!--begin::Image-->
										<div class="overlay-wrapper">
											<img alt="img" class="rounded w-150px" src="https://gombeirs.com/assets/media/stock/600x400/img-40.jpg" />
										</div>
										<!--end::Image-->
										<!--begin::Link-->
										<div class="overlay-layer bg-dark bg-opacity-10 rounded">
											<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Item-->
								</div>
							</div>
							<!--end::Timeline details-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line w-40px"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon symbol symbol-circle symbol-40px">
							<div class="symbol-label bg-light"><span class="ki-duotone ki-sms fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></span></div>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">New case
								<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="overflow-auto pb-5">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
										<!--end::User-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line w-40px"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon symbol symbol-circle symbol-40px">
							<div class="symbol-label bg-light"><span class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></span></div>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
										<img src="https://gombeirs.com/assets/media/avatars/300-4.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
							<!--begin::Timeline details-->
							<div class="overflow-auto pb-5">
								<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
<!--begin::Icon-->
<span class="ki-duotone ki-devices-2 fs-2tx text-primary me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span> 
<!--end::Icon-->
<!--begin::Wrapper-->
<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
	<!--begin::Content-->
	<div class="mb-3 mb-md-0 fw-semibold">
		<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
		<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
	</div>
	<!--end::Content-->
	<!--begin::Action-->
	<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
	<!--end::Action-->
</div>
<!--end::Wrapper--></div>
<!--end::Notice-->
							</div>
							<!--end::Timeline details-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line w-40px"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon symbol symbol-circle symbol-40px">
							<div class="symbol-label bg-light"><span class="ki-duotone ki-basket fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span></div>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">New order
								<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
				</div>
				<!--end::Timeline items-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Body-->
		<!--begin::Footer-->
		<div class="card-footer py-5 text-center" id="kt_activities_footer">
			<a href="#" class="btn btn-bg-body text-primary">View All Activities <span class="ki-duotone ki-arrow-right fs-3 text-primary"><span class="path1"></span><span class="path2"></span></span></a>
		</div>
		<!--end::Footer-->
	</div>
</div>
<!--end::Activities drawer-->
<!--begin::Chat drawer-->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
	<!--begin::Messenger-->
	<div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
		<!--begin::Card header-->
		<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
			<!--begin::Title-->
			<div class="card-title">
				<!--begin::User-->
				<div class="d-flex justify-content-center flex-column me-3">
					<a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Gombe Customer Support</a>
					<!--begin::Info-->
					<div class="mb-0 lh-1">
						<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
						<span class="fs-7 fw-semibold text-muted">Active</span>
					</div>
					<!--end::Info-->
				</div>
				<!--end::User-->
			</div>
			<!--end::Title-->
			<!--begin::Card toolbar-->
			<div class="card-toolbar">
				<!--begin::Menu-->
				<div class="me-0">
					<button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"><span class="ki-duotone ki-dots-square fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span></button>
					<!--begin::Menu 3-->
					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
						<!--begin::Heading-->
						<div class="menu-item px-3">
							<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
						</div>
						<!--end::Heading-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts 
							<span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation"><span class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></span></a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
							<a href="#" class="menu-link px-3">
								<span class="menu-title">Groups</span>
								<span class="menu-arrow"></span>
							</a>
							<!--begin::Menu sub-->
							<div class="menu-sub menu-sub-dropdown w-175px py-4">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="                 ">Create Group</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="                 ">Invite Members</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="                 ">Settings</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu sub-->
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3 my-1">
							<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="                 ">Settings</a>
						</div>
						<!--end::Menu item-->
					</div>
					<!--end::Menu 3-->
				</div>
				<!--end::Menu-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close"><span class="ki-duotone ki-cross-square fs-2"><span class="path1"></span><span class="path2"></span></span></div>
				<!--end::Close-->
			</div>
			<!--end::Card toolbar-->
		</div>
		<!--end::Card header-->
		<!--begin::Card body-->
		<div class="card-body" id="kt_drawer_chat_messenger_body">
			<!--begin::Messages-->
			<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
				<!--begin::Message(in)-->
				<div class="d-flex justify-content-start mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-25.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">ICT Dept  </a>
								<span class="text-muted fs-7 mb-1">2 mins</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend your friends and family to pay their TAX  to Gombe State?</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(in)-->
				<!--begin::Message(out)-->
				<div class="d-flex justify-content-end mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-end">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Details-->
							<div class="me-3">
								<span class="text-muted fs-7 mb-1">5 mins</span>
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
							</div>
							<!--end::Details-->
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-1.jpg" />
							</div>
							<!--end::Avatar-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">I understand how government use our money to work for us in the State, I plan to raise awareness among my family and friends.</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(out)-->
				<!--begin::Message(in)-->
				<div class="d-flex justify-content-start mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-25.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">ICT Dept  </a>
								<span class="text-muted fs-7 mb-1">1 Hour</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Ok, that's a nice one!</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(in)-->
				<!--begin::Message(out)-->
				<div class="d-flex justify-content-end mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-end">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Details-->
							<div class="me-3">
								<span class="text-muted fs-7 mb-1">2 Hours</span>
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
							</div>
							<!--end::Details-->
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-1.jpg" />
							</div>
							<!--end::Avatar-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive many recommendation from me, even indigene of Gombe in other states should pay their tax to Gombe State!</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(out)-->
				<!--begin::Message(in)-->
				<div class="d-flex justify-content-start mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-25.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">ICT Dept  </a>
								<span class="text-muted fs-7 mb-1">3 Hours</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Yeah, We're also carring a state wide awareness 
						</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(in)-->
				<!--begin::Message(out)-->
				<div class="d-flex justify-content-end mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-end">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Details-->
							<div class="me-3">
								<span class="text-muted fs-7 mb-1">4 Hours</span>
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
							</div>
							<!--end::Details-->
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-1.jpg" />
							</div>
							<!--end::Avatar-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Most people dont know the value of paying Tax!, thanks for the Support, have a great day</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(out)-->
				<!--begin::Message(in)-->
				<div class="d-flex justify-content-start mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-25.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">ICT Dept  </a>
								<span class="text-muted fs-7 mb-1">5 Hours</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">you're welcome</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(in)-->
				<!--begin::Message(template for out)-->
				<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-end">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Details-->
							<div class="me-3">
								<span class="text-muted fs-7 mb-1">Just now</span>
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
							</div>
							<!--end::Details-->
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-1.jpg" />
							</div>
							<!--end::Avatar-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(template for out)-->
				<!--begin::Message(template for in)-->
				<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-25.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">ICT Dept  </a>
								<span class="text-muted fs-7 mb-1">Just now</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(template for in)-->
			</div>
			<!--end::Messages-->
		</div>
		<!--end::Card body-->
		<!--begin::Card footer-->
		<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
			<!--begin::Input-->
			<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
			<!--end::Input-->
			<!--begin:Toolbar-->
			<div class="d-flex flex-stack">
				<!--begin::Actions-->
				<div class="d-flex align-items-center me-2">
					<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="                 "><span class="ki-duotone ki-paper-clip fs-3"></span></button>
					<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="                 "><span class="ki-duotone ki-cloud-add fs-3"><span class="path1"></span><span class="path2"></span></span></button>
				</div>
				<!--end::Actions-->
				<!--begin::Send-->
				<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
				<!--end::Send-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Card footer-->
	</div>
	<!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--begin::Chat drawer-->
<div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">
	<!--begin::Messenger-->
	<div class="card card-flush w-100 rounded-0">
		<!--begin::Card header-->
		<div class="card-header">
			<!--begin::Title-->
			<h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
			<!--end::Title-->
			<!--begin::Card toolbar-->
			<div class="card-toolbar">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close"><span class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></span></div>
				<!--end::Close-->
			</div>
			<!--end::Card toolbar-->
		</div>
		<!--end::Card header-->
		<!--begin::Card body-->
		<div class="card-body hover-scroll-overlay-y h-400px pt-5">
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
						<span class="text-gray-400 fw-semibold d-block">The best kitchen gadget in 2022</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 350</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">5</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"><span class="ki-duotone ki-minus fs-4"></span></a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px"><span class="ki-duotone ki-plus fs-4"></span></a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="https://gombeirs.com/assets/media/stock/600x400/img-1.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
						<span class="text-gray-400 fw-semibold d-block">Smart tool for cooking</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 650</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">4</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"><span class="ki-duotone ki-minus fs-4"></span></a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px"><span class="ki-duotone ki-plus fs-4"></span></a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="https://gombeirs.com/assets/media/stock/600x400/img-3.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
						<span class="text-gray-400 fw-semibold d-block">Professional camera for edge</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 150</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">3</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"><span class="ki-duotone ki-minus fs-4"></span></a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px"><span class="ki-duotone ki-plus fs-4"></span></a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="https://gombeirs.com/assets/media/stock/600x400/img-8.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
						<span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 1450</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"><span class="ki-duotone ki-minus fs-4"></span></a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px"><span class="ki-duotone ki-plus fs-4"></span></a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="https://gombeirs.com/assets/media/stock/600x400/img-26.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
						<span class="text-gray-400 fw-semibold d-block">Perfect animation tool</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 650</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"><span class="ki-duotone ki-minus fs-4"></span></a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px"><span class="ki-duotone ki-plus fs-4"></span></a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="https://gombeirs.com/assets/media/stock/600x400/img-21.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
						<span class="text-gray-400 fw-semibold d-block">Profile info,Timeline etc</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 720</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">6</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"><span class="ki-duotone ki-minus fs-4"></span></a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px"><span class="ki-duotone ki-plus fs-4"></span></a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="https://gombeirs.com/assets/media/stock/600x400/img-34.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
						<span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 430</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">8</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2"><span class="ki-duotone ki-minus fs-4"></span></a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px"><span class="ki-duotone ki-plus fs-4"></span></a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="https://gombeirs.com/assets/media/stock/600x400/img-27.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
		</div>
		<!--end::Card body-->
		<!--begin::Card footer-->
		<div class="card-footer">
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<span class="fw-bold text-gray-600">Total</span>
				<span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
			</div>
			<!--end::Item-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<span class="fw-bold text-gray-600">Sub total</span>
				<span class="text-primary fw-bolder fs-5">$ 246.35</span>
			</div>
			<!--end::Item-->
			<!--end::Action-->
			<div class="d-flex justify-content-end mt-9">
				<a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
			</div>
			<!--end::Action-->
		</div>
		<!--end::Card footer-->
	</div>
	<!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--end::Drawers-->
    <!--begin::Modals-->
<!--begin::Modal - Upgrade plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-xl">
		<!--begin::Modal content-->
		<div class="modal-content rounded">
			<!--begin::Modal header-->
			<div class="modal-header justify-content-end border-0 pb-0">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal"><span class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></span></div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
				<!--begin::Heading-->
				<div class="mb-13 text-center">
					<h1 class="mb-3">Upgrade a Plan</h1>
					<div class="text-muted fw-semibold fs-5">If you need more info, please check 
					<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.</div>
				</div>
				<!--end::Heading-->
				<!--begin::Plans-->
				<div class="d-flex flex-column">
					<!--begin::Nav group-->
					<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
						<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
						<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
					</div>
					<!--end::Nav group-->
					<!--begin::Row-->
					<div class="row mt-10">
						<!--begin::Col-->
						<div class="col-lg-6 mb-10 mb-lg-0">
							<!--begin::Tabs-->
							<div class="nav flex-column">
								<!--begin::Tab link-->
								<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
											<input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup</div>
											<div class="fw-semibold opacity-75">Best for startups</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<span class="mb-2">$</span>
										<span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
										<span class="fs-7 opacity-50">/ 
										<span data-kt-element="period">Mon</span></span>
									</div>
									<!--end::Price-->
								</label>
								<!--end::Tab link-->
								<!--begin::Tab link-->
								<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
											<input class="form-check-input" type="radio" name="plan" value="advanced" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced</div>
											<div class="fw-semibold opacity-75">Best for 100+ team size</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<span class="mb-2">$</span>
										<span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
										<span class="fs-7 opacity-50">/ 
										<span data-kt-element="period">Mon</span></span>
									</div>
									<!--end::Price-->
								</label>
								<!--end::Tab link-->
								<!--begin::Tab link-->
								<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
											<input class="form-check-input" type="radio" name="plan" value="enterprise" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise 
											<span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span></div>
											<div class="fw-semibold opacity-75">Best value for 1000+ team</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<span class="mb-2">$</span>
										<span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
										<span class="fs-7 opacity-50">/ 
										<span data-kt-element="period">Mon</span></span>
									</div>
									<!--end::Price-->
								</label>
								<!--end::Tab link-->
								<!--begin::Tab link-->
								<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
											<input class="form-check-input" type="radio" name="plan" value="custom" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom</div>
											<div class="fw-semibold opacity-75">Requet a custom license</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<a href="#" class="btn btn-sm btn-success">Contact Us</a>
									</div>
									<!--end::Price-->
								</label>
								<!--end::Tab link-->
							</div>
							<!--end::Tabs-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-lg-6">
							<!--begin::Tab content-->
							<div class="tab-content rounded h-100 bg-light p-10">
								<!--begin::Tab Pane-->
								<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
										<div class="text-muted fw-semibold">Optimal for 10+ team size and new startup</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-muted flex-grow-1">Finance Module</span><span class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting Module</span><span class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span><span class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
										<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span><span class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
								<!--begin::Tab Pane-->
								<div class="tab-pane fade" id="kt_upgrade_plan_advanced">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
										<div class="text-muted fw-semibold">Optimal for 100+ team size and grown company</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span><span class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
										<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span><span class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
								<!--begin::Tab Pane-->
								<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
										<div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
								<!--begin::Tab Pane-->
								<div class="tab-pane fade" id="kt_upgrade_plan_custom">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
										<div class="text-muted fw-semibold">Optimal for corporations</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Users</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project Integrations</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
										<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span><span class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></span></div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
							</div>
							<!--end::Tab content-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Plans-->
				<!--begin::Actions-->
				<div class="d-flex flex-center flex-row-fluid pt-12">
					<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
						<!--begin::Indicator label-->
<span class="indicator-label">
    Upgrade Plan
</span>
<!--end::Indicator label-->
<!--begin::Indicator progress-->
<span class="indicator-progress">Please wait...
<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
<!--end::Indicator progress-->
					</button>
				</div>
				<!--end::Actions-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Upgrade plan-->
<!--begin::Modal - Create App-->
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-900px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Modal title-->
				<h2>Create App</h2>
				<!--end::Modal title-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal"><span class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></span></div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body py-lg-10 px-lg-10">
				<!--begin::Stepper-->
				<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
					<!--begin::Aside-->
					<div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
						<!--begin::Nav-->
						<div class="stepper-nav ps-lg-10">
							<!--begin::Step 1-->
							<div class="stepper-item current" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">1</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Details</h3>
										<div class="stepper-desc">Name your App</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Line-->
								<div class="stepper-line h-40px"></div>
								<!--end::Line-->
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">2</span>
									</div>
									<!--begin::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Frameworks</h3>
										<div class="stepper-desc">Define your app framework</div>
									</div>
									<!--begin::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Line-->
								<div class="stepper-line h-40px"></div>
								<!--end::Line-->
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">3</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Database</h3>
										<div class="stepper-desc">Select the app database type</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Line-->
								<div class="stepper-line h-40px"></div>
								<!--end::Line-->
							</div>
							<!--end::Step 3-->
							<!--begin::Step 4-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">4</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Billing</h3>
										<div class="stepper-desc">Provide payment details</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Line-->
								<div class="stepper-line h-40px"></div>
								<!--end::Line-->
							</div>
							<!--end::Step 4-->
							<!--begin::Step 5-->
							<div class="stepper-item mark-completed" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">5</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Completed</h3>
										<div class="stepper-desc">Review and Submit</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 5-->
						</div>
						<!--end::Nav-->
					</div>
					<!--begin::Aside-->
					<!--begin::Content-->
					<div class="flex-row-fluid py-lg-5 px-lg-15">
						<!--begin::Form-->
						<form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
							<!--begin::Step 1-->
<div class="current" data-kt-stepper-element="content">
	<div class="w-100">
		<!--begin::Input group-->
		<div class="fv-row mb-10">
			<!--begin::Label-->
			<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
				<span class="required">App Name</span>
				<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
			</label>
			<!--end::Label-->
			<!--begin::Input-->
			<input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" />
			<!--end::Input-->
		</div>
		<!--end::Input group-->
		<!--begin::Input group-->
		<div class="fv-row">
			<!--begin::Label-->
			<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
				<span class="required">Category</span>
				<span class="ms-1" data-bs-toggle="tooltip" title="Select your app category"></span>
			</label>
			<!--end::Label-->
			<!--begin:Options-->
			<div class="fv-row">
				<!--begin:Option-->
				<label class="d-flex flex-stack mb-5 cursor-pointer">
					<!--begin:Label-->
					<span class="d-flex align-items-center me-2">
						<!--begin:Icon-->
						<span class="symbol symbol-50px me-6">
							<span class="symbol-label bg-light-primary"><span class="ki-duotone ki-compass fs-1 text-primary"><span class="path1"></span><span class="path2"></span></span></span>
						</span>
						<!--end:Icon-->
						<!--begin:Info-->
						<span class="d-flex flex-column">
							<span class="fw-bold fs-6">Quick Online Courses</span>
							<span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span>
						</span>
						<!--end:Info-->
					</span>
					<!--end:Label-->
					<!--begin:Input-->
					<span class="form-check form-check-custom form-check-solid">
						<input class="form-check-input" type="radio" name="category" value="1" />
					</span>
					<!--end:Input-->
				</label>
				<!--end::Option-->
				<!--begin:Option-->
				<label class="d-flex flex-stack mb-5 cursor-pointer">
					<!--begin:Label-->
					<span class="d-flex align-items-center me-2">
						<!--begin:Icon-->
						<span class="symbol symbol-50px me-6">
							<span class="symbol-label bg-light-danger"><span class="ki-duotone ki-element-11 fs-1 text-danger"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span></span>
						</span>
						<!--end:Icon-->
						<!--begin:Info-->
						<span class="d-flex flex-column">
							<span class="fw-bold fs-6">Face to Face Discussions</span>
							<span class="fs-7 text-muted">Creating a clear text structure is just one aspect</span>
						</span>
						<!--end:Info-->
					</span>
					<!--end:Label-->
					<!--begin:Input-->
					<span class="form-check form-check-custom form-check-solid">
						<input class="form-check-input" type="radio" name="category" value="2" />
					</span>
					<!--end:Input-->
				</label>
				<!--end::Option-->
				<!--begin:Option-->
				<label class="d-flex flex-stack cursor-pointer">
					<!--begin:Label-->
					<span class="d-flex align-items-center me-2">
						<!--begin:Icon-->
						<span class="symbol symbol-50px me-6">
							<span class="symbol-label bg-light-success"><span class="ki-duotone ki-timer fs-1 text-success"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></span>
						</span>
						<!--end:Icon-->
						<!--begin:Info-->
						<span class="d-flex flex-column">
							<span class="fw-bold fs-6">Full Intro Training</span>
							<span class="fs-7 text-muted">Creating a clear text structure copywriting</span>
						</span>
						<!--end:Info-->
					</span>
					<!--end:Label-->
					<!--begin:Input-->
					<span class="form-check form-check-custom form-check-solid">
						<input class="form-check-input" type="radio" name="category" value="3" />
					</span>
					<!--end:Input-->
				</label>
				<!--end::Option-->
			</div>
			<!--end:Options-->
		</div>
		<!--end::Input group-->
	</div>
</div>
<!--end::Step 1-->
							<!--begin::Step 2-->
<div data-kt-stepper-element="content">
	<div class="w-100">
		<!--begin::Input group-->
		<div class="fv-row">
			<!--begin::Label-->
			<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
				<span class="required">Select Framework</span>
				<span class="ms-1" data-bs-toggle="tooltip" title="Specify your apps framework"></span>
			</label>
			<!--end::Label-->
			<!--begin:Option-->
			<label class="d-flex flex-stack cursor-pointer mb-5">
				<!--begin:Label-->
				<span class="d-flex align-items-center me-2">
					<!--begin:Icon-->
					<span class="symbol symbol-50px me-6">
						<span class="symbol-label bg-light-warning">
							<i class="fab fa-html5 text-warning fs-2x"></i>
						</span>
					</span>
					<!--end:Icon-->
					<!--begin:Info-->
					<span class="d-flex flex-column">
						<span class="fw-bold fs-6">HTML5</span>
						<span class="fs-7 text-muted">Base Web Projec</span>
					</span>
					<!--end:Info-->
				</span>
				<!--end:Label-->
				<!--begin:Input-->
				<span class="form-check form-check-custom form-check-solid">
					<input class="form-check-input" type="radio" checked="checked" name="framework" value="1" />
				</span>
				<!--end:Input-->
			</label>
			<!--end::Option-->
			<!--begin:Option-->
			<label class="d-flex flex-stack cursor-pointer mb-5">
				<!--begin:Label-->
				<span class="d-flex align-items-center me-2">
					<!--begin:Icon-->
					<span class="symbol symbol-50px me-6">
						<span class="symbol-label bg-light-success">
							<i class="fab fa-react text-success fs-2x"></i>
						</span>
					</span>
					<!--end:Icon-->
					<!--begin:Info-->
					<span class="d-flex flex-column">
						<span class="fw-bold fs-6">ReactJS</span>
						<span class="fs-7 text-muted">Robust and flexible app framework</span>
					</span>
					<!--end:Info-->
				</span>
				<!--end:Label-->
				<!--begin:Input-->
				<span class="form-check form-check-custom form-check-solid">
					<input class="form-check-input" type="radio" name="framework" value="2" />
				</span>
				<!--end:Input-->
			</label>
			<!--end::Option-->
			<!--begin:Option-->
			<label class="d-flex flex-stack cursor-pointer mb-5">
				<!--begin:Label-->
				<span class="d-flex align-items-center me-2">
					<!--begin:Icon-->
					<span class="symbol symbol-50px me-6">
						<span class="symbol-label bg-light-danger">
							<i class="fab fa-angular text-danger fs-2x"></i>
						</span>
					</span>
					<!--end:Icon-->
					<!--begin:Info-->
					<span class="d-flex flex-column">
						<span class="fw-bold fs-6">Angular</span>
						<span class="fs-7 text-muted">Powerful data mangement</span>
					</span>
					<!--end:Info-->
				</span>
				<!--end:Label-->
				<!--begin:Input-->
				<span class="form-check form-check-custom form-check-solid">
					<input class="form-check-input" type="radio" name="framework" value="3" />
				</span>
				<!--end:Input-->
			</label>
			<!--end::Option-->
			<!--begin:Option-->
			<label class="d-flex flex-stack cursor-pointer">
				<!--begin:Label-->
				<span class="d-flex align-items-center me-2">
					<!--begin:Icon-->
					<span class="symbol symbol-50px me-6">
						<span class="symbol-label bg-light-primary">
							<i class="fab fa-vuejs text-primary fs-2x"></i>
						</span>
					</span>
					<!--end:Icon-->
					<!--begin:Info-->
					<span class="d-flex flex-column">
						<span class="fw-bold fs-6">Vue</span>
						<span class="fs-7 text-muted">Lightweight and responsive framework</span>
					</span>
					<!--end:Info-->
				</span>
				<!--end:Label-->
				<!--begin:Input-->
				<span class="form-check form-check-custom form-check-solid">
					<input class="form-check-input" type="radio" name="framework" value="4" />
				</span>
				<!--end:Input-->
			</label>
			<!--end::Option-->
		</div>
		<!--end::Input group-->
	</div>
</div>
<!--end::Step 2-->
							<!--begin::Step 3-->
<div data-kt-stepper-element="content">
	<div class="w-100">
		<!--begin::Input group-->
		<div class="fv-row mb-10">
			<!--begin::Label-->
			<label class="required fs-5 fw-semibold mb-2">Database Name</label>
			<!--end::Label-->
			<!--begin::Input-->
			<input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db" />
			<!--end::Input-->
		</div>
		<!--end::Input group-->
		<!--begin::Input group-->
		<div class="fv-row">
			<!--begin::Label-->
			<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
				<span class="required">Select Database Engine</span>
				<span class="ms-1" data-bs-toggle="tooltip" title="Select your app database engine"></span>
			</label>
			<!--end::Label-->
			<!--begin:Option-->
			<label class="d-flex flex-stack cursor-pointer mb-5">
				<!--begin::Label-->
				<span class="d-flex align-items-center me-2">
					<!--begin::Icon-->
					<span class="symbol symbol-50px me-6">
						<span class="symbol-label bg-light-success">
							<i class="fas fa-database text-success fs-2x"></i>
						</span>
					</span>
					<!--end::Icon-->
					<!--begin::Info-->
					<span class="d-flex flex-column">
						<span class="fw-bold fs-6">MySQL</span>
						<span class="fs-7 text-muted">Basic MySQL database</span>
					</span>
					<!--end::Info-->
				</span>
				<!--end::Label-->
				<!--begin::Input-->
				<span class="form-check form-check-custom form-check-solid">
					<input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1" />
				</span>
				<!--end::Input-->
			</label>
			<!--end::Option-->
			<!--begin:Option-->
			<label class="d-flex flex-stack cursor-pointer mb-5">
				<!--begin::Label-->
				<span class="d-flex align-items-center me-2">
					<!--begin::Icon-->
					<span class="symbol symbol-50px me-6">
						<span class="symbol-label bg-light-danger">
							<i class="fab fa-google text-danger fs-2x"></i>
						</span>
					</span>
					<!--end::Icon-->
					<!--begin::Info-->
					<span class="d-flex flex-column">
						<span class="fw-bold fs-6">Firebase</span>
						<span class="fs-7 text-muted">Google based app data management</span>
					</span>
					<!--end::Info-->
				</span>
				<!--end::Label-->
				<!--begin::Input-->
				<span class="form-check form-check-custom form-check-solid">
					<input class="form-check-input" type="radio" name="dbengine" value="2" />
				</span>
				<!--end::Input-->
			</label>
			<!--end::Option-->
			<!--begin:Option-->
			<label class="d-flex flex-stack cursor-pointer">
				<!--begin::Label-->
				<span class="d-flex align-items-center me-2">
					<!--begin::Icon-->
					<span class="symbol symbol-50px me-6">
						<span class="symbol-label bg-light-warning">
							<i class="fab fa-amazon text-warning fs-2x"></i>
						</span>
					</span>
					<!--end::Icon-->
					<!--begin::Info-->
					<span class="d-flex flex-column">
						<span class="fw-bold fs-6">DynamoDB</span>
						<span class="fs-7 text-muted">Amazon Fast NoSQL Database</span>
					</span>
					<!--end::Info-->
				</span>
				<!--end::Label-->
				<!--begin::Input-->
				<span class="form-check form-check-custom form-check-solid">
					<input class="form-check-input" type="radio" name="dbengine" value="3" />
				</span>
				<!--end::Input-->
			</label>
			<!--end::Option-->
		</div>
		<!--end::Input group-->
	</div>
</div>
<!--end::Step 3-->
							<!--begin::Step 4-->
<div data-kt-stepper-element="content">
	<div class="w-100">
		<!--begin::Input group-->
<div class="d-flex flex-column mb-7 fv-row">
	<!--begin::Label-->
	<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
		<span class="required">Name On Card</span>
		<span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name"></span>
	</label>
	<!--end::Label-->
	<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="d-flex flex-column mb-7 fv-row">
	<!--begin::Label-->
	<label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
	<!--end::Label-->
	<!--begin::Input wrapper-->
	<div class="position-relative">
		<!--begin::Input-->
		<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
		<!--end::Input-->
		<!--begin::Card logos-->
		<div class="position-absolute translate-middle-y top-50 end-0 me-5">
			<img src="https://gombeirs.com/assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
			<img src="https://gombeirs.com/assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
			<img src="https://gombeirs.com/assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
		</div>
		<!--end::Card logos-->
	</div>
	<!--end::Input wrapper-->
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="row mb-10">
	<!--begin::Col-->
	<div class="col-md-8 fv-row">
		<!--begin::Label-->
		<label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
		<!--end::Label-->
		<!--begin::Row-->
		<div class="row fv-row">
			<!--begin::Col-->
			<div class="col-6">
				<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
					<option></option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-6">
				<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
					<option></option>
					<option value="2023">2023</option>
					<option value="2024">2024</option>
					<option value="2025">2025</option>
					<option value="2026">2026</option>
					<option value="2027">2027</option>
					<option value="2028">2028</option>
					<option value="2029">2029</option>
					<option value="2030">2030</option>
					<option value="2031">2031</option>
					<option value="2032">2032</option>
					<option value="2033">2033</option>
				</select>
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
	</div>
	<!--end::Col-->
	<!--begin::Col-->
	<div class="col-md-4 fv-row">
		<!--begin::Label-->
		<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
			<span class="required">CVV</span>
			<span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code"></span>
		</label>
		<!--end::Label-->
		<!--begin::Input wrapper-->
		<div class="position-relative">
			<!--begin::Input-->
			<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
			<!--end::Input-->
			<!--begin::CVV icon-->
			<div class="position-absolute translate-middle-y top-50 end-0 me-3"><span class="ki-duotone ki-credit-cart fs-2hx"><span class="path1"></span><span class="path2"></span></span></div>
			<!--end::CVV icon-->
		</div>
		<!--end::Input wrapper-->
	</div>
	<!--end::Col-->
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="d-flex flex-stack">
	<!--begin::Label-->
	<div class="me-5">
		<label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
		<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
	</div>
	<!--end::Label-->
	<!--begin::Switch-->
	<label class="form-check form-switch form-check-custom form-check-solid">
		<input class="form-check-input" type="checkbox" value="1" checked="checked" />
		<span class="form-check-label fw-semibold text-muted">Save Card</span>
	</label>
	<!--end::Switch-->
</div>
<!--end::Input group-->
	</div>
</div>
<!--end::Step 4-->
							<!--begin::Step 5-->
<div data-kt-stepper-element="content">
	<div class="w-100 text-center">
		<!--begin::Heading-->
		<h1 class="fw-bold text-dark mb-3">Release!</h1>
		<!--end::Heading-->
		<!--begin::Description-->
		<div class="text-muted fw-semibold fs-3">Submit your app to kickstart your project.</div>
		<!--end::Description-->
		<!--begin::Illustration-->
		<div class="text-center px-4 py-15">
			<img src="https://gombeirs.com/assets/media/illustrations/sketchy-1/9.png" alt="" class="mw-100 mh-300px" />
		</div>
		<!--end::Illustration-->
	</div>
</div>
<!--end::Step 5-->
							<!--begin::Actions-->
							<div class="d-flex flex-stack pt-10">
								<!--begin::Wrapper-->
								<div class="me-2">
									<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous"><span class="ki-duotone ki-arrow-left fs-3 me-1"><span class="path1"></span><span class="path2"></span></span> Back</button>
								</div>
								<!--end::Wrapper-->
								<!--begin::Wrapper-->
								<div>
									<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
										<span class="indicator-label">Submit <span class="ki-duotone ki-arrow-right fs-3 ms-2 me-0"><span class="path1"></span><span class="path2"></span></span></span>
										<span class="indicator-progress">Please wait... 
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
									<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue <span class="ki-duotone ki-arrow-right fs-3 ms-1 me-0"><span class="path1"></span><span class="path2"></span></span></button>
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Stepper-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Create App-->
<!--begin::Modal - Create Campaign-->
<div class="modal fade" id="kt_modal_create_campaign" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-fullscreen p-9">
		<!--begin::Modal content-->
		<div class="modal-content modal-rounded">
			<!--begin::Modal header-->
			<div class="modal-header py-7 d-flex justify-content-between">
				<!--begin::Modal title-->
				<h2>Create Campaign</h2>
				<!--end::Modal title-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"/>
<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"/>
</svg>

</span>
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y m-5">
				<!--begin::Stepper-->
				<div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">
					<!--begin::Nav-->
					<div class="stepper-nav justify-content-center py-2">
						<!--begin::Step 1-->
						<div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
							<h3 class="stepper-title">Campaign Details</h3>
						</div>
						<!--end::Step 1-->
						<!--begin::Step 2-->
						<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
							<h3 class="stepper-title">Creative Uploads</h3>
						</div>
						<!--end::Step 2-->
						<!--begin::Step 3-->
						<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
							<h3 class="stepper-title">Audiences</h3>
						</div>
						<!--end::Step 3-->
						<!--begin::Step 4-->
						<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
							<h3 class="stepper-title">Budget Estimates</h3>
						</div>
						<!--end::Step 4-->
						<!--begin::Step 5-->
						<div class="stepper-item" data-kt-stepper-element="nav">
							<h3 class="stepper-title">Completed</h3>
						</div>
						<!--end::Step 5-->
					</div>
					<!--end::Nav-->
					<!--begin::Form-->
					<form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_campaign_stepper_form">

						@incldue('partials/modals/create-campaign/steps/step-1')
						@incldue('partials/modals/create-campaign/steps/step-2')
						@incldue('partials/modals/create-campaign/steps/step-3')
						@incldue('partials/modals/create-campaign/steps/step-4')
						@incldue('partials/modals/create-campaign/steps/step-5')

						<!--begin::Actions-->
						<div class="d-flex flex-stack pt-10">
							<!--begin::Wrapper-->
							<div class="me-2">
								<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
									<span class="svg-icon svg-icon-3 me-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor"/>
<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor"/>
</svg>
</span> Back
								</button>
							</div>
							<!--end::Wrapper-->
							<!--begin::Wrapper-->
							<div>
								<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
									<span class="indicator-label">Submit <span class="svg-icon svg-icon-3 ms-2 me-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"/>
<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"/>
</svg>
</span></span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
								<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue <span class="svg-icon svg-icon-3 ms-1 me-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"/>
<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"/>
</svg>
</span></button>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Actions-->
					</form>
					<!--end::Form-->
				</div>
				<!--end::Stepper-->
			</div>
			<!--begin::Modal body-->
		</div>
	</div>
</div>
<!--end::Modal - Create Campaign-->

<!--begin::Modal - Create Project-->
<div class="modal fade" id="kt_modal_create_project" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-fullscreen p-9">
    <!--begin::Modal content-->
    <div class="modal-content modal-rounded">
      <!--begin::Modal header-->
      <div class="modal-header">
        <!--begin::Modal title-->
        <h2>Create Project</h2>
        <!--end::Modal title-->
        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"/>
<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"/>
</svg>

</span>
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->
      <!--begin::Modal body-->
      <div class="modal-body scroll-y m-5">
        <!--begin::Stepper-->
        <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper">
          <!--begin::Container-->
          <div class="container">
            <!--begin::Nav-->
            <div class="stepper-nav justify-content-center py-2">
              <!--begin::Step 1-->
              <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                <h3 class="stepper-title">Project Type</h3>
              </div>
              <!--end::Step 1-->
              <!--begin::Step 2-->
              <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                <h3 class="stepper-title">Project Settings</h3>
              </div>
              <!--end::Step 2-->
              <!--begin::Step 3-->
              <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                <h3 class="stepper-title">Budget</h3>
              </div>
              <!--end::Step 3-->
              <!--begin::Step 4-->
              <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                <h3 class="stepper-title">Build A Team</h3>
              </div>
              <!--end::Step 4-->
              <!--begin::Step 5-->
              <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                <h3 class="stepper-title">Set First Target</h3>
              </div>
              <!--end::Step 5-->
              <!--begin::Step 6-->
              <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                <h3 class="stepper-title">Upload Files</h3>
              </div>
              <!--end::Step 6-->
              <!--begin::Step 7-->
              <div class="stepper-item" data-kt-stepper-element="nav">
                <h3 class="stepper-title">Completed</h3>
              </div>
              <!--end::Step 7-->
            </div>
            <!--end::Nav-->
            <!--begin::Form-->
            <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_project_form" method="post">
              @incldue('partials/modals/create-project/steps/type')
              @incldue('partials/modals/create-project/steps/settings')
              @incldue('partials/modals/create-project/steps/budget')
              @incldue('partials/modals/create-project/steps/team')
              @incldue('partials/modals/create-project/steps/targets')
              @incldue('partials/modals/create-project/steps/files')
              @incldue('partials/modals/create-project/steps/complete')
            </form>
            <!--end::Form-->
          </div>
          <!--begin::Container-->
        </div>
        <!--end::Stepper-->
      </div>
      <!--end::Modal body-->
    </div>
    <!--end::Modal content-->
  </div>
  <!--end::Modal dialog-->
</div>
<!--end::Modal - Create Project-->

<!--begin::Modal - New Target-->
<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content rounded">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal"><span class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></span></div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
				<!--begin:Form-->
				<form id="kt_modal_new_target_form" class="form" action="#">
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3">Set First Target</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="text-muted fw-semibold fs-5">If you need more info, please check 
						<a href="#" class="fw-bold link-primary">Project Guidelines</a>.</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-8 fv-row">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
							<span class="required">Target Title</span>
							<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></span>
						</label>
						<!--end::Label-->
						<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Assign</label>
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
								<option value="">Select user...</option>
								<option value="1">Karina Clark</option>
								<option value="2">Robert Doe</option>
								<option value="3">Niel Owen</option>
								<option value="4">Olivia Wild</option>
								<option value="5">Sean Bean</option>
							</select>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Due Date</label>
							<!--begin::Input-->
							<div class="position-relative d-flex align-items-center">
							<!--begin::Icon-->
							<span class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></span> 
							<!--end::Icon-->
							<!--begin::Datepicker-->
							<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
							<!--end::Datepicker--></div>
							<!--end::Input-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-8">
						<label class="fs-6 fw-semibold mb-2">Target Details</label>
						<textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details"></textarea>
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-8 fv-row">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
							<span class="required">Tags</span>
							<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target priorty"><span class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></span>						</label>
						<!--end::Label-->
						<input class="form-control form-control-solid" value="Important, Urgent" name="tags" />
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="d-flex flex-stack mb-8">
						<!--begin::Label-->
						<div class="me-5">
							<label class="fs-6 fw-semibold">Adding Users by Team Members</label>
							<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
						</div>
						<!--end::Label-->
						<!--begin::Switch-->
						<label class="form-check form-switch form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" checked="checked" />
							<span class="form-check-label fw-semibold text-muted">Allowed</span>
						</label>
						<!--end::Switch-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="mb-15 fv-row">
						<!--begin::Wrapper-->
						<div class="d-flex flex-stack">
							<!--begin::Label-->
							<div class="fw-semibold me-5">
								<label class="fs-6">Notifications</label>
								<div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
							</div>
							<!--end::Label-->
							<!--begin::Checkboxes-->
							<div class="d-flex align-items-center">
								<!--begin::Checkbox-->
								<label class="form-check form-check-custom form-check-solid me-10">
									<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
									<span class="form-check-label fw-semibold">Email</span>
								</label>
								<!--end::Checkbox-->
								<!--begin::Checkbox-->
								<label class="form-check form-check-custom form-check-solid">
									<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone" />
									<span class="form-check-label fw-semibold">Phone</span>
								</label>
								<!--end::Checkbox-->
							</div>
							<!--end::Checkboxes-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Input group-->
					<!--begin::Actions-->
					<div class="text-center">
						<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
						<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
							<span class="indicator-label">Submit</span>
							<span class="indicator-progress">Please wait... 
							<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
					</div>
					<!--end::Actions-->
				</form>
				<!--end:Form-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->
<!--begin::Modal - View Users-->
<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal"><span class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></span></div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
				<!--begin::Heading-->
				<div class="text-center mb-13">
					<!--begin::Title-->
					<h1 class="mb-3">Browse Users</h1>
					<!--end::Title-->
					<!--begin::Description-->
					<div class="text-muted fw-semibold fs-5">If you need more info, please check out our 
					<a href="#" class="link-primary fw-bold">Users Directory</a>.</div>
					<!--end::Description-->
				</div>
				<!--end::Heading-->
				<!--begin::Users-->
				<div class="mb-15">
					<!--begin::List-->
					<div class="mh-375px scroll-y me-n7 pe-7">
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-6.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Smith 
									<span class="badge badge-light fs-8 fw-semibold ms-2">Art Director</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">smith@kpmg.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$23,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Melody Macy 
									<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">melody@altbox.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$50,500</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Max Smith 
									<span class="badge badge-light fs-8 fw-semibold ms-2">Software Enginer</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">max@kt.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$75,900</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-5.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Sean Bean 
									<span class="badge badge-light fs-8 fw-semibold ms-2">Web Developer</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">sean@dellito.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$10,500</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Brian Cox 
									<span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX Designer</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">brian@exchange.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$20,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Mikaela Collins 
									<span class="badge badge-light fs-8 fw-semibold ms-2">Head Of Marketing</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">mik@pex.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$9,300</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-9.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Francis Mitcham 
									<span class="badge badge-light fs-8 fw-semibold ms-2">Software Arcitect</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$15,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Olivia Wild 
									<span class="badge badge-light fs-8 fw-semibold ms-2">System Admin</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">olivia@corpmail.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$23,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Neil Owen 
									<span class="badge badge-light fs-8 fw-semibold ms-2">Account Manager</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$45,800</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-23.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Dan Wilson 
									<span class="badge badge-light fs-8 fw-semibold ms-2">Web Desinger</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">dam@consilting.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$90,500</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Bold 
									<span class="badge badge-light fs-8 fw-semibold ms-2">Corporate Finance</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">emma@intenso.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$5,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-12.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Ana Crown 
									<span class="badge badge-light fs-8 fw-semibold ms-2">Customer Relationship</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$70,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Robert Doe 
									<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Executive</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">robert@benko.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$45,500</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
					</div>
					<!--end::List-->
				</div>
				<!--end::Users-->
				<!--begin::Notice-->
				<div class="d-flex justify-content-between">
					<!--begin::Label-->
					<div class="fw-semibold">
						<label class="fs-6">Adding Users by Team Members</label>
						<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
					</div>
					<!--end::Label-->
					<!--begin::Switch-->
					<label class="form-check form-switch form-check-custom form-check-solid">
						<input class="form-check-input" type="checkbox" value="" checked="checked" />
						<span class="form-check-label fw-semibold text-muted">Allowed</span>
					</label>
					<!--end::Switch-->
				</div>
				<!--end::Notice-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - View Users-->

<!--begin::Modal - Users Search-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal"><span class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></span></div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
				<!--begin::Content-->
				<div class="text-center mb-13">
					<h1 class="mb-3">Search Users</h1>
					<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
				</div>
				<!--end::Content-->
				<!--begin::Search-->
				<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
					<!--begin::Form-->
					<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
					<!--begin::Hidden input(Added to disable form autocomplete)-->
					<input type="hidden" />
					<!--end::Hidden input-->
					<!--begin::Icon-->
					<span class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span class="path1"></span><span class="path2"></span></span> 
					<!--end::Icon-->
					<!--begin::Input-->
					<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
					<!--end::Input-->
					<!--begin::Spinner-->
					<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
						<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
					</span>
					<!--end::Spinner-->
					<!--begin::Reset-->
					<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear"><span class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span class="path2"></span></span></span>
					<!--end::Reset--></form>
					<!--end::Form-->
					<!--begin::Wrapper-->
					<div class="py-5">
						<!--begin::Suggestions-->
<div data-kt-search-element="suggestions">
	<!--begin::Heading-->
	<h3 class="fw-semibold mb-5">Recently searched:</h3>
	<!--end::Heading-->
	<!--begin::Users-->
	<div class="mh-375px scroll-y me-n7 pe-7">
		<!--begin::User-->
		<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
			<!--begin::Avatar-->
			<div class="symbol symbol-35px symbol-circle me-5">
				<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-6.jpg" />
			</div>
			<!--end::Avatar-->
			<!--begin::Info-->
			<div class="fw-semibold">
				<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
				<span class="badge badge-light">Art Director</span>
			</div>
			<!--end::Info-->
		</a>
		<!--end::User-->
		<!--begin::User-->
		<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
			<!--begin::Avatar-->
			<div class="symbol symbol-35px symbol-circle me-5">
				<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
			</div>
			<!--end::Avatar-->
			<!--begin::Info-->
			<div class="fw-semibold">
				<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
				<span class="badge badge-light">Marketing Analytic</span>
			</div>
			<!--end::Info-->
		</a>
		<!--end::User-->
		<!--begin::User-->
		<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
			<!--begin::Avatar-->
			<div class="symbol symbol-35px symbol-circle me-5">
				<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-1.jpg" />
			</div>
			<!--end::Avatar-->
			<!--begin::Info-->
			<div class="fw-semibold">
				<span class="fs-6 text-gray-800 me-2">Max Smith</span>
				<span class="badge badge-light">Software Enginer</span>
			</div>
			<!--end::Info-->
		</a>
		<!--end::User-->
		<!--begin::User-->
		<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
			<!--begin::Avatar-->
			<div class="symbol symbol-35px symbol-circle me-5">
				<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-5.jpg" />
			</div>
			<!--end::Avatar-->
			<!--begin::Info-->
			<div class="fw-semibold">
				<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
				<span class="badge badge-light">Web Developer</span>
			</div>
			<!--end::Info-->
		</a>
		<!--end::User-->
		<!--begin::User-->
		<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
			<!--begin::Avatar-->
			<div class="symbol symbol-35px symbol-circle me-5">
				<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-25.jpg" />
			</div>
			<!--end::Avatar-->
			<!--begin::Info-->
			<div class="fw-semibold">
				<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
				<span class="badge badge-light">UI/UX Designer</span>
			</div>
			<!--end::Info-->
		</a>
		<!--end::User-->
	</div>
	<!--end::Users-->
</div>
<!--end::Suggestions-->
						<!--begin::Results(add d-none to below element to hide the users list by default)-->
<div data-kt-search-element="results" class="d-none">
	<!--begin::Users-->
	<div class="mh-375px scroll-y me-n7 pe-7">
		<!--begin::User-->
		<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Checkbox-->
				<label class="form-check form-check-custom form-check-solid me-5">
					<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
				</label>
				<!--end::Checkbox-->
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle">
					<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-6.jpg" />
				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-5">
					<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
					<div class="fw-semibold text-muted">smith@kpmg.com</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
			<!--begin::Access menu-->
			<div class="ms-2 w-100px">
				<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
					<option value="1">Guest</option>
					<option value="2" selected="selected">Owner</option>
					<option value="3">Can Edit</option>
				</select>
			</div>
			<!--end::Access menu-->
		</div>
		<!--end::User-->
		<!--begin::Separator-->
		<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
		<!--end::Separator-->
		<!--begin::User-->
		<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Checkbox-->
				<label class="form-check form-check-custom form-check-solid me-5">
					<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
				</label>
				<!--end::Checkbox-->
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle">
					<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-5">
					<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
					<div class="fw-semibold text-muted">melody@altbox.com</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
			<!--begin::Access menu-->
			<div class="ms-2 w-100px">
				<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
					<option value="1" selected="selected">Guest</option>
					<option value="2">Owner</option>
					<option value="3">Can Edit</option>
				</select>
			</div>
			<!--end::Access menu-->
		</div>
		<!--end::User-->
		<!--begin::Separator-->
		<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
		<!--end::Separator-->
		<!--begin::User-->
		<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Checkbox-->
				<label class="form-check form-check-custom form-check-solid me-5">
					<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
				</label>
				<!--end::Checkbox-->
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle">
					<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-1.jpg" />
				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-5">
					<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
					<div class="fw-semibold text-muted">max@kt.com</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
			<!--begin::Access menu-->
			<div class="ms-2 w-100px">
				<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
					<option value="1">Guest</option>
					<option value="2">Owner</option>
					<option value="3" selected="selected">Can Edit</option>
				</select>
			</div>
			<!--end::Access menu-->
		</div>
		<!--end::User-->
		<!--begin::Separator-->
		<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
		<!--end::Separator-->
		<!--begin::User-->
		<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Checkbox-->
				<label class="form-check form-check-custom form-check-solid me-5">
					<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
				</label>
				<!--end::Checkbox-->
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle">
					<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-5.jpg" />
				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-5">
					<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
					<div class="fw-semibold text-muted">sean@dellito.com</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
			<!--begin::Access menu-->
			<div class="ms-2 w-100px">
				<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
					<option value="1">Guest</option>
					<option value="2" selected="selected">Owner</option>
					<option value="3">Can Edit</option>
				</select>
			</div>
			<!--end::Access menu-->
		</div>
		<!--end::User-->
		<!--begin::Separator-->
		<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
		<!--end::Separator-->
		<!--begin::User-->
		<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Checkbox-->
				<label class="form-check form-check-custom form-check-solid me-5">
					<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
				</label>
				<!--end::Checkbox-->
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle">
					<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-25.jpg" />
				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-5">
					<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
					<div class="fw-semibold text-muted">brian@exchange.com</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
			<!--begin::Access menu-->
			<div class="ms-2 w-100px">
				<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
					<option value="1">Guest</option>
					<option value="2">Owner</option>
					<option value="3" selected="selected">Can Edit</option>
				</select>
			</div>
			<!--end::Access menu-->
		</div>
		<!--end::User-->
		<!--begin::Separator-->
		<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
		<!--end::Separator-->
		<!--begin::User-->
		<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Checkbox-->
				<label class="form-check form-check-custom form-check-solid me-5">
					<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
				</label>
				<!--end::Checkbox-->
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle">
					<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-5">
					<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
					<div class="fw-semibold text-muted">mik@pex.com</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
			<!--begin::Access menu-->
			<div class="ms-2 w-100px">
				<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
					<option value="1">Guest</option>
					<option value="2" selected="selected">Owner</option>
					<option value="3">Can Edit</option>
				</select>
			</div>
			<!--end::Access menu-->
		</div>
		<!--end::User-->
		<!--begin::Separator-->
		<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
		<!--end::Separator-->
		<!--begin::User-->
		<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Checkbox-->
				<label class="form-check form-check-custom form-check-solid me-5">
					<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
				</label>
				<!--end::Checkbox-->
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle">
					<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-9.jpg" />
				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-5">
					<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
					<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
			<!--begin::Access menu-->
			<div class="ms-2 w-100px">
				<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
					<option value="1">Guest</option>
					<option value="2">Owner</option>
					<option value="3" selected="selected">Can Edit</option>
				</select>
			</div>
			<!--end::Access menu-->
		</div>
		<!--end::User-->
		<!--begin::Separator-->
		<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
		<!--end::Separator-->
		<!--begin::User-->
		<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Checkbox-->
				<label class="form-check form-check-custom form-check-solid me-5">
					<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
				</label>
				<!--end::Checkbox-->
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle">
					<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-5">
					<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
					<div class="fw-semibold text-muted">olivia@corpmail.com</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
			<!--begin::Access menu-->
			<div class="ms-2 w-100px">
				<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
					<option value="1">Guest</option>
					<option value="2" selected="selected">Owner</option>
					<option value="3">Can Edit</option>
				</select>
			</div>
			<!--end::Access menu-->
		</div>
		<!--end::User-->
		<!--begin::Separator-->
		<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
		<!--end::Separator-->
		<!--begin::User-->
		<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Checkbox-->
				<label class="form-check form-check-custom form-check-solid me-5">
					<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
				</label>
				<!--end::Checkbox-->
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle">
					<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-5">
					<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
					<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
			<!--begin::Access menu-->
			<div class="ms-2 w-100px">
				<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
					<option value="1" selected="selected">Guest</option>
					<option value="2">Owner</option>
					<option value="3">Can Edit</option>
				</select>
			</div>
			<!--end::Access menu-->
		</div>
		<!--end::User-->
		<!--begin::Separator-->
		<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
		<!--end::Separator-->
		<!--begin::User-->
		<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Checkbox-->
				<label class="form-check form-check-custom form-check-solid me-5">
					<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
				</label>
				<!--end::Checkbox-->
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle">
					<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-23.jpg" />
				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-5">
					<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
					<div class="fw-semibold text-muted">dam@consilting.com</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
			<!--begin::Access menu-->
			<div class="ms-2 w-100px">
				<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
					<option value="1">Guest</option>
					<option value="2">Owner</option>
					<option value="3" selected="selected">Can Edit</option>
				</select>
			</div>
			<!--end::Access menu-->
		</div>
		<!--end::User-->
		<!--begin::Separator-->
		<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
		<!--end::Separator-->
		<!--begin::User-->
		<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Checkbox-->
				<label class="form-check form-check-custom form-check-solid me-5">
					<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
				</label>
				<!--end::Checkbox-->
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle">
					<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-5">
					<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
					<div class="fw-semibold text-muted">emma@intenso.com</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
			<!--begin::Access menu-->
			<div class="ms-2 w-100px">
				<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
					<option value="1">Guest</option>
					<option value="2" selected="selected">Owner</option>
					<option value="3">Can Edit</option>
				</select>
			</div>
			<!--end::Access menu-->
		</div>
		<!--end::User-->
		<!--begin::Separator-->
		<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
		<!--end::Separator-->
		<!--begin::User-->
		<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Checkbox-->
				<label class="form-check form-check-custom form-check-solid me-5">
					<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
				</label>
				<!--end::Checkbox-->
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle">
					<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-12.jpg" />
				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-5">
					<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
					<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
			<!--begin::Access menu-->
			<div class="ms-2 w-100px">
				<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
					<option value="1" selected="selected">Guest</option>
					<option value="2">Owner</option>
					<option value="3">Can Edit</option>
				</select>
			</div>
			<!--end::Access menu-->
		</div>
		<!--end::User-->
		<!--begin::Separator-->
		<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
		<!--end::Separator-->
		<!--begin::User-->
		<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Checkbox-->
				<label class="form-check form-check-custom form-check-solid me-5">
					<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
				</label>
				<!--end::Checkbox-->
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle">
					<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-5">
					<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
					<div class="fw-semibold text-muted">robert@benko.com</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
			<!--begin::Access menu-->
			<div class="ms-2 w-100px">
				<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
					<option value="1">Guest</option>
					<option value="2">Owner</option>
					<option value="3" selected="selected">Can Edit</option>
				</select>
			</div>
			<!--end::Access menu-->
		</div>
		<!--end::User-->
		<!--begin::Separator-->
		<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
		<!--end::Separator-->
		<!--begin::User-->
		<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Checkbox-->
				<label class="form-check form-check-custom form-check-solid me-5">
					<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
				</label>
				<!--end::Checkbox-->
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle">
					<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-13.jpg" />
				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-5">
					<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
					<div class="fw-semibold text-muted">miller@mapple.com</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
			<!--begin::Access menu-->
			<div class="ms-2 w-100px">
				<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
					<option value="1">Guest</option>
					<option value="2">Owner</option>
					<option value="3" selected="selected">Can Edit</option>
				</select>
			</div>
			<!--end::Access menu-->
		</div>
		<!--end::User-->
		<!--begin::Separator-->
		<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
		<!--end::Separator-->
		<!--begin::User-->
		<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Checkbox-->
				<label class="form-check form-check-custom form-check-solid me-5">
					<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
				</label>
				<!--end::Checkbox-->
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle">
					<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-5">
					<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
					<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
			<!--begin::Access menu-->
			<div class="ms-2 w-100px">
				<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
					<option value="1">Guest</option>
					<option value="2" selected="selected">Owner</option>
					<option value="3">Can Edit</option>
				</select>
			</div>
			<!--end::Access menu-->
		</div>
		<!--end::User-->
		<!--begin::Separator-->
		<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
		<!--end::Separator-->
		<!--begin::User-->
		<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Checkbox-->
				<label class="form-check form-check-custom form-check-solid me-5">
					<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
				</label>
				<!--end::Checkbox-->
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle">
					<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-21.jpg" />
				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-5">
					<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
					<div class="fw-semibold text-muted">ethan@loop.com.au</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
			<!--begin::Access menu-->
			<div class="ms-2 w-100px">
				<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
					<option value="1" selected="selected">Guest</option>
					<option value="2">Owner</option>
					<option value="3">Can Edit</option>
				</select>
			</div>
			<!--end::Access menu-->
		</div>
		<!--end::User-->
		<!--begin::Separator-->
		<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
		<!--end::Separator-->
		<!--begin::User-->
		<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
			<!--begin::Details-->
			<div class="d-flex align-items-center">
				<!--begin::Checkbox-->
				<label class="form-check form-check-custom form-check-solid me-5">
					<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
				</label>
				<!--end::Checkbox-->
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle">
					<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
				</div>
				<!--end::Avatar-->
				<!--begin::Details-->
				<div class="ms-5">
					<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
					<div class="fw-semibold text-muted">robert@benko.com</div>
				</div>
				<!--end::Details-->
			</div>
			<!--end::Details-->
			<!--begin::Access menu-->
			<div class="ms-2 w-100px">
				<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
					<option value="1">Guest</option>
					<option value="2">Owner</option>
					<option value="3" selected="selected">Can Edit</option>
				</select>
			</div>
			<!--end::Access menu-->
		</div>
		<!--end::User-->
	</div>
	<!--end::Users-->
	<!--begin::Actions-->
	<div class="d-flex flex-center mt-15">
		<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
		<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
	</div>
	<!--end::Actions-->
</div>
<!--end::Results-->
						<!--begin::Empty-->
<div data-kt-search-element="empty" class="text-center d-none">
	<!--begin::Message-->
	<div class="fw-semibold py-10">
		<div class="text-gray-600 fs-3 mb-2">No users found</div>
		<div class="text-muted fs-6">Try to search by username, full name or email...</div>
	</div>
	<!--end::Message-->
	<!--begin::Illustration-->
	<div class="text-center px-5">
		<img src="https://gombeirs.com/assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
	</div>
	<!--end::Illustration-->
</div>
<!--end::Empty-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Search-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search-->
<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal"><span class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></span></div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
				<!--begin::Heading-->
				<div class="text-center mb-13">
					<!--begin::Title-->
					<h1 class="mb-3">Invite a Friend</h1>
					<!--end::Title-->
					<!--begin::Description-->
					<div class="text-muted fw-semibold fs-5">If you need more info, please check out 
					<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
					<!--end::Description-->
				</div>
				<!--end::Heading-->
				<!--begin::Google Contacts Invite-->
				<div class="btn btn-light-primary fw-bold w-100 mb-8">
				<img alt="Logo" src="https://gombeirs.com/assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts</div>
				<!--end::Google Contacts Invite-->
				<!--begin::Separator-->
				<div class="separator d-flex flex-center mb-8">
					<span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
				</div>
				<!--end::Separator-->
				<!--begin::Textarea-->
				<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
				<!--end::Textarea-->
				<!--begin::Users-->
				<div class="mb-10">
					<!--begin::Heading-->
					<div class="fs-6 fw-semibold mb-2">Your Invitations</div>
					<!--end::Heading-->
					<!--begin::List-->
					<div class="mh-300px scroll-y me-n7 pe-7">
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-6.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
									<div class="fw-semibold text-muted">smith@kpmg.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
									<div class="fw-semibold text-muted">melody@altbox.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
									<div class="fw-semibold text-muted">max@kt.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-5.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
									<div class="fw-semibold text-muted">sean@dellito.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
									<div class="fw-semibold text-muted">brian@exchange.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
									<div class="fw-semibold text-muted">mik@pex.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-9.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
									<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
									<div class="fw-semibold text-muted">olivia@corpmail.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
									<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-23.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
									<div class="fw-semibold text-muted">dam@consilting.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
									<div class="fw-semibold text-muted">emma@intenso.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-12.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
									<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
									<div class="fw-semibold text-muted">robert@benko.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-13.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
									<div class="fw-semibold text-muted">miller@mapple.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
									<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-21.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
									<div class="fw-semibold text-muted">ethan@loop.com.au</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="https://gombeirs.com/assets/media/avatars/300-21.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
									<div class="fw-semibold text-muted">sean@dellito.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
					</div>
					<!--end::List-->
				</div>
				<!--end::Users-->
				<!--begin::Notice-->
				<div class="d-flex flex-stack">
					<!--begin::Label-->
					<div class="me-5 fw-semibold">
						<label class="fs-6">Adding Users by Team Members</label>
						<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
					</div>
					<!--end::Label-->
					<!--begin::Switch-->
					<label class="form-check form-switch form-check-custom form-check-solid">
						<input class="form-check-input" type="checkbox" value="1" checked="checked" />
						<span class="form-check-label fw-semibold text-muted">Allowed</span>
					</label>
					<!--end::Switch-->
				</div>
				<!--end::Notice-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Invite Friend-->
<!--end::Modals-->

    <!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true"><span class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></span></div>
<!--end::Scrolltop-->

<!--begin::Javascript    oncontextmenu="return false;"-->
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="https://gombeirs.com/assets/plugins/global/plugins.bundle.js"></script>
    <script src="https://gombeirs.com/assets/js/scripts.bundle.js"></script>
    <script src="https://gombeirs.com/assets/js/widgets.bundle.js"></script>
<!--end::Global Javascript Bundle-->

<!--begin::Vendors Javascript(used by this page)-->
    <script src="https://gombeirs.com/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(optional)-->
    <script src="https://gombeirs.com/assets/js/custom/widgets.js"></script>
    <script src="https://gombeirs.com/assets/js/custom/apps/chat/chat.js"></script>
    <script src="https://gombeirs.com/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="https://gombeirs.com/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="https://gombeirs.com/assets/js/custom/utilities/modals/users-search.js"></script>
    <script src="https://gombeirs.com/assets/js/custom/utilities/modals/new-target.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->

<script>

    document.addEventListener('livewire:load', () => {
        Livewire.on('success', (message) => {
            toastr.success(message);
        });
        Livewire.on('error', (message) => {
            toastr.error(message);
        });

        Livewire.on('swal', (message, icon, confirmButtonText) => {
            if (typeof icon === 'undefined') {
                icon = 'success';
            }
            if (typeof confirmButtonText === 'undefined') {
                confirmButtonText = 'Ok, got it!';
            }
            Swal.fire({
                text: message,
                icon: icon,
                buttonsStyling: false,
                confirmButtonText: confirmButtonText,
                customClass: {
                    confirmButton: 'btn btn-primary'
                }
            });
        });
    });
    
   
</script>

<!-- Livewire Scripts -->

<script src="/vendor/livewire/livewire.js?id=90730a3b0e7144480175" data-turbo-eval="false" data-turbolinks-eval="false" ></script>
<script data-turbo-eval="false" data-turbolinks-eval="false" >
    if (window.livewire) {
	    console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')
	}

    window.livewire = new Livewire();
    window.livewire.devTools(true);
    window.Livewire = window.livewire;
    window.livewire_app_url = '';
    window.livewire_token = 'FFp4IgPD2dyAhypymnGRMGqehdiTu2mQ5JaIXzUi';

	/* Make sure Livewire loads first. */
	if (window.Alpine) {
	    /* Defer showing the warning so it doesn't get buried under downstream errors. */
	    document.addEventListener("DOMContentLoaded", function () {
	        setTimeout(function() {
	            console.warn("Livewire: It looks like AlpineJS has already been loaded. Make sure Livewire\'s scripts are loaded before Alpine.\\n\\n Reference docs for more info: http://laravel-livewire.com/docs/alpine-js")
	        })
	    });
	}

	/* Make Alpine wait until Livewire is finished rendering to do its thing. */
    window.deferLoadingAlpine = function (callback) {
        window.addEventListener('livewire:load', function () {
            callback();
        });
    };

    let started = false;

    window.addEventListener('alpine:initializing', function () {
        if (! started) {
            window.livewire.start();

            started = true;
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
        if (! started) {
            window.livewire.start();

            started = true;
        }
    });
</script>
</body>
<!--end::Body-->

</html>

