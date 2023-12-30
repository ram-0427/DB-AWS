@extends('layouts.menu')

@section('content') 

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>
  
@endif
<br><br>
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Department Details</b></b></div>
			<div class="col col-md-6">
				<a href="{{ route('departments.create') }}" class="btn btn-success btn-sm float-end">Add Department</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Department Id</th>
				<th>Department Name</th>
				<th>Descriptin</th>
				<th>Action</th>
			</tr>
			@if(count($departments) > 0)

				@foreach($departments as $department)
 
					<tr>
						<td>{{ $department->dept_id }}</td>
						<td>{{ $department->dept_name }}</td>
						<td>{{ $department->dept_description }}</td>
						<td>
							<form method="post" action="{{ route('departments.destroy', $department->dept_id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('departments.edit', $department->dept_id) }}" class="btn btn-warning btn-sm">Edit</a>
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