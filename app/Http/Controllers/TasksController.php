<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function create()
    {
        $tasks = Task::all();

        return view('tasks.create')->withTasks($tasks);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        $input = $request->all();
    
        Task::create($input);
        Session::flash('flash_message', 'Task successfully added!');
    
        return redirect()->back();
    }
}
