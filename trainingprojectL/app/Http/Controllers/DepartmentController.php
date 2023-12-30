<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Department;

class DepartmentController extends Controller
{ 
 


    public function index() 
    {
        $departments = Department::paginate(10);
        $departments = Department::all();
        return view('department.index', compact('departments'));
    }


    public function create()
    {
        return view('department.create');
    }


    public function store(Request $request)
    {
        $department = $request->validate([
            'dept_name' => 'required',
            'dept_description' =>'required',
        ]);
    
        Department::create($department);
    
        return redirect()->route('departments.index');
    }



    public function edit($dept_id)
    { 
        $department = Department::findOrFail($dept_id);
        return view('department.edit', compact('department'));
    }
 

    public function update(Request $request, $dept_id)
    {
        $department = Department::findOrFail($dept_id);

        $data = $request->validate([
            'dept_name' => 'required',
            'dept_description' =>'required',
        ]);
    
        $department->update($data);
    
        return redirect()->route('departments.index');
    }
    

    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();
    
        return redirect()->route('departments.index');
    }
}
