<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = \App\Models\Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'long_description'=>'required',
        ]);
        \App\Models\Task::create($request->except('_token'));

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function show(\App\Models\Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(\App\Models\Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, \App\Models\Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'long_description'=>'required',
        ]);

        $task->update($request->except('_token'));

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy(\App\Models\Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }

}
