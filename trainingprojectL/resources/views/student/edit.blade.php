
@extends('layouts.app')
 
@section('content')
    <div class="container"> 
        <h2>Edit Student</h2> 
        <form method="POST" action="{{ route('students.update', $student->student_id) }}">
            @csrf 
            @method('PUT')
            <div class="form-group">
                <label for="student_name">Student Name:</label>
                <input type="text" class="form-control" id="student_name" name="student_name" value="{{ $student->student_name }}" required>
            </div>
            <div class="form-group">
                <label for="registration_no">Registration NO:</label>
                <input type="text" class="form-control" id="registration_no" name="registration_no" value="{{ $student->registration_no }}" required>
            </div>
            <div class="form-group">
                <label for="student_email">Student Email:</label>
                <input type="email" class="form-control" id="student_email" name="student_email" value="{{ $student->student_email }}" required>
            </div>
            <div class="form-group">
                <label for="student_phoneno">Student PhoneNO.:</label>
                <input type="number" class="form-control" id="student_phoneno" name="student_phoneno" value="{{ $student->student_phoneno }}" required>
            </div>
            <div class="form-group">
                <label for="course_id">Course ID:</label>
                <input type="number" class="form-control" id="course_id" name="course_id" value="{{ $student->course_id }}" required>
            </div>
            <div class="form-group">
                <label for="course_fee">Course Fee:</label>
                <input type="number" class="form-control" id="course_fee" name="course_fee" value="{{ $student->course_fee }}" required>
            </div>
            <div class="form-group">
                <label for="due_amount">Due Amount:</label>
                <input type="text" class="form-control" id="due_amount" name="due_amount" value="{{ $student->due_amount }}" required>
            </div>
            <div class="form-group">
                <label for="second_payment">Second Payment:</label>
                <input type="text" class="form-control" id="second_payment" name="second_payment" value="{{ $student->second_payment }}" required>
            </div>
            <div class="form-group">
                <label for="discount">Discount:</label>
                <input type="number" class="form-control" id="discount" name="discount" value="{{ $student->discount }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
 