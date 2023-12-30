<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Batch;

class BatchController extends Controller
{
 

    public function index() 
    {
        $batches = Batch::paginate(10);
        $batches = Batch::all();
        return view('batch.index', compact('batches'));
    }


    public function create()
    {
        return view('batch.create');
    }


    public function store(Request $request)
    {
        $batch = $request->validate([
            'batch_name' => 'required',
            'course_id' =>'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'faculty_id' => 'required',
            'fees' => 'required',

        ]);
    
        Batch::create($batch);
    
        return redirect()->route('batches.index');
    }


    public function edit($batch_id)
    { 
        $batch = Batch::findOrFail($batch_id);
        return view('batch.edit', compact('batch'));
    }
 

    public function update(Request $request, $batch_id)
    {
        $batch = Batch::findOrFail($batch_id);

        $data = $request->validate([
            'batch_name' => 'required',
            'course_id' =>'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'faculty_id' => 'required',
            'fees' => 'required',
        ]); 
    
        $batch->update($data);
    
        return redirect()->route('batches.index');
    }
    

    public function destroy($id)
    {
        $batch = Batch::findOrFail($id);
        $batch->delete();
    
        return redirect()->route('batches.index');
    }
}
