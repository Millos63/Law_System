<?php

namespace App\Http\Controllers;

use App\Models\ExpedientAll;
use App\Models\Client;
use Illuminate\Support\Facades\DB; 


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ExpedientAllRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExpedientAllController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $expedients = ExpedientAll::paginate();



        return view('expedient-all.index', compact('expedients'))
            ->with('i', ($request->input('page', 1) - 1) * $expedients->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $expedient = new ExpedientAll();
        $client = new Client();

        return view('expedient-all.create', compact('expedient', 'client'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExpedientAllRequest $request): RedirectResponse
    {
        
        $validatedData = $request -> validated();
        //Creamos al cliente primero
        
        DB::transaction(function () use ($validatedData) {
            //Crear al cliente
            $client = Client::create([
                'first_name' =>  $validatedData['first_name'],
                'last_name' =>  $validatedData['last_name'],
                'direction' =>  $validatedData['direction'],
                'gender' => $validatedData['gender'],
                'phone_number' =>  $validatedData['phone_number'],
                'age' => $validatedData['age'],
            ]);

            //Asegurarse de que el cliente se esta creando correctamente
            if(!$client){
                throw new \Exception('Error al crear el cliente');
            }

            //CREAR EL EXPEDIENTE
            ExpedientAll::create([
                'id_client' => $client->id,
                'expedient_number'=>  $validatedData['expedient_number'],
                'expedient_date'=> $validatedData['expedient_date'],
                'authority' => $validatedData['authority'],
                'id_judged'=> $validatedData['id_judged'],
                'id_judment'=> $validatedData['id_judment'],
                'expedient_link'=> $validatedData['expedient_link'],
                'counter_party'=> $validatedData['counter_party'],
                'judicial_district'=> $validatedData['judicial_district'],
                'touch_number'=> $validatedData['touch_number'],
                'touch_room'=> $validatedData['touch_room'],
                'room_number'=> $validatedData['room_number'],
                'protection_number' => $validatedData['protection_number'],
                'protection_authority' => $validatedData['protection_authority'],  

            ]);
        });

        return Redirect::route('expedients-all.index')
            ->with('success', 'Expedient created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $expedient = ExpedientAll::find($id);

        return view('expedient-all.show', compact('expedient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $expedient = ExpedientAll::find($id);

        return view('expedient-all.edit', compact('expedient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExpedientAllRequest $request, Expedient $expedient): RedirectResponse
    {
        $expedient->update($request->validated());

        return Redirect::route('expedients-all.index')
            ->with('success', 'Expedient updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        ExpedientAll::find($id)->delete();

        return Redirect::route('expedients-all.index')
            ->with('success', 'Expedient deleted successfully');
    }
}
