<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Staff;

class StaffController extends Controller
{
 


    public function index() 
    {
        $staffs = Staff::paginate(10);
        $staffs = Staff::all();
        return view('staff.index', compact('staffs'));
    }


    public function create()
    {
        return view('staff.create');
    }


    public function store(Request $request)
    {
        $staff = $request->validate([
            'staff_name' => 'required',
            'dept_id' =>'required',
            'mobile_number' =>'required',
            'joining_date' =>'required',

            'email' => 'required|email|unique:staffmst',
        ]);
    
        Staff::create($staff);
    
        return redirect()->route('staffs.index');
    }


    public function edit($staff_id)
    { 
        $staff = Staff::findOrFail($staff_id);
        return view('staff.edit', compact('staff'));
    }


    public function update(Request $request, $staff_id)
    {
        $staff = Staff::findOrFail($staff_id);

        $data = $request->validate([
            'staff_name' => 'required',
            'dept_id' =>'required',
            'mobile_number' =>'required',
            'joining_date' =>'required',

            'email' => 'required|email|unique:staffmst,email,' . $staff->staff_id . ',staff_id',
        ]);
    
        $staff->update($data);
    
        return redirect()->route('staffs.index');
    }
    

    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();
    
        return redirect()->route('staffs.index');
    }
}
