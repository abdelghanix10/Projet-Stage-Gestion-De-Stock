@extends('layouts.app')

@push('page-css')
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
@endpush

@push('page-header')
<div class="col-sm-12">
	<h3 class="page-title">Edit Product</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
		<li class="breadcrumb-item active">Edit Product</li>
	</ul>
</div>
@endpush


@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body custom-edit-service">
				
				<form method="post" enctype="multipart/form-data" autocomplete="off" action="{{route('edit-purchase',$purchase)}}">
					@csrf
					@method("PUT")
					<div class="service-fields mb-3">
						<div class="row">
							<div class="col-lg-4">
								<div class="form-group">
									<label>Product Name<span class="text-danger">*</span></label>
									<input class="form-control" type="text" value="{{$purchase->name}}" name="name" >
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Category <span class="text-danger">*</span></label>
									<select class="select2 form-select form-control" name="category"> 
										@foreach ($categories as $category)
											<option @if($purchase->category->id == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Supplier <span class="text-danger">*</span></label>
									<select class="select2 form-select form-control" name="supplier"> 
										@foreach ($suppliers as $supplier)
											<option @if($purchase->supplier->id == $supplier->id) selected @endif value="{{$supplier->id}}">{{$supplier->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
					</div>
					
					<div class="service-fields mb-3">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Price<span class="text-danger">*</span></label>
									<input class="form-control" value="{{$purchase->price}}" type="text" name="price">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label>Quantity<span class="text-danger">*</span></label>
									<input class="form-control" value="{{$purchase->quantity}}" type="text" name="quantity">
								</div>
							</div>
						</div>
					</div>

					<div class="service-fields mb-3">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Date d'Ajout<span class="text-danger">*</span></label>
									<input class="form-control" value="{{$purchase->add_date}}" type="date" name="add_date">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label>Product Image</label>
									<input type="file" name="image" value="{{$purchase->image}}" class="form-control">
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="submit-section">
						<button class="btn btn-primary submit-btn" type="submit" >Submit</button>
					</div>
				</form>

			</div>
		</div>
	</div>			
</div>
@endsection

@push('page-js')
	<script src="{{asset('assets/js/moment.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endpush

