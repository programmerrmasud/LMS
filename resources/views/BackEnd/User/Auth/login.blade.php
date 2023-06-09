@extends('BackEnd.User.Layouts.app')
@section('title','Login Page')
@section('content')
	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Simple login form -->
					<form action="{{ route('AdminLogin') }}" method="POST">
						@csrf
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
								<h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							@error('email')
								<strong style="color:red;">{{ $message }}</strong>
							@enderror
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							@error('password')
								<strong style="color:red;">{{ $message }}</strong>
							@enderror
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
								<button class="btn btn-success btn-block" >
                                    <a href="{{ route('AdminGetRegister') }}" style="color:rgb(244, 244, 247);">Create an Account ? <i class="icon-circle-right2 position-right"></i></a>
                                </button>
							</div>

							<div class="text-center">
								<a href="login_password_recover.html">Forgot password?</a>
							</div>
						</div>
					</form>
					<!-- /simple login form -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2023. <a href="#">Learning Managment System</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">M.H. Aadeez</a>
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

@endsection
