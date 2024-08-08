<?php

namespace App\Http\Controllers;

use App\Models\PiecesPromotionsAccord;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PiecesPromotionsAccordRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PiecesPromotionsAccordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $piecesPromotionsAccords = PiecesPromotionsAccord::paginate();

        return view('pieces-promotions-accord.index', compact('piecesPromotionsAccords'))
            ->with('i', ($request->input('page', 1) - 1) * $piecesPromotionsAccords->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $piecesPromotionsAccord = new PiecesPromotionsAccord();

        return view('pieces-promotions-accord.create', compact('piecesPromotionsAccord'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PiecesPromotionsAccordRequest $request): RedirectResponse
    {
        PiecesPromotionsAccord::create($request->validated());

        return Redirect::route('pieces-promotions-accords.index')
            ->with('success', 'PiecesPromotionsAccord created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $piecesPromotionsAccord = PiecesPromotionsAccord::find($id);

        return view('pieces-promotions-accord.show', compact('piecesPromotionsAccord'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $piecesPromotionsAccord = PiecesPromotionsAccord::find($id);

        return view('pieces-promotions-accord.edit', compact('piecesPromotionsAccord'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PiecesPromotionsAccordRequest $request, PiecesPromotionsAccord $piecesPromotionsAccord): RedirectResponse
    {
        $piecesPromotionsAccord->update($request->validated());

        return Redirect::route('pieces-promotions-accords.index')
            ->with('success', 'PiecesPromotionsAccord updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        PiecesPromotionsAccord::find($id)->delete();

        return Redirect::route('pieces-promotions-accords.index')
            ->with('success', 'PiecesPromotionsAccord deleted successfully');
    }
}
