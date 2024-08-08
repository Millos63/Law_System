<?php

namespace App\Http\Controllers;

use App\Models\Judged;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\JudgedRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class JudgedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $judgeds = Judged::paginate();

        return view('judged.index', compact('judgeds'))
            ->with('i', ($request->input('page', 1) - 1) * $judgeds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $judged = new Judged();

        return view('judged.create', compact('judged'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JudgedRequest $request): RedirectResponse
    {
        Judged::create($request->validated());

        return Redirect::route('judgeds.index')
            ->with('success', 'Judged created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $judged = Judged::find($id);

        return view('judged.show', compact('judged'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $judged = Judged::find($id);

        return view('judged.edit', compact('judged'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JudgedRequest $request, Judged $judged): RedirectResponse
    {
        $judged->update($request->validated());

        return Redirect::route('judgeds.index')
            ->with('success', 'Judged updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Judged::find($id)->delete();

        return Redirect::route('judgeds.index')
            ->with('success', 'Judged deleted successfully');
    }
}
