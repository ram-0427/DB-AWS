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
	<div class="card-header">Add Student</div>
	<div class="card-body">
		<form method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Student Name</label>
				<div class="col-sm-10">
					<input type="text" name="student_name" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Registration NO</label>
				<div class="col-sm-10"> 
					<input type="text" name="registration_no" class="form-control" /> 
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Student Email</label>
				<div class="col-sm-10"> 
					<input type="email" name="student_email" class="form-control" />
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Student PhoneNO</label>
				<div class="col-sm-10"> 
					<input type="number" name="student_phoneno" class="form-control" /> 
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Course ID</label>
				<div class="col-sm-10"> 
					<input type="number" name="course_id" class="form-control" /> 
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Course Fees</label>
				<div class="col-sm-10"> 
					<input type="number" name="course_fee" class="form-control" /> 
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Due Amount</label>
				<div class="col-sm-10"> 
					<input type="text" name="due_amount" class="form-control" /> 
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Second Payment</label>
				<div class="col-sm-10"> 
					<input type="text" name="second_payment" class="form-control" /> 
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Discount</label>
				<div class="col-sm-10"> 
					<input type="number" name="discount" class="form-control" /> 
				</div>
			</div>
			
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection