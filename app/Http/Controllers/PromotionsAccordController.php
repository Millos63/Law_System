<?php

namespace App\Http\Controllers;

use App\Models\PromotionsAccord;
//Modelo para poder trabajar con los expedientes
use App\Models\Expedient;


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
    public function index(Request $request, $id_expedient): View
    {
        $promotionsAccords = PromotionsAccord::where('id_expedient', $id_expedient)->paginate();
    
        return view('promotions-accord.index', compact('promotionsAccords', 'id_expedient'))
            ->with('i', ($request->input('page', 1) - 1) * $promotionsAccords->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id_expedient): View
    {
        $expedient = Expedient::find($id_expedient);
       
        $promotionsAccord = new PromotionsAccord();

        //Para obtener todas las promociones que tiene cierto expediente dado.
        $promotionsAccords = PromotionsAccord::where('id_expedient', $id_expedient)->get();

        return view('promotions-accord.create', compact('promotionsAccord', 'expedient','promotionsAccords','id_expedient'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PromotionsAccordRequest $request): RedirectResponse
    {
        $promotionsAccord = PromotionsAccord::create($request->validated());
        $id_expedient = $promotionsAccord->id_expedient; // Asumiendo que 'expedient_id' es un campo en PromotionsAccord

        return Redirect::route('promotions-accords.index', ['id_expedient' => $id_expedient])
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

        $id_expedient = $promotionsAccord ->id_expedient;
        return view('promotions-accord.edit', compact('promotionsAccord', 'id_expedient'));
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
        $promotionsAccord = PromotionsAccord::find($id);
        if (!$promotionsAccord) {
            return Redirect::back()->withErrors(['error' => 'Promotion Accord not found.']);
        }

        $promotionsAccord->delete();

        $id_expedient = $promotionsAccord->id_expedient; // Asumiendo que 'expedient_id' es un campo en PromotionsAccord

        return Redirect::route('promotions-accords.index', ['id_expedient' => $id_expedient])
            ->with('success', 'PromotionsAccord deleted successfully.');
    }
}
