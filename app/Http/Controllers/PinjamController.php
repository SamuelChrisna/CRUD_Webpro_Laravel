<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePinjamRequest;
use App\Http\Requests\UpdatePinjamRequest;
use App\Models\Pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class PinjamController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pinjams = Pinjam::all();

        return view('pinjam.index', compact('pinjams'));
    }

    public function create()
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pinjam.create');
    }

    public function store(StorePinjamRequest $request)
    {
        Pinjam::create($request->validated());

        return redirect()->route('pinjam.index');
    }

    public function show(Pinjam $pinjam)
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pinjam.show', compact('pinjam'));
    }

    public function edit(Pinjam $pinjam)
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pinjam.edit', compact('pinjam'));
    }

    public function update(UpdatePinjamRequest $request, Pinjam $pinjam)
    {
        $pinjam->update($request->validated());

        return redirect()->route('pinjam.index');
    }

    public function destroy(Pinjam $pinjam)
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pinjam->delete();

        return redirect()->route('pinjam.index');
    }
}
