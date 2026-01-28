@extends('layouts.app')

@push('page-css')
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush

@push('page-header')
<div class="col-sm-7 col-auto">
	<h3 class="page-title">Employee</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
		<li class="breadcrumb-item active">Employee</li>
	</ul>
</div>
<div class="col-sm-5 col">
	<a href="{{route('add-employee')}}" class="btn btn-primary float-right mt-2">Add New</a>
</div>
@endpush

@section('content')
<div class="row">
	<div class="col-md-12">
	
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="datatable-export" class="table table-hover table-center mb-0">
						<thead>
							<tr>
								<th>Name</th>
								<th>Phone</th>
								<th>Email</th>
								<th>Address</th>
								<th>Date de naissance</th>
								<th class="action-btn">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($employees as $employee)
							<tr>
								<td>{{$employee->name}}</td>
								<td>{{$employee->phone}}</td>
								<td>{{$employee->email}}</td>
								<td>{{$employee->address}}</td>
								<td>{{date_format(date_create($employee->brith_date),"d M, Y")}}</td>
								<td>
									<div class="actions">                    
									<a class="btn btn-sm bg-primary-light" href="{{ route('employee-display', $employee->id) }}">
											<i class="fa fa-eye"></i> Show
										</a>
										<a class="btn btn-sm bg-success-light" href="{{route('edit-employee',$employee)}}">
											<i class="fe fe-pencil"></i> Edit
										</a>
										<a data-id="{{$employee->id}}" href="javascript:void(0);" class="btn btn-sm bg-danger-light deletebtn" data-toggle="modal">
											<i class="fe fe-trash"></i> Delete
										</a>
										
									</div>
								</td>
							</tr>
							@endforeach							
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
	</div>
</div>
<x-modals.delete :route="'employees'" :title="'Employee'" />
@endsection	

@push('page-js')
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endpush

