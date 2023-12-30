@extends('layouts.menu')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card" style="margin-top:50px">
	<div class="card-header">Add Staff</div>
	<div class="card-body">
		<form method="post" action="{{ route('staffs.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Staff Name</label>
				<div class="col-sm-10">
					<input type="text" name="staff_name" class="form-control" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Department ID</label>
				<div class="col-sm-10"> 
					<input type="number" name="dept_id" class="form-control" /> 
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Staff Email</label>
				<div class="col-sm-10"> 
					<input type="text" name="email" class="form-control" /> 
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Staff Mobile NO.</label>
				<div class="col-sm-10"> 
					<input type="number" name="mobile_number" class="form-control" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Joining Date</label>
				<div class="col-sm-10"> 
					<input type="date" name="joining_date" class="form-control" /> 
				</div>
			</div>
			
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection