<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TasksApiController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        // return view('tasks.index', compact('tasks'));
        return response()->json($tasks, 200);
    }

    // public function create()
    // {
    //     return view('tasks.create');
    // }

    // public function store(StoreTaskRequest $request)
    // {
    //     Task::create($request->validated());

    //     return redirect()->route('tasks.index');
    // }

    public function show(Task $task)
    {
        // return view('tasks.show', compact('task'));
        return response()->json($task, 200);
    }

    // public function edit(Task $task)
    // {
    //     return view('tasks.edit', compact('task'));
    // }

    // public function update(UpdateTaskRequest $request, Task $task)
    // {
    //     $task->update($request->validated());

    //     return redirect()->route('tasks.index');
    // }

    // public function destroy(Task $task)
    // {
    //     $task->delete();

    //     return redirect()->route('tasks.index');
    // }
}
