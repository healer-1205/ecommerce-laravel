@extends('admin.layout')

@section('content')

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
	<div class="breadcrumb-title pe-3">User Profile</div>
	<div class="ps-3">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb mb-0 p-0">
				<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">{{ auth()->user()->name }} Profile</li>
			</ol>
		</nav>
	</div>
</div>
<!--end breadcrumb-->
<div class="container">
	<div class="main-body">
		<div class="row">
			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<div class="d-flex flex-column align-items-center text-center">
							<img src="{{asset('images/avatars/avatar-2.png')}}" alt="Admin" class="rounded-circle p-1 bg-primary"
								width="110">
							<div class="mt-3">
								<h4>{{ auth()->user()->name }}</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="card">
					<div class="card-body">
						<form action="{{route('admin.profile.update', auth()->user()->id)}}" method="POST">
							@csrf
							@method('PATCH')
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9">
									<input type="text" name="name" class="form-control" value="{{auth()->user()->name}}" required />
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9">
									<input type="email" name="email" class="form-control" value="{{auth()->user()->email}}" disabled />
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Change Password</h6>
								</div>
								<div class="col-sm-9">
									<input type="password" name="password" id="password" class="form-control" value="" required />
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Password Confirm</h6>
								</div>
								<div class="col-sm-9">
									<input type="password" name="confirm_password" class="form-control" id="confirm_password" value=""
										required />
									@if (Session::has('invalid'))
									<small class="text-danger" id="wrong_password">{{ Session::get('invalid') }}</small>
									@endif
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9">
									<input type="submit" id="submit" class="btn btn-light px-4" value="Save Changes" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection