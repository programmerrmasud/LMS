<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>themelock.com - Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

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
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/plugins/forms/wizards/steps.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/plugins/forms/selects/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/core/libraries/jasny_bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/plugins/forms/validation/validate.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/plugins/extensions/cookie.js') }}"></script>

	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/core/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('BackEnd/assets/js/pages/wizard_steps.js') }}"></script>
	<!-- /theme JS files -->

</head>


<body>



	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

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
