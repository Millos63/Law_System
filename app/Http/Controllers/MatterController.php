<?php

namespace App\Http\Controllers;

use App\Models\Matter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MatterRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MatterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $matters = Matter::paginate();

        return view('matter.index', compact('matters'))
            ->with('i', ($request->input('page', 1) - 1) * $matters->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $matter = new Matter();

        return view('matter.create', compact('matter'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MatterRequest $request): RedirectResponse
    {
        Matter::create($request->validated());

        return Redirect::route('matters.index')
            ->with('success', 'Matter created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $matter = Matter::find($id);

        return view('matter.show', compact('matter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $matter = Matter::find($id);

        return view('matter.edit', compact('matter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MatterRequest $request, Matter $matter): RedirectResponse
    {
        $matter->update($request->validated());

        return Redirect::route('matters.index')
            ->with('success', 'Matter updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Matter::find($id)->delete();

        return Redirect::route('matters.index')
            ->with('success', 'Matter deleted successfully');
    }
}
