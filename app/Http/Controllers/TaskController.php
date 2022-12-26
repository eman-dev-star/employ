<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;

use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        $tasks=Task::with('project')->get();
        return view('dashboard.tasks.index',compact('tasks'));
    }

    public function create()
    {
        $projects=Project::all();
        return view('dashboard.tasks.create',compact('projects'));

    }
    public function store(Request $request)
    {
        $data=$request->validate([
         'name'=>'required',
         'project_id'=>'required'
        ]);
        Task::create($data);
        session()->flash('success','task added successfully');

        return redirect()->route('tasks.index');
    }

    public function show(Task $task)
    {
        //
    }

    public function edit(Task $task)
    {
        $projects=Project::all();
        return view('dashboard.tasks.edit',compact(['task','projects']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $data=$request->validate([
            'name'=>'required',
            'project_id'=>'required'

           ]);
           $task->update($data);
           session()->flash('success','task updated successfully');

           return redirect()->route('tasks.index');
    }


    public function destroy(Task $task)
    {
        $task->delete();
        session()->flash('success','project deleted successfully');
        return redirect()->route('tasks.index');
    }
}
