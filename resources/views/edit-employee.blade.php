@extends('layouts.app')

@push('page-css')
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
@endpush

@push('page-header')
<div class="col-sm-12">
	<h3 class="page-title">Add Employee</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
		<li class="breadcrumb-item active">Add Employee</li>
	</ul>
</div>
@endpush

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body custom-edit-service">
				
		
			<form method="post" enctype="multipart/form-data" action="{{route('edit-employee',$employee)}}">
				@csrf
				@method("PUT")
				<div class="service-fields mb-3">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Name<span class="text-danger">*</span></label>
								<input class="form-control" type="text" value="{{$employee->name}}" name="name">
							</div>
						</div>
						<div class="col-lg-6">
							<label>Email<span class="text-danger">*</span></label>
							<input class="form-control" type="text" value="{{$employee->email}}" name="email" >
						</div>
					</div>
				</div>

				<div class="service-fields mb-3">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Phone<span class="text-danger">*</span></label>
								<input class="form-control" type="text" value="{{$employee->phone}}" name="phone">
							</div>
						</div>
						<div class="col-lg-6">
							<label>Date de naissance<span class="text-danger">*</span></label>
							<input class="form-control" type="date" value="{{$employee->brith_date}}" name="brith_date">
						</div>
					</div>
				</div>

				<div class="service-fields mb-3">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Address <span class="text-danger">*</span></label>
								<input type="text" name="address" value="{{$employee->address}}" class="form-control">
							</div>
						</div>
					</div>
				</div>	
					
				
				
				<div class="submit-section">
					<button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Submit</button>
				</div>
			</form>


			</div>
		</div>
	</div>			
</div>
@endsection	

@push('page-js')
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endpush

