<?php

namespace App\Http\Controllers;

use App\Models\Observation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ObservationRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $observations = Observation::paginate();

        return view('observation.index', compact('observations'))
            ->with('i', ($request->input('page', 1) - 1) * $observations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $observation = new Observation();

        return view('observation.create', compact('observation'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ObservationRequest $request): RedirectResponse
    {
        Observation::create($request->validated());

        return Redirect::route('observations.index')
            ->with('success', 'Observation created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $observation = Observation::find($id);

        return view('observation.show', compact('observation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $observation = Observation::find($id);

        return view('observation.edit', compact('observation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ObservationRequest $request, Observation $observation): RedirectResponse
    {
        $observation->update($request->validated());

        return Redirect::route('observations.index')
            ->with('success', 'Observation updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Observation::find($id)->delete();

        return Redirect::route('observations.index')
            ->with('success', 'Observation deleted successfully');
    }
}
