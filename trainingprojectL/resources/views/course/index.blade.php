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
			<div class="col col-md-6"><b>Course Details</b></b></div>
			<div class="col col-md-6">
				<a href="{{ route('courses.create') }}" class="btn btn-success btn-sm float-end">Add course</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Course Id</th>
				<th>Course Name</th>
				<th>Course Fees</th>
				<th>Course Content </th>
                <th>Course Description </th>

				<th>Action</th>
			</tr>
			@if(count($courses) > 0)

				@foreach($courses as $course)
 
					<tr>
						<td>{{ $course->course_id }}</td>
						<td>{{ $course->course_name }}</td>
						<td>{{ $course->course_fee }}</td>
						<td>{{ $course->course_content }}</td>
                        <td>{{ $course->course_description }}</td>

						<td>
							<form method="post" action="{{ route('courses.destroy', $course->course_id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('courses.edit', $course->course_id) }}" class="btn btn-warning btn-sm">Edit</a>
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
	</div>
</div>

@endsection