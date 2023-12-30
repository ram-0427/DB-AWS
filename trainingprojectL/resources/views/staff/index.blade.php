@extends('layouts.menu')

@section('content') 

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>
  
@endif
<div class="card">
	<div class="card-header" style="margin-top:50px">
		<div class="row">
			<div class="col col-md-6"><b>Staff Details</b></b></div>
			<div class="col col-md-6">
				<a href="{{ route('staffs.create') }}" class="btn btn-success btn-sm float-end">Add Staff</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Staff Id</th>
				<th>Staff Name</th>
				<th>Email</th>
				<th>Department ID</th>
                <th>Mobile Number</th>
                <th>Joining Date</th>
				<th>Action</th>
			</tr>
			@if(count($staffs) > 0)

				@foreach($staffs as $staff)
 
					<tr>
						<td>{{ $staff->staff_id }}</td>
						<td>{{ $staff->staff_name }}</td>
						<td>{{ $staff->email }}</td>
						<td>{{ $staff->dept_id }}</td>
                        <td>{{ $staff->mobile_number }}</td>
                        <td>{{ $staff->joining_date }}</td>
						<td>
							<form method="post" action="{{ route('staffs.destroy', $staff->staff_id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('staffs.edit', $staff->staff_id) }}" class="btn btn-warning btn-sm">Edit</a>
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