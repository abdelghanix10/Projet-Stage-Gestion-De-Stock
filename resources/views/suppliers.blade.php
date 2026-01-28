@extends('layouts.app')

@push('page-css')
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush

@push('page-header')
<div class="col-sm-7 col-auto">
	<h3 class="page-title">Supplier</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
		<li class="breadcrumb-item active">Supplier</li>
	</ul>
</div>
<div class="col-sm-5 col">
	<a href="{{route('add-supplier')}}" class="btn btn-primary float-right mt-2">Add New</a>
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
								<th>Company</th>
								<th class="action-btn">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($suppliers as $supplier)
							<tr>
								<td>										
								    <h2 class="table-avatar">
										@if(!empty($supplier->image))
										<span class="avatar avatar-sm mr-2">
											<img class="avatar-img" src="{{asset('storage/suppliers/'.$supplier->image)}}" alt="supplier image">
										</span>
										@endif
										{{$supplier->name}}
									</h2>
							    </td>
								<td>{{$supplier->phone}}</td>
								<td>{{$supplier->email}}</td>
								<td>{{$supplier->address}}</td>
								<td>{{$supplier->company}}</td>
								<td>
									<div class="actions">
									<a class="btn btn-sm bg-primary-light" href="{{ route('supplier-display', $supplier->id) }}">
											<i class="fa fa-eye"></i> Show
										</a>
										<a class="btn btn-sm bg-success-light" href="{{route('edit-supplier',$supplier)}}">
											<i class="fe fe-pencil"></i> Edit
										</a>
										<a data-id="{{$supplier->id}}" href="javascript:void(0);" class="btn btn-sm bg-danger-light deletebtn" data-toggle="modal">
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

<x-modals.delete :route="'suppliers'" :title="'Supplier'" />

@endsection	

@push('page-js')

<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endpush

