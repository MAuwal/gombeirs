<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid" data-kt-app-layout="light-sidebar">
	<!--begin::Menu wrapper-->
	<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
		<!--begin::Menu-->
		<div class="menu menu-column menu-rounded menu-sub-indention px-3 fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
			<!--begin:Menu item-->
			
			@if(auth()->user()->hasRole("administrator"))
			<!--<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('dashboard') ? 'here show' : '' }}">-->
                <!--begin:Menu link-->
   <!--             <a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">-->
   <!--                 <span class="menu-link">-->
   <!--                     <span class="menu-icon">{!! getIcon('element-11', 'fs-2') !!}</span>-->
   <!--                     <span class="menu-title">Dashboard</span>-->
   <!--                 </span>-->
   <!--             </a>-->
                <!--end:Menu link-->
   <!--         </div>-->
            <!--end:Menu item-->
            
            <div class="menu-item">
						<!--begin:Menu link-->

						
						<a href="{{ route('admin.dashboard') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-44', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">DASHBOARD</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					 

			<!--begin:Menu item-->
			<div class="menu-item pt-5">
				<!--begin:Menu content-->
				<div class="menu-content">
					<span class="menu-heading fw-bold text-uppercase fs-7">CATEGORY</span>
				</div>
				<!--end:Menu content-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('user-management.*') ? 'here show' : '' }}">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('abstract-28', 'text-success fs-2') !!}</span>
					<span class="menu-title">USER MANAGEMENT</span>
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				<!--begin:Menu sub-->
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link {{ request()->routeIs('user-management.users.*') ? 'active' : '' }}" href="{{ route('user-management.users.index') }}">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-30', 'text-success fs-2') !!}</span>
							<span class="menu-title">USERS</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link {{ request()->routeIs('user-management.roles.*') ? 'active' : '' }}" href="{{ route('user-management.roles.index') }}">
						<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-35', 'text-success fs-2') !!}</span>
							<span class="menu-title">ROLES</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<!--<a class="menu-link {{ request()->routeIs('user-management.permissions.*') ? 'active' : '' }}" href="{{ route('user-management.permissions.index') }}">-->
						<!--	<span class="menu-bullet">-->
						<!--		<span class="bullet bullet-dot"></span>-->
						<!--	</span>-->
						<!--	<span class="menu-title">Permissions</span>-->
						<!--</a>-->
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				</div>
				<!--end:Menu sub-->
			</div>
			<!--end:Menu item-->
			
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('dashboard') ? 'here show' : '' }}">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('element-11', 'text-success fs-2') !!}</span>
					<span class="menu-title">BILLING AND REPORT</span>
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				<!--begin:Menu sub-->
				<div class="menu-sub menu-sub-accordion">
			
			<div class="menu-item">
						<!--begin:Menu link-->

						
						<a href="{{ route('taxpayers.all') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-44', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">TAXPAYERS</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					 
					<div class="menu-item">
						
						<!--begin:Menu link-->

						<a href="{{ route('invoices2.list') }}" class="menu-link">

							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('switch', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">INVOICE</span>
							</span>
						</a>
					</div>
					
				
					
					<div class="menu-item">
						<!--begin:Menu link-->

						<a href="{{ route('verify2') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-42', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">VERIFY RECEIPT</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					
						<div class="menu-item">
						<!--begin:Menu link-->

						<a href="{{ route('monthReport') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-42', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">REPORT</span>
							</span>
						</a>
						<!--end:Menu link-->
						<!--begin:Menu link-->

						<a href="{{ route('report') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-42', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">REPORT BY SUBHEAD</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>

					
					<div class="menu-item">
						<!--begin:Menu link-->

					
						<!--end:Menu link-->
					</div>
					
					</div>
					
					
					
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('dashboard') ? 'here show' : '' }}">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('element-11', 'text-success fs-2') !!}</span>
					<span class="menu-title">TCC</span>
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				<!--begin:Menu sub-->
				<!--<div class="menu-sub menu-sub-accordion">-->
					<!--begin:Menu item-->
				<!--	<div class="menu-item">-->
						<!--begin:Menu link-->
				<!--		<a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('tcc-form') }}">-->
				<!--			<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-38', 'text-success fs-2') !!}</span>-->
				<!--			<span class="menu-title">NEW</span>-->
				<!--		</a>-->
						<!--end:Menu link-->
				<!--	</div>-->
					<!--end:Menu item-->
				<!--</div>-->
				<!--<div class="menu-sub menu-sub-accordion">-->
					<!--begin:Menu item-->
				<!--	<div class="menu-item">-->
						<!--begin:Menu link-->
				<!--		<a class="menu-link {{ request()->routeIs('tcc-form') ? 'active' : '' }}" href="{{ route('tcc-form') }}">-->
				<!--			<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-38', 'text-success fs-2') !!}</span>-->
				<!--			<span class="menu-title">NEW TCC</span>-->
				<!--		</a>-->
						<!--end:Menu link-->
				<!--	</div>-->
					<!--end:Menu item-->
				<!--</div>-->
				<!--<div class="menu-sub menu-sub-accordion">-->
				
					<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link {{ request()->routeIs('TCCapprover') ? 'active' : '' }}" href="{{ route('TCCapprover') }}">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-38', 'text-success fs-2') !!}</span>
							<span class="menu-title">APPROVALS/PENDING</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				</div>
				<!--<div class="menu-sub menu-sub-accordion">-->
					<!--begin:Menu item-->
				<!--	<div class="menu-item">-->
						<!--begin:Menu link-->
				<!--		<a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('showTCC') }}">-->
				<!--			<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-36', 'text-success fs-2') !!}</span>-->
				<!--			<span class="menu-title">VIEW</span>-->
				<!--		</a>-->
						<!--end:Menu link-->
				<!--	</div>-->
					<!--end:Menu item-->
					
				<!--</div>-->
				<!--<div class="menu-sub menu-sub-accordion">-->
					<!--begin:Menu item-->
				<!--	<div class="menu-item">-->
						<!--begin:Menu link-->
				<!--		<a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('verifyTCC2') }}">-->
				<!--			<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-36', 'text-success fs-2') !!}</span>-->
				<!--			<span class="menu-title">VERIFY TCC</span>-->
				<!--		</a>-->
						<!--end:Menu link-->
				<!--	</div>-->
					<!--end:Menu item-->
					
				<!--</div>-->
				<!--end:Menu sub-->
			</div>
					
					
					
					@endif
					@if(auth()->user()->hasRole("developer"))
					
				<div class="menu-item">
						<!--begin:Menu link-->

						
						<a href="{{ route('client.dashboard') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-44', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">DASHBOARD</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					 
			<!--begin:Menu item-->
			<div class="menu-item pt-5">
				<!--begin:Menu content-->
				<div class="menu-content">
					<span class="menu-heading fw-bold text-uppercase fs-7">CATEGORY</span>
				</div>
				<!--end:Menu content-->
			</div>
			<!--end:Menu item-->

				
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('dashboard') ? 'here show' : '' }}">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('element-11', 'text-success fs-2') !!}</span>
					<span class="menu-title">TCC</span>
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				<!--begin:Menu sub-->
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('tcc-form') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">NEW</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				</div>
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('showTCC') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">VIEW</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				</div>
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('verifyTCC2') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">VERIFY TCC</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				</div>
				<!--end:Menu sub-->
			</div>
			
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('dashboard') ? 'here show' : '' }}">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('element-3', 'text-success fs-2') !!}</span>
					<span class="menu-title">BILLING AND REPORT</span>
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				
					<div class="menu-sub menu-sub-accordion">
						<!--begin:Menu link-->

						
						<a href="{{ route('taxpayers.all') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-4', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">TAXPAYERS</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
			
			
						<div class="menu-sub menu-sub-accordion">
					<!--<div class="menu-item">-->
						
						<!--begin:Menu link-->

						<a href="{{ route('invoices2.list') }}" class="menu-link">

							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('switch', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">INVOICE</span>
							</span>
						</a>
					</div>
					
						<!--<div class="menu-item">-->
							<div class="menu-sub menu-sub-accordion">
						<!--begin:Menu link-->

						<a href="{{ route('verify2') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-42', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">VERIFY RECEIPT</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					
					<!--<div class="menu-item">-->
						<div class="menu-sub menu-sub-accordion">
						<!--begin:Menu link-->

						<a href="{{ route('monthReport') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-15', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">REPORT</span>
							</span>
						</a>
						<!--end:Menu link-->
						<!--begin:Menu link-->

						<a href="{{ route('report') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-42', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">REPORT BY SUBHEAD</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					
					


					@endif
					@if(auth()->user()->hasRole("executive"))
						
					<div class="menu-item">
						<!--begin:Menu link-->

						
						<a href="{{ route('executive.dashboard') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-44', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">DASHBOARD</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					 
			<!--end:Menu item-->

					<div class="menu-item">
						
						<!--begin:Menu link-->

						<a href="{{ route('invoices2.list') }}" class="menu-link">

							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('switch', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">INVOICES</span>
							</span>
						</a>
					</div>
					
						<div class="menu-item">
						<!--begin:Menu link-->

						<a href="{{ route('verify2') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-18', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">VERIFY RECEIPT</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					
					<div class="menu-item">
						<!--begin:Menu link-->

						<a href="{{ route('report') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-42', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">REPORT BY SUBHEAD</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>


					@endif
					@if(auth()->user()->hasRole("management"))
						
					<div class="menu-item">
						<!--begin:Menu link-->

						
						<a href="{{ route('dashboard') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-44', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">DASHBOARD</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					 
			<!--end:Menu item-->

					<div class="menu-item">
						
						<!--begin:Menu link-->

						<a href="{{ route('invoices2.list') }}" class="menu-link">

							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('switch', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">INVOICES</span>
							</span>
						</a>
					</div>
					
						<div class="menu-item">
						<!--begin:Menu link-->

						<a href="{{ route('verify2') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-18', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">VERIFY RECEIPT</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					
					<div class="menu-item">
						<!--begin:Menu link-->

						<a href="{{ route('monthReport') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-42', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">REPORT</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>


					@endif
						@if(auth()->user()->hasRole("COLLECTION"))
						
						
			
				<!--<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('dashboard') ? 'here show' : '' }}">-->
				<!--begin:Menu link-->
				<!--<span class="menu-link">-->
					<!--<span class="menu-icon">{!! getIcon('element-3', 'text-success fs-2') !!}</span>-->
					<!--<span class="menu-title">BILLING AND REPORT</span>-->
				<!--	<span class="menu-arrow"></span>-->
				<!--</span>-->
				<!--end:Menu link-->
				
				
						<div class="menu-item">
						<!--begin:Menu link-->

						
						<a href="{{ route('dashboard') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-44', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">DASHBOARD</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					 
			<!--end:Menu item-->

					<div class="menu-item">
						
						<!--begin:Menu link-->

						<a href="{{ route('invoices2.list') }}" class="menu-link">

							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('switch', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">INVOICES</span>
							</span>
						</a>
					</div>
					
						<div class="menu-item">
						<!--begin:Menu link-->

						<a href="{{ route('verify2') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-15', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">VERIFY RECEIPT</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					
					<div class="menu-item">
						<!--begin:Menu link-->

						<a href="{{ route('monthReport') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-42', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">REPORT</span>
							</span>
						</a>
						<!--end:Menu link-->
						<!--begin:Menu link-->

						<a href="{{ route('report') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-42', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">REPORT BY SUBHEAD</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
                    <div class="menu-item">
						<!--begin:Menu link-->

						
						<a href="{{ route('taxpayers.all') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-44', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">TAXPAYERS</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>

					@endif
						@if(auth()->user()->hasRole("dueprocess"))
						
						
						<div class="menu-item">
						<!--begin:Menu link-->

						
						<a href="{{ route('client.dueprocess') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-44', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">DASHBOARD</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					 
			<!--begin:Menu item-->
			<div class="menu-item pt-5">
				<!--begin:Menu content-->
				<div class="menu-content">
					<span class="menu-heading fw-bold text-uppercase fs-7">CATEGORY</span>
				</div>
				<!--end:Menu content-->
			</div>
			<!--end:Menu item-->

				
					
			
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('dashboard') ? 'here show' : '' }}">
				<!--begin:Menu link-->
				<span class="menu-link">
					<!--<span class="menu-icon">{!! getIcon('element-3', 'text-success fs-2') !!}</span>-->
					<!--<span class="menu-title">BILLING AND REPORT</span>-->
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				
				
			
			
					
					
					
				
						
						
						
						<!-- Begining of DUE PROCESS-->
						
						
					<!--<div class="menu-item">-->
						<!--begin:Menu link-->

						
					<!--	<a href="{{ route('dashboard') }}" class="menu-link">-->
					<!--		<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-44', 'text-success fs-2') !!}</span>-->
					<!--		<span class="d-flex flex-column">-->
					<!--			<span class="fs-5 fw-semibold text-muted">DASHBOARD</span>-->
					<!--		</span>-->
					<!--	</a>-->
						<!--end:Menu link-->
					<!--</div>-->
					 
			<!--end:Menu item-->

					
					
					
					<div class="menu-item">
						<!--begin:Menu link-->

						<a href="{{ route('bureauReport') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-42', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">REPORT BY SUBHEAD</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->

						<a href="{{ route('monthBureau') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-42', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">REPORT</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
                    <div class="menu-item">
						<!--begin:Menu link-->

						
						<a href="{{ route('dueprocessInvoice.list') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-44', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">INVOICES</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					
				

					@endif
					
					
						@if(auth()->user()->hasRole("GOGIS"))
						
						
						<div class="menu-item">
						<!--begin:Menu link-->

						
						<a href="{{ route('gogis.dashboard') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-44', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">DASHBOARD</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					 
			<!--begin:Menu item-->
			<div class="menu-item pt-5">
				<!--begin:Menu content-->
				<div class="menu-content">
					<span class="menu-heading fw-bold text-uppercase fs-7">CATEGORY</span>
				</div>
				<!--end:Menu content-->
			</div>
			<!--end:Menu item-->

				
					
			
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('dashboard') ? 'here show' : '' }}">
				<!--begin:Menu link-->
				<span class="menu-link">
					<!--<span class="menu-icon">{!! getIcon('element-3', 'text-success fs-2') !!}</span>-->
					<!--<span class="menu-title">BILLING AND REPORT</span>-->
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				
				
			
			
					
					
					
				
						
						
					
					
					
					
					<div class="menu-item">
						<!--begin:Menu link-->

						<a href="{{ route('gogisReport') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-42', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">REPORT</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
                    <div class="menu-item">
						<!--begin:Menu link-->
						<a href="{{ route('gogisInvoice.list') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-44', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">INVOICES</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					
				

					@endif
					
					
					@if(auth()->user()->hasRole("COLLECTION"))
						
						
			
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('dashboard') ? 'here show' : '' }}">
				<!--begin:Menu link-->
				<span class="menu-link">
					<!--<span class="menu-icon">{!! getIcon('element-3', 'text-success fs-2') !!}</span>-->
					<!--<span class="menu-title">BILLING AND REPORT</span>-->
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				
				
						<div class="menu-item">
						<!--begin:Menu link-->

						
						<a href="{{ route('dashboard') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-44', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">DASHBOARD</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					 
			<!--end:Menu item-->

					<div class="menu-item">
						
						<!--begin:Menu link-->

						<a href="{{ route('gogisInvoice.list') }}" class="menu-link">

							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('switch', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">INVOICES</span>
							</span>
						</a>
					</div>
					
						<div class="menu-item">
						<!--begin:Menu link-->

						<a href="{{ route('verify2') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-15', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">VERIFY RECEIPT</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					
				
                    

					@endif
					
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('dashboard') ? 'here show' : '' }}">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('element-5', 'text-success fs-2') !!}</span>
					<span class="menu-title">USER SERVICES</span>
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
			
			
						<div class="menu-sub menu-sub-accordion">
					
						<!--<div class="menu-item">-->
						<!--begin:Menu link-->

						
						<a href="{{ route('taxpayers.index') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('abstract-2', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">USER TAXPAYERS</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>

					<!--<div class="menu-item">-->
					<div class="menu-sub menu-sub-accordion">
						<!--begin:Menu link-->
						<a href="{{ route('returns') }}" class="menu-link">
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('call', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">RETURNS</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					
					
					

					<!--<div class="menu-item">-->
					<div class="menu-sub menu-sub-accordion">
						
						<!--begin:Menu link-->

						<a href="{{ route('Userinvoices.list') }}" class="menu-link">

							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('switch', 'text-success fs-2') !!}</span>
							<span class="d-flex flex-column">
								<span class="fs-5 fw-semibold text-muted">USER INVOICES</span>
							</span>
						</a>
					</div>
					
					</div>
				<!--end:Menu sub-->
			</div>
				
					<div class="menu-item">
						<!--begin:Menu link-->
			
						<a class="button-ajax menu-link px-5" href="#" data-action="{{ route('logout') }}" data-method="post" data-csrf="{{ csrf_token() }}" data-reload="true">
           
							<!--<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3"></span>-->
							<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!! getIcon('logout-icon', 'text-success fs-2') !!}</span>
								<span class="fs-5 fw-semibold text-muted">SIGN OUT</span>
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
				<!-- <a class="menu-link {{ request()->routeIs('token') ? 'active' : '' }}" href="{{ route('token') }}">
					<span class="menu-icon">{!! getIcon('rocket', 'fs-2') !!}</span>
					<span class="menu-title">Generate Token</span>
				</a> -->
				
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<div class="menu-item">
				<!--begin:Menu link-->
				<!-- <a class="menu-link {{ request()->routeIs('rrr') ? 'active' : '' }}" href="{{ route('rrr') }}">
					<span class="menu-icon">{!! getIcon('rocket', 'fs-2') !!}</span>
					<span class="menu-title">Generate RRR</span>
				</a> -->
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->
				<!--begin:Menu item-->
				<div class="menu-item">
				<!--begin:Menu link-->
				<!-- <a class="menu-link {{ request()->routeIs('create') ? 'active' : '' }}" href="{{ route('create') }}">
					<span class="menu-icon">{!! getIcon('rocket', 'fs-2') !!}</span>
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
					<span class="menu-icon">{!! getIcon('code', 'fs-2') !!}</span>
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
