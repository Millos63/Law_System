<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 

use App\Models\Expedient;
use App\Models\Client;
use App\Models\Judged;
use App\Models\Matter;
use App\Models\PromotionsAccord;




use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ExpedientRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExpedientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $expedients = Expedient::paginate();

        return view('expedient.index', compact('expedients'))
            ->with('i', ($request->input('page', 1) - 1) * $expedients->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //Para acceder a todos nuestros clientes, Juzgados, etc.
        $clients = Client::all();
        $judgeds = Judged::all();
        $matter = Matter::all();


        //Para poder mostrar la información del cliente seleccionado en los inputs al seleccionar un cliente en el expediente
        $expedient = new Expedient();
        //Para crear un nuevo cliente
        $client = new Client();
        //Coleccion vacia para crear un nuevo expediente.

        $promotionsAccords = collect();

        return view('expedient.create', compact('expedient', 'client', 'clients', 'promotionsAccords','judgeds'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExpedientRequest $request): RedirectResponse
    {
        $validatedData = $request -> validated();

        $expedient = DB::transaction(function () use ($validatedData, $request) {
            $client = null;

            if ($validatedData['id_client'] === 'new_client') {
                $client = Client::Create([
                    'first_name'=> $validatedData['first_name'],
                    'last_name'=> $validatedData['last_name'],
                    'direction' =>  $validatedData['direction'],
                    'gender' => $validatedData['gender'],
                    'phone_number' =>  $validatedData['phone_number'],
                    'age' => $validatedData['age'],
                ]);
            }else{
                $client = Client::Find($validatedData['id_client']);
            }


            //Crear al cliente
            

             //CREAR EL EXPEDIENTE con el cliente nuevo o existente
             $expedient = Expedient::create([
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

            ///////-----------------CREACION DE PROMOTIONACCORD ----- 
            // Guardar las promociones y acuerdos relacionados
        
            //Variable para que el nombre de la carpeta donde se guardaran sera el numero de expediente
            $folderName = $expedient->expedient_number;
            $promotionFile = null;
            $accordFile = null;

            if ($request->hasFile('promotion_file') && $request->file('promotion_file')->isValid()) {
                $promotionFile = $request->file('promotion_file')->storeAs("public/{$folderName}/promotions", time() . '_' . $request->file('promotion_file')->getClientOriginalName());
            }

            if ($request->hasFile('accord_file') && $request->file('accord_file')->isValid()) {
                $accordFile = $request->file('accord_file')->storeAs("public/{$folderName}/accords", time() . '_' . $request->file('accord_file')->getClientOriginalName());
            }

            $expedient->promotionsAccords()->create([
                'id_expedient' => $expedient-> id,
                'promotion_file' => $promotionFile,
                'promotion_date' => $validatedData['promotion_date'],
                'promotion_description' => $validatedData['promotion_description'],
                'accord_file' => $accordFile,
                'accord_date' => $validatedData['accord_date'],
                'accord_description' => $validatedData['accord_description'],
            ]);

            return $expedient;

            
        });

        return Redirect::route('expedients.index')
            ->with('success', 'Expedient created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $expedient = Expedient::find($id);

        return view('expedient.show', compact('expedient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $expedient = Expedient::find($id);

        //Pasando todos los clientes para el foreach
        $clients = Client::all();

        //Modificando para poder editar al mismo tiempo el cliente también, mostrando la información en los inputs del cliente que corresponde
        $client = Client::find($expedient->id_client);


        return view('expedient.edit', compact('expedient','client', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExpedientRequest $request, Expedient $expedient): RedirectResponse
    {
        
        //Actualizar datos del cliente
        $client = Client::findOrFail($expedient-> id_client);
        $client->update($request->only([
            'first_name',
            'last_name',
            'direction',
            'gender',
            'phone_number',
            'age',

        ]));

        //Actualizar datos del expediente

        $expedient->update($request->only([
            'expedient_number',
            'expedient_date',
            'authority',
            'id_judged',
            'id_judment',
            'expedient_link',
            'counter_party',
            'judicial_district',
            'touch_number',
            'touch_room',
            'room_number',
            'protection_number',
            'protection_authority',

        ]));

        return Redirect::route('expedients.index')
            ->with('success', 'Expedient updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Expedient::find($id)->delete();

        return Redirect::route('expedients.index')
            ->with('success', 'Expedient deleted successfully');
    }
}
