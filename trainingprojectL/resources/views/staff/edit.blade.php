
@extends('layouts.app')
 
@section('content')
    <div class="container"> 
        <h2>Edit Staff</h2> 
        <form method="POST" action="{{ route('staffs.update', $staff->staff_id) }}">
            @csrf 
            @method('PUT')
            <div class="form-group">
                <label for="staff_name">Staff Name:</label>
                <input type="text" class="form-control" id="staff_name" name="staff_name" value="{{ $staff->staff_name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $staff->email }}" required>
            </div>
            <div class="form-group">
                <label for="dept_id">Department ID:</label>
                <input type="number" class="form-control" id="dept_id" name="dept_id" value="{{ $staff->dept_id }}" required>
            </div>
            <div class="form-group">
                <label for="faculty_contactno">PhoneNO:</label>
                <input type="number" class="form-control" id="mobile_number" name="mobile_number" value="{{ $staff->mobile_number }}" required>
            </div>
            <div class="form-group">
                <label for="joining_date">Joining Date:</label>
                <input type="date" class="form-control" id="joining_date" name="joining_date" value="{{ $staff->joining_date }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
 