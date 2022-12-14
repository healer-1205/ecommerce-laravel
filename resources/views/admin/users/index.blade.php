@extends('admin.layout')

@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
	<div class="breadcrumb-title pe-3">Users</div>
	<div class="ps-3">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb mb-0 p-0">
				<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-user"></i></a>
				</li>
			</ol>
		</nav>
	</div>
</div>

<h6 class="mb-0 text-uppercase">Customer Data Table</h6>
<hr />
<div class="card">
	<div class="card-body">
		<div class="table-responsive">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Role</th>
						<th>Avatar</th>
						<th>Shipping Address</th>
						<th>IP</th>
						<th>Country</th>
						<th>User Agent</th>
						<th>Device</th>
						<th>Referee</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $user)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->role}}</td>
						<td>{{$user->avatar}}</td>
						<td>{{$user->shipping_address}}</td>
						<td>{{$user->ip}}</td>
						<td>{{$user->country}}</td>
						<td>{{$user->user_agent}}</td>
						<td>{{$user->device}}</td>
						<td>{{$user->referee}}</td>
						<td>
							<div class="rox">
								<div class="col text-center">
									<a href="{{route('admin.users.show', $user->id)}}"><i class='bx bx-show me-0'></i></a>
								</div>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Role</th>
						<th>Avatar</th>
						<th>Shipping Address</th>
						<th>IP</th>
						<th>Country</th>
						<th>User Agent</th>
						<th>Device</th>
						<th>Referee</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>

@push('extra-scripts')
<script>
	$(document).ready(function() {
	  $('#example').DataTable()
	})
</script>
<script>
	$(document).ready(function() {
		var table = $('#example2').DataTable( {
			lengthChange: false,
			buttons: [ 'copy', 'excel', 'pdf', 'print']
		} )
		
		table.buttons().container()
			.appendTo( '#example2_wrapper .col-md-6:eq(0)' )
	})
</script>
@endpush
@endsection