
@extends('layouts.app')
 
@section('content')
    <div class="container"> 
        <h2>Edit Course</h2> 
        <form method="POST" action="{{ route('courses.update', $course->course_id) }}">
            @csrf 
            @method('PUT')
            <div class="form-group">
                <label for="course_name">Course Name:</label>
                <input type="text" class="form-control" id="course_name" name="course_name" value="{{ $course->course_name }}" required>
            </div>
            <div class="form-group">
                <label for="course_fee">Course Fee:</label>
                <input type="number" class="form-control" id="course_fee" name="course_fee" value="{{ $course->course_fee }}" required>
            </div>
            <div class="form-group">
                <label for="course_content">Course Content:</label>
                <input type="text" class="form-control" id="course_content" name="course_content" value="{{ $course->course_content }}" required>
            </div>
            <div class="form-group">
                <label for="course_description">Course Description:</label>
                <input type="text" class="form-control" id="course_description" name="course_description" value="{{ $course->course_description }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
 