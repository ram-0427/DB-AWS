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
			<div class="col col-md-6"><b>Batch Details</b></b></div>
			<div class="col col-md-6">
				<a href="{{ route('batches.create') }}" class="btn btn-success btn-sm float-end">Add Batch</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Batch Id</th>
				<th>Batch Name</th>
				<th>Course ID</th>
				<th>Start Date</th>
                <th>End Date</th>
                <th>Faculty ID</th>
                <th>Fees</th>
				<th>Action</th>
			</tr>
			@if(count($batches) > 0)

				@foreach($batches as $batch)
 
					<tr>
						<td>{{ $batch->batch_id }}</td>
						<td>{{ $batch->batch_name }}</td>
						<td>{{ $batch->course_id }}</td>
						<td>{{ $batch->startdate }}</td>
                        <td>{{ $batch->enddate }}</td>
                        <td>{{ $batch->faculty_id }}</td>
                        <td>{{ $batch->fees }}</td>
						<td>
							<form method="post" action="{{ route('batches.destroy', $batch->batch_id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('batches.edit', $batch->batch_id) }}" class="btn btn-warning btn-sm">Edit</a>
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