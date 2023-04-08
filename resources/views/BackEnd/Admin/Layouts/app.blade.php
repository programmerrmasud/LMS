<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LMS-Aadeez</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('BackEnd/assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('BackEnd/assets/css/minified/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('BackEnd/assets/css/minified/core.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('BackEnd/assets/css/minified/components.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('BackEnd/assets/css/minified/colors.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/plugins/loaders/pace.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/core/libraries/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/core/libraries/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/plugins/loaders/blockui.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/plugins/ui/moment/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/plugins/pickers/daterangepicker.js') }}"></script>

	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/core/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/pages/dashboard.js') }}"></script>
	<!-- Data table sorting Js -->
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/plugins/forms/selects/select2.min.js') }}"></script>
	
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/core/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/pages/datatables_sorting.js') }}"></script>
</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="{{ ('BackEnd/assets/images/logo_light.png') }}" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="visible-xs-inline-block position-right">Messages</span>
						<span class="badge bg-warning-400">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-content width-350">
						<div class="dropdown-content-heading">
							Messages
							<ul class="icons-list">
								<li><a href="#"><i class="icon-compose"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body">
							<li class="media">
								<div class="media-left">
									<img src="{{ ('BackEnd/assets/images/placeholder.jpg') }}" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">5</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">James Alexander</span>
										<span class="media-annotation pull-right">04:58</span>
									</a>

									<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<img src="{{ ('BackEnd/assets/images/placeholder.jpg') }}" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">4</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Margo Baker</span>
										<span class="media-annotation pull-right">12:16</span>
									</a>

									<span class="text-muted">That was something he was unable to do because...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="{{ ('BackEnd/assets/images/placeholder.jpg') }}" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Jeremy Victorino</span>
										<span class="media-annotation pull-right">22:48</span>
									</a>

									<span class="text-muted">But that would be extremely strained and suspicious...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="{{ ('BackEnd/assets/images/placeholder.jpg') }}" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Beatrix Diaz</span>
										<span class="media-annotation pull-right">Tue</span>
									</a>

									<span class="text-muted">What a strenuous career it is that I've chosen...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="{{ ('BackEnd/assets/images/placeholder.jpg') }}" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Richard Vango</span>
										<span class="media-annotation pull-right">Mon</span>
									</a>
									
									<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
								</div>
							</li>
						</ul>

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{ asset('BackEnd/assets/images/placeholder.jpg') }}" alt="">
						<span>M.H. Aadeez</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
						<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>
						{{-- <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li> --}}
						<li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="{{ asset('BackEnd/assets/images/placeholder.jpg') }}" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">M.H. Aadeez</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> Programmer
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="active"><a href="{{ route('dashboard') }}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li class=""><a href="{{ route('courseIndex') }}"><i class="icon-book3"></i> <span>Course</span></a></li>
								<li class=""><a href="{{ route('bookIndex') }}"><i class=" icon-book"></i> <span>Books</span></a></li>

								<li>
									<a href="#"><i class="icon-user"></i> <span>Students</span></a>
									<ul>
										<li><a href="{{ route('bscIndex') }}">BSc Nursing</a></li>
										<li><a href="layout_navbar_fixed.html">Diploma Nursing</a></li>
										<li><a href="layout_navbar_fixed.html">JU University</a></li>			
									</ul>
								</li>
								<!-- /page kits -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					{{-- <div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div> --}}

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Dashboard</li>
						</ul>

						{{-- <ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul> --}}
					</div>
				</div>
				<!-- /page header -->

                <!-- Main Content Start  -->


                @yield('content')

                <!-- Main Content End  -->
   
				<!-- Content area -->
				<div class="content">
					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2023. <a href="#">Learning Managment Systm</a> by <a href="https://www.devmasud.me" target="_blank">Developer Masud</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
