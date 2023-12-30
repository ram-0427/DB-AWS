@extends('layouts.app')

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

<div class="card">
	<div class="card-header">Add Batch</div>
	<div class="card-body">
		<form method="post" action="{{ route('batches.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Batch Name</label>
				<div class="col-sm-10">
					<input type="text" name="batch_name" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Course ID</label>
				<div class="col-sm-10"> 
					<input type="number" name="course_id" class="form-control" /> 
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Start Date</label>
				<div class="col-sm-10"> 
					<input type="date" name="startdate" class="form-control" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">End Date</label>
				<div class="col-sm-10"> 
					<input type="date" name="enddate" class="form-control" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Faculty ID</label>
				<div class="col-sm-10"> 
					<input type="number" name="faculty_id" class="form-control" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Fees</label>
				<div class="col-sm-10"> 
					<input type="number" name="fees" class="form-control" />
				</div>
			</div>
			
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection