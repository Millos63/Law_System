<?php

namespace App\Http\Controllers;

use App\Models\ExpedientFile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ExpedientFileRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExpedientFileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $expedientFiles = ExpedientFile::paginate();

        return view('expedient-file.index', compact('expedientFiles'))
            ->with('i', ($request->input('page', 1) - 1) * $expedientFiles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $expedientFile = new ExpedientFile();

        return view('expedient-file.create', compact('expedientFile'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExpedientFileRequest $request): RedirectResponse
    {
        ExpedientFile::create($request->validated());

        return Redirect::route('expedient-files.index')
            ->with('success', 'ExpedientFile created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $expedientFile = ExpedientFile::find($id);

        return view('expedient-file.show', compact('expedientFile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $expedientFile = ExpedientFile::find($id);

        return view('expedient-file.edit', compact('expedientFile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExpedientFileRequest $request, ExpedientFile $expedientFile): RedirectResponse
    {
        $expedientFile->update($request->validated());

        return Redirect::route('expedient-files.index')
            ->with('success', 'ExpedientFile updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        ExpedientFile::find($id)->delete();

        return Redirect::route('expedient-files.index')
            ->with('success', 'ExpedientFile deleted successfully');
    }
}
