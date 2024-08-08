<?php

namespace App\Http\Controllers;

use App\Models\PiecesFile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PiecesFileRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PiecesFileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $piecesFiles = PiecesFile::paginate();

        return view('pieces-file.index', compact('piecesFiles'))
            ->with('i', ($request->input('page', 1) - 1) * $piecesFiles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $piecesFile = new PiecesFile();

        return view('pieces-file.create', compact('piecesFile'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PiecesFileRequest $request): RedirectResponse
    {
        PiecesFile::create($request->validated());

        return Redirect::route('pieces-files.index')
            ->with('success', 'PiecesFile created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $piecesFile = PiecesFile::find($id);

        return view('pieces-file.show', compact('piecesFile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $piecesFile = PiecesFile::find($id);

        return view('pieces-file.edit', compact('piecesFile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PiecesFileRequest $request, PiecesFile $piecesFile): RedirectResponse
    {
        $piecesFile->update($request->validated());

        return Redirect::route('pieces-files.index')
            ->with('success', 'PiecesFile updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        PiecesFile::find($id)->delete();

        return Redirect::route('pieces-files.index')
            ->with('success', 'PiecesFile deleted successfully');
    }
}
