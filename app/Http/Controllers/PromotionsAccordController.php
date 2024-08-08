<?php

namespace App\Http\Controllers;

use App\Models\PromotionsAccord;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PromotionsAccordRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PromotionsAccordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $promotionsAccords = PromotionsAccord::paginate();

        return view('promotions-accord.index', compact('promotionsAccords'))
            ->with('i', ($request->input('page', 1) - 1) * $promotionsAccords->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $promotionsAccord = new PromotionsAccord();

        return view('promotions-accord.create', compact('promotionsAccord'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PromotionsAccordRequest $request): RedirectResponse
    {
        PromotionsAccord::create($request->validated());

        return Redirect::route('promotions-accords.index')
            ->with('success', 'PromotionsAccord created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $promotionsAccord = PromotionsAccord::find($id);

        return view('promotions-accord.show', compact('promotionsAccord'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $promotionsAccord = PromotionsAccord::find($id);

        return view('promotions-accord.edit', compact('promotionsAccord'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PromotionsAccordRequest $request, PromotionsAccord $promotionsAccord): RedirectResponse
    {
        $promotionsAccord->update($request->validated());

        return Redirect::route('promotions-accords.index')
            ->with('success', 'PromotionsAccord updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        PromotionsAccord::find($id)->delete();

        return Redirect::route('promotions-accords.index')
            ->with('success', 'PromotionsAccord deleted successfully');
    }
}
