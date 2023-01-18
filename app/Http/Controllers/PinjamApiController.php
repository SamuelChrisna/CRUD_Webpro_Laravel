<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePinjamRequest;
use App\Http\Requests\UpdatePinjamRequest;
use App\Models\Pinjam;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PinjamApiController extends Controller
{
  public function index()
  {
    $pinjams = Pinjam::all();

    // return view('tasks.index', compact('tasks'));
    return response()->json($pinjams, 200);
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

  public function show(Pinjam $pinjam)
  {
    // return view('tasks.show', compact('task'));
    return response()->json($pinjam, 200);
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
