<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBayarRequest;
use App\Http\Requests\UpdateBayarRequest;
use App\Models\Bayar;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BayarApiController extends Controller
{
  public function index()
  {
    $bayars = Bayar::all();

    // return view('tasks.index', compact('tasks'));
    return response()->json($bayars, 200);
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

  public function show(Bayar $bayar)
  {
    // return view('tasks.show', compact('task'));
    return response()->json($bayar, 200);
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
