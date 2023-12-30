<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Student;

class StudentController extends Controller
{

    public function index() 
    {
        $students = Student::paginate(10);
        $students = Student::all();
        return view('student.index', compact('students'));
    }


    public function create()
    {
        return view('student.create');
    }


    public function store(Request $request)
    {
        $student = $request->validate([
            'student_name' => 'required',
            'registration_no' =>'required',
            'student_email' =>'required',
            'student_phoneno' =>'required',
            'date_registration' =>'required',
            'course_id' =>'required',
            'course_fee' =>'required',
            'due_amount' =>'required',
            'second_payment' =>'required',
            'discount' =>'required',

        ]);
    
        Student::create($student);
    
        return redirect()->route('students.index');
    }



    public function edit($student_id)
    { 
        $student = Student::findOrFail($student_id);
        return view('student.edit', compact('student'));
    }
 

    public function update(Request $request, $student_id)
    {
        $student = Student::findOrFail($student_id);

        $data = $request->validate([
            'student_name' => 'required',
            'registration_no' =>'required',
            'student_email' =>'required',
            'student_phoneno' =>'required',
            'course_id' =>'required',
            'course_fee' =>'required',
            'due_amount' =>'required',
            'second_payment' =>'required',
            'discount' =>'required',
        ]);
    
        $student->update($data);
    
        return redirect()->route('students.index');
    }
    

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
    
        return redirect()->route('students.index');
    }
}
