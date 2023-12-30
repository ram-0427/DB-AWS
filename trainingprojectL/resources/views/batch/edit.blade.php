
@extends('layouts.app')
 
@section('content')
    <div class="container"> 
        <h2>Edit Batch</h2> 
        <form method="POST" action="{{ route('batches.update', $batch->batch_id) }}">
            @csrf 
            @method('PUT')
            <div class="form-group">
                <label for="batch_name">Batch Name:</label>
                <input type="text" class="form-control" id="batch_name" name="batch_name" value="{{ $batch->batch_name }}" required>
            </div>
            <div class="form-group">
                <label for="course_id">Course ID:</label>
                <input type="number" class="form-control" id="course_id" name="course_id" value="{{ $batch->course_id }}" required>
            </div>
            <div class="form-group">
                <label for="startdate">Start Date:</label>
                <input type="date" class="form-control" id="startdate" name="startdate" value="{{ $batch->startdate }}" required>
            </div>
            <div class="form-group">
                <label for="enddate">End Date:</label>
                <input type="date" class="form-control" id="enddate" name="enddate" value="{{ $batch->enddate }}" required>
            </div>
            <div class="form-group">
                <label for="faculty_id">Faculty ID:</label>
                <input type="number" class="form-control" id="faculty_id" name="faculty_id" value="{{ $batch->faculty_id }}" required>
            </div>
            <div class="form-group">
                <label for="fees">Fees:</label>
                <input type="number" class="form-control" id="fees" name="fees" value="{{ $batch->fees }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
 