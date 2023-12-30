
@extends('layouts.menu')
 
@section('content')
<br><br>
    <div class="container"> 
        <h2>Edit Department</h2> 
        <form method="POST" action="{{ route('departments.update', $department->dept_id) }}">
            @csrf 
            @method('PUT')
            <div class="form-group">
                <label for="dept_name">Department Name:</label>
                <input type="text" class="form-control" id="dept_name" name="dept_name" value="{{ $department->dept_name }}" required>
            </div>
            <div class="form-group">
                <label for="dept_description">Description:</label>
                <input type="text" class="form-control" id="dept_description" name="dept_description" value="{{ $department->dept_description }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
 