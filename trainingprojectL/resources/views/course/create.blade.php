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
	<div class="card-header">Add Course</div>
	<div class="card-body">
		<form method="post" action="{{ route('courses.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Course Name</label>
				<div class="col-sm-10">
					<input type="text" name="course_name" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Course Fee </label>
				<div class="col-sm-10"> 
					<input type="number" name="course_fee" class="form-control" /> 
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Course Content </label>
				<div class="col-sm-10"> 
					<input type="text" name="course_content" class="form-control" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Course Description </label>
				<div class="col-sm-10"> 
					<input type="text" name="course_description" class="form-control" />
				</div>
			</div>
			
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection