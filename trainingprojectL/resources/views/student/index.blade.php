@extends('layouts.app')

@section('content') 

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>
  
@endif
 
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Student Details</b></b></div>
			<div class="col col-md-6">
				<a href="{{ route('students.create') }}" class="btn btn-success btn-sm float-end">Add Student</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Student Id</th>
				<th>Student Name</th>
				<th>Registration NO.</th>
				<th>Student Email</th>
                <th>Student PhoneNO</th>
                <th>Date Registration</th>
                <th>Course ID</th>
                <th>Course Fee</th>
                <th>Due Amount</th>
                <th>Second Payment</th>
                <th>Discount</th>
				<th>Action</th>
			</tr>
			@if(count($students) > 0)

				@foreach($students as $student)
 
					<tr>
						<td>{{ $student->student_id }}</td>
						<td>{{ $student->student_name }}</td>
						<td>{{ $student->registration_no }}</td>
						<td>{{ $student->student_email }}</td>
                        <td>{{ $student->student_phoneno }}</td>
                        <td>{{ $student->date_registration }}</td>
						<td>{{ $student->course_id }}</td>
						<td>{{ $student->course_fee }}</td>
						<td>{{ $student->due_amount }}</td>
						<td>{{ $student->second_payment }}</td>
						<td>{{ $student->discount }}</td>
						<td>
							<form method="post" action="{{ route('students.destroy', $student->student_id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('students.edit', $student->student_id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{{-- {!! $faculties->links() !!}--}}
	</div>
</div>

@endsection