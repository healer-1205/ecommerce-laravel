<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{-- csrf token --}}
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!--favicon-->
	<link rel="icon" href="{{ asset('images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
	<link href="{{ asset('plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{ asset('plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{ asset('js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
	<link href="{{ asset('css/icons.css')}}" rel="stylesheet">

	<title>Dashtreme</title>
</head>

<body class="bg-theme bg-theme1">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('images/logo-img.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Dashtreme</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li class={{$selected == "Dashboard" ? "mm-active" : ""}}>
					<a href="{{route('admin.dashboard')}}">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				<li class={{$selected == "Users" ? "mm-active" : ""}}>
					<a href="{{route('admin.users.index')}}">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">Users</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Application</div>
					</a>
					<ul>
						<li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>Email</a>
						</li>
						<li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Chat Box</a>
						</li>
						<li> <a href="app-file-manager.html"><i class="bx bx-right-arrow-alt"></i>File Manager</a>
						</li>
						<li> <a href="app-contact-list.html"><i class="bx bx-right-arrow-alt"></i>Contatcs</a>
						</li>
						<li> <a href="app-to-do.html"><i class="bx bx-right-arrow-alt"></i>Todo List</a>
						</li>
						<li> <a href="app-invoice.html"><i class="bx bx-right-arrow-alt"></i>Invoice</a>
						</li>
						<li> <a href="app-fullcalender.html"><i class="bx bx-right-arrow-alt"></i>Calendar</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-cart'></i>
						</div>
						<div class="menu-title">eCommerce</div>
					</a>
					<ul>
						<li> <a href="ecommerce-products.html"><i class="bx bx-right-arrow-alt"></i>Products</a>
						</li>
						<li> <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Product Details</a>
						</li>
						<li> <a href="ecommerce-add-new-products.html"><i class="bx bx-right-arrow-alt"></i>Add New Products</a>
						</li>
						<li> <a href="ecommerce-orders.html"><i class="bx bx-right-arrow-alt"></i>Orders</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
						</div>
						<div class="menu-title">Components</div>
					</a>
					<ul>
						<li> <a href="component-alerts.html"><i class="bx bx-right-arrow-alt"></i>Alerts</a>
						</li>
						<li> <a href="component-accordions.html"><i class="bx bx-right-arrow-alt"></i>Accordions</a>
						</li>
						<li> <a href="component-badges.html"><i class="bx bx-right-arrow-alt"></i>Badges</a>
						</li>
						<li> <a href="component-buttons.html"><i class="bx bx-right-arrow-alt"></i>Buttons</a>
						</li>
						<li> <a href="component-cards.html"><i class="bx bx-right-arrow-alt"></i>Cards</a>
						</li>
						<li> <a href="component-carousels.html"><i class="bx bx-right-arrow-alt"></i>Carousels</a>
						</li>
						<li> <a href="component-list-groups.html"><i class="bx bx-right-arrow-alt"></i>List Groups</a>
						</li>
						<li> <a href="component-media-object.html"><i class="bx bx-right-arrow-alt"></i>Media Objects</a>
						</li>
						<li> <a href="component-modals.html"><i class="bx bx-right-arrow-alt"></i>Modals</a>
						</li>
						<li> <a href="component-navs-tabs.html"><i class="bx bx-right-arrow-alt"></i>Navs & Tabs</a>
						</li>
						<li> <a href="component-navbar.html"><i class="bx bx-right-arrow-alt"></i>Navbar</a>
						</li>
						<li> <a href="component-paginations.html"><i class="bx bx-right-arrow-alt"></i>Pagination</a>
						</li>
						<li> <a href="component-popovers-tooltips.html"><i class="bx bx-right-arrow-alt"></i>Popovers & Tooltips</a>
						</li>
						<li> <a href="component-progress-bars.html"><i class="bx bx-right-arrow-alt"></i>Progress</a>
						</li>
						<li> <a href="component-spinners.html"><i class="bx bx-right-arrow-alt"></i>Spinners</a>
						</li>
						<li> <a href="component-notifications.html"><i class="bx bx-right-arrow-alt"></i>Notifications</a>
						</li>
						<li> <a href="component-avtars-chips.html"><i class="bx bx-right-arrow-alt"></i>Avatrs & Chips</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Content</div>
					</a>
					<ul>
						<li> <a href="content-grid-system.html"><i class="bx bx-right-arrow-alt"></i>Grid System</a>
						</li>
						<li> <a href="content-typography.html"><i class="bx bx-right-arrow-alt"></i>Typography</a>
						</li>
						<li> <a href="content-text-utilities.html"><i class="bx bx-right-arrow-alt"></i>Text Utilities</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"> <i class="bx bx-donate-blood"></i>
						</div>
						<div class="menu-title">Icons</div>
					</a>
					<ul>
						<li> <a href="icons-line-icons.html"><i class="bx bx-right-arrow-alt"></i>Line Icons</a>
						</li>
						<li> <a href="icons-boxicons.html"><i class="bx bx-right-arrow-alt"></i>Boxicons</a>
						</li>
						<li> <a href="icons-feather-icons.html"><i class="bx bx-right-arrow-alt"></i>Feather Icons</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Forms & Tables</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
						</div>
						<div class="menu-title">Forms</div>
					</a>
					<ul>
						<li> <a href="form-elements.html"><i class="bx bx-right-arrow-alt"></i>Form Elements</a>
						</li>
						<li> <a href="form-input-group.html"><i class="bx bx-right-arrow-alt"></i>Input Groups</a>
						</li>
						<li> <a href="form-layouts.html"><i class="bx bx-right-arrow-alt"></i>Forms Layouts</a>
						</li>
						<li> <a href="form-validations.html"><i class="bx bx-right-arrow-alt"></i>Form Validation</a>
						</li>
						<li> <a href="form-wizard.html"><i class="bx bx-right-arrow-alt"></i>Form Wizard</a>
						</li>
						<li> <a href="form-text-editor.html"><i class="bx bx-right-arrow-alt"></i>Text Editor</a>
						</li>
						<li> <a href="form-file-upload.html"><i class="bx bx-right-arrow-alt"></i>File Upload</a>
						</li>
						<li> <a href="form-date-time-pickes.html"><i class="bx bx-right-arrow-alt"></i>Date Pickers</a>
						</li>
						<li> <a href="form-select2.html"><i class="bx bx-right-arrow-alt"></i>Select2</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-grid-alt"></i>
						</div>
						<div class="menu-title">Tables</div>
					</a>
					<ul>
						<li> <a href="table-basic-table.html"><i class="bx bx-right-arrow-alt"></i>Basic Table</a>
						</li>
						<li> <a href="table-datatable.html"><i class="bx bx-right-arrow-alt"></i>Data Table</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Pages</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-lock"></i>
						</div>
						<div class="menu-title">Authentication</div>
					</a>
					<ul>
						<li> <a href="authentication-signin.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign In</a>
						</li>
						<li> <a href="authentication-signup.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign Up</a>
						</li>
						<li> <a href="authentication-signin-with-header-footer.html" target="_blank"><i
									class="bx bx-right-arrow-alt"></i>Sign In with Header & Footer</a>
						</li>
						<li> <a href="authentication-signup-with-header-footer.html" target="_blank"><i
									class="bx bx-right-arrow-alt"></i>Sign Up with Header & Footer</a>
						</li>
						<li> <a href="authentication-forgot-password.html" target="_blank"><i
									class="bx bx-right-arrow-alt"></i>Forgot Password</a>
						</li>
						<li> <a href="authentication-reset-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Reset
								Password</a>
						</li>
						<li> <a href="authentication-lock-screen.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Lock
								Screen</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="timeline.html">
						<div class="parent-icon"> <i class="bx bx-video-recording"></i>
						</div>
						<div class="menu-title">Timeline</div>
					</a>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-error"></i>
						</div>
						<div class="menu-title">Errors</div>
					</a>
					<ul>
						<li> <a href="errors-404-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>404 Error</a>
						</li>
						<li> <a href="errors-500-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>500 Error</a>
						</li>
						<li> <a href="errors-coming-soon.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Coming Soon</a>
						</li>
						<li> <a href="error-blank-page.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Blank Page</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="faq.html">
						<div class="parent-icon"><i class="bx bx-help-circle"></i>
						</div>
						<div class="menu-title">FAQ</div>
					</a>
				</li>
				<li>
					<a href="pricing-table.html">
						<div class="parent-icon"><i class="bx bx-diamond"></i>
						</div>
						<div class="menu-title">Pricing</div>
					</a>
				</li>
				<li class="menu-label">Charts & Maps</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-line-chart"></i>
						</div>
						<div class="menu-title">Charts</div>
					</a>
					<ul>
						<li> <a href="charts-apex-chart.html"><i class="bx bx-right-arrow-alt"></i>Apex</a>
						</li>
						<li> <a href="charts-chartjs.html"><i class="bx bx-right-arrow-alt"></i>Chartjs</a>
						</li>
						<li> <a href="charts-highcharts.html"><i class="bx bx-right-arrow-alt"></i>Highcharts</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-map-alt"></i>
						</div>
						<div class="menu-title">Maps</div>
					</a>
					<ul>
						<li> <a href="map-google-maps.html"><i class="bx bx-right-arrow-alt"></i>Google Maps</a>
						</li>
						<li> <a href="map-vector-maps.html"><i class="bx bx-right-arrow-alt"></i>Vector Maps</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Others</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-menu"></i>
						</div>
						<div class="menu-title">Menu Levels</div>
					</a>
					<ul>
						<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level One</a>
							<ul>
								<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Two</a>
									<ul>
										<li> <a href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Three</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="https://codervent.com/dashtreme/documentation/index.html" target="_blank">
						<div class="parent-icon"><i class="bx bx-folder"></i>
						</div>
						<div class="menu-title">Documentation</div>
					</a>
				</li>
				<li>
					<a href="https://themeforest.net/user/codervent" target="_blank">
						<div class="parent-icon"><i class="bx bx-support"></i>
						</div>
						<div class="menu-title">Support</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span
								class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#"> <i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button"
									data-bs-toggle="dropdown" aria-expanded="false"> <i class='bx bx-category'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div class="row row-cols-3 g-3 p-3">
										<div class="col text-center">
											<div class="app-box mx-auto"><i class='bx bx-group'></i>
											</div>
											<div class="app-title">Teams</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto"><i class='bx bx-atom'></i>
											</div>
											<div class="app-title">Projects</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto"><i class='bx bx-shield'></i>
											</div>
											<div class="app-title">Tasks</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto"><i class='bx bx-notification'></i>
											</div>
											<div class="app-title">Feeds</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto"><i class='bx bx-file'></i>
											</div>
											<div class="app-title">Files</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto"><i class='bx bx-filter-alt'></i>
											</div>
											<div class="app-title">Alerts</div>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button"
									data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class="bx bx-group"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
															ago</span></h6>
													<p class="msg-info">5 new user registered</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class="bx bx-cart-alt"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
															ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class="bx bx-file"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
															ago</span></h6>
													<p class="msg-info">The pdf files generated</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class="bx bx-send"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
															ago</span></h6>
													<p class="msg-info">5.1 min avarage time response</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class="bx bx-home-circle"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span class="msg-time float-end">2 hrs ago</span>
													</h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class="bx bx-message-detail"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
															ago</span></h6>
													<p class="msg-info">New customer comments recived</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class='bx bx-check-square'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
															ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class='bx bx-user-pin'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
															ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify"><i class='bx bx-door-open'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
															ago</span></h6>
													<p class="msg-info">45% less alerts last 4 weeks</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Notifications</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button"
									data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-comment'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Messages</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('images/avatars/avatar-1.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
															ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('images/avatars/avatar-2.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
															sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('images/avatars/avatar-3.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8 min
															ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('images/avatars/avatar-4.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
															min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('images/avatars/avatar-5.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22 min
															ago</span></h6>
													<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('images/avatars/avatar-6.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2 hrs
															ago</span></h6>
													<p class="msg-info">The passage is attributed to an unknown</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('images/avatars/avatar-7.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">James Caviness <span class="msg-time float-end">4 hrs
															ago</span></h6>
													<p class="msg-info">The point of using Lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('images/avatars/avatar-8.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
															ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('images/avatars/avatar-9.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">David Buckley <span class="msg-time float-end">2 hrs
															ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('images/avatars/avatar-10.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2 days
															ago</span></h6>
													<p class="msg-info">If you are going to use a passage</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('images/avatars/avatar-11.png')}}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 days
															ago</span></h6>
													<p class="msg-info">All the Lorem Ipsum generators</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Messages</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button"
							data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{ asset('images/avatars/avatar-2.png')}}" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">{{ auth()->user()->name }}</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="{{route('admin.profile.index')}}"><i
										class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i
										class='bx bx-home-circle'></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i
										class='bx bx-dollar-circle'></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li>
								<form action="{{ route('logout') }}" method="POST" id="logout-form">
									@csrf
									<a class="dropdown-item" href="javascript:;"
										onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
										<i class='bx bx-log-out-circle'></i><span>Logout</span>
									</a>
								</form>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				@yield('content')
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr />
			<p class="mb-0">Gaussian Texture</p>
			<hr>

			<ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			</ul>
			<hr>
			<p class="mb-0">Gradient Background</p>
			<hr>

			<ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			</ul>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{ asset('js/jquery.min.js')}}"></script>
	<script src="{{ asset('plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{ asset('plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{ asset('plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{ asset('plugins/chartjs/chart.min.js')}}"></script>
	<script src="{{ asset('plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
	<script src="{{ asset('plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{ asset('plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{ asset('plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
	<script src="{{ asset('plugins/jquery-knob/excanvas.js')}}"></script>
	<script src="{{ asset('plugins/jquery-knob/jquery.knob.js')}}"></script>
	<script src="{{ asset('plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
	<script>
		$(function() {
			$(".knob").knob();
		});
	</script>
	<script src="{{ asset('js/index.js')}}"></script>
	<!--app JS-->
	<script src="{{ asset('js/app.js')}}"></script>
	@stack('extra-scripts')
</body>

</html>