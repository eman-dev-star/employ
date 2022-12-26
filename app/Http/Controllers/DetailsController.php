<?php

namespace App\Http\Controllers;

use App\Models\Details;
use App\Models\Task;
use Illuminate\Http\Request;
use Symfony\Component\ErrorHandler\Debug;

class DetailsController extends Controller
{
    public function index()
    {
        $details=Details::all();
        return view('dashboard.details.index',compact('details'));

    }
    public function create(Request $request)
    {
        $taskone=$request->id;
        // dd($taskone);
        $tasks=Task::all();
        return view('dashboard.details.create',compact(['tasks','taskone']));

    }


    public function store(Request $request)
    {
        $data=$request->validate([
            'details'=>'required',
            'task_id'=>'required',
             ]);
             Details::create($data);
             session()->flash('success','details updated successfully');
             return redirect()->route('tasks.index');
    }


    public function show(Details $details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function edit(Details $details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Details $details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function destroy(Details $details)
    {
        //
    }
}
