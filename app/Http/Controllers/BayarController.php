<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBayarRequest;
use App\Http\Requests\UpdateBayarRequest;
use App\Models\Bayar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class BayarController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bayars = Bayar::all();

        return view('bayar.index', compact('bayars'));
    }

    public function create()
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('bayar.create');
    }

    public function store(StoreBayarRequest $request)
    {
        Bayar::create($request->validated());

        return redirect()->route('bayar.index');
    }

    public function show(Bayar $bayar)
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('bayar.show', compact('bayar'));
    }

    public function edit(Bayar $bayar)
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('bayar.edit', compact('bayar'));
    }

    public function update(UpdateBayarRequest $request, Bayar $bayar)
    {
        $bayar->update($request->validated());

        return redirect()->route('bayar.index');
    }

    public function destroy(Bayar $bayar)
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bayar->delete();

        return redirect()->route('bayar.index');
    }
}
