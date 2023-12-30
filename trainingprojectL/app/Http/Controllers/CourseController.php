<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Course;

class CourseController extends Controller
{
 

    public function index() 
    {
        $courses = Course::paginate(10);
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }


    public function create()
    {
        return view('course.create');
    }


    public function store(Request $request)
    {
        $course = $request->validate([
            'course_name' => 'required',
            'course_fee' =>'required',
            'course_content' =>'required',
            'course_description' =>'required',
        ]);
    
        Course::create($course);
    
        return redirect()->route('courses.index');
    }



    public function edit($course_id)
    { 
        $course = Course::findOrFail($course_id);
        return view('course.edit', compact('course'));
    }
 

    public function update(Request $request, $course_id)
    {
        $course = Course::findOrFail($course_id);

        $data = $request->validate([
            'course_name' => 'required',
            'course_fee' =>'required',
            'course_content' =>'required',
            'course_description' =>'required',
        ]);
    
        $course->update($data);
    
        return redirect()->route('courses.index');
    }
    

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
    
        return redirect()->route('courses.index');
    }
}
