<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
public function __construct()
{
    $this->authorizeResource(Project::class,'project');
}
    public function index()
    {
        $projects=Project::all();
        return view('dashboard.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.projects.create');

    }


    public function store(Request $request)
    {
        $data=$request->validate([
       'name'=>'required',
        ]);
        Project::create($data);
        session()->flash('success','project added successfully');

        return redirect()->route('projects.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('dashboard.projects.edit',compact('project'));


    }

    public function update(Request $request, Project $project)
    {
        $data=$request->validate([
       'name'=>'required',

        ]);
        $project->update($data);
        session()->flash('success','project updated successfully');
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {

        $project->delete();
        session()->flash('success','project deleted successfully');
        return redirect()->route('projects.index');
    }
}
