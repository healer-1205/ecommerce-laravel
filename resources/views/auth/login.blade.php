@extends('auth.layout')

@section('content')

<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="mb-4 text-center">
							<img src="{{ asset('images/logo-img.png')}}" width="180" alt="" />
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Sign in</h3>
										<p>Don't have an account yet? <a href="/register">Sign up here</a>
										</p>
									</div>
									<div class="d-grid">
										<a class="btn my-4 shadow-sm btn-light" href="{{ route('google.login') }}"> <span class="d-flex justify-content-center align-items-center">
												<img class="me-2" src="{{ asset('images/icons/search.svg')}}" width="16" alt="Image Description">
												<span>Sign in with Google</span>
											</span>
										</a>
									</div>
									<div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
										<hr />
									</div>
									<div class="form-body">
										<form class="row g-3" method="POST" action="{{ route('login') }}">
											@csrf
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" 
													class="form-control {{ Session::get('email_invalid') ? 'is-invalid' : '' }}" 
													id="inputEmailAddress" placeholder="Email Address" name="email">
												@if (Session::has('email_invalid'))
												<small style="color:red"> {{ Session::get('email_invalid') }}</small>
												@endif
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Enter Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0  {{ Session::get('password_invalid') ? 'is-invalid' : '' }}" id="inputChoosePassword" value="12345678" placeholder="Enter Password" name="password"> 
													<a href="javascript:;" class="input-group-text bg-transparent">
														<i class='bx bx-hide'></i>
													</a>
												</div>
												@if (Session::has('password_invalid'))
												<small style="color:red"> {{ Session::get('password_invalid') }}</small>
												@endif
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end"> <a href="/forgot-password">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-light"><i class="bx bxs-lock-open"></i>Sign in</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
		
@endsection