<?php

namespace App\Http\Controllers;

use App\Models\Judment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\JudmentRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class JudmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $judments = Judment::paginate();

        return view('judment.index', compact('judments'))
            ->with('i', ($request->input('page', 1) - 1) * $judments->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $judment = new Judment();

        return view('judment.create', compact('judment'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JudmentRequest $request): RedirectResponse
    {
        Judment::create($request->validated());

        return Redirect::route('judments.index')
            ->with('success', 'Judment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $judment = Judment::find($id);

        return view('judment.show', compact('judment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $judment = Judment::find($id);

        return view('judment.edit', compact('judment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JudmentRequest $request, Judment $judment): RedirectResponse
    {
        $judment->update($request->validated());

        return Redirect::route('judments.index')
            ->with('success', 'Judment updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Judment::find($id)->delete();

        return Redirect::route('judments.index')
            ->with('success', 'Judment deleted successfully');
    }
}
