<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Client; 

class ExpedientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'expedient_number' => 'required|string',
			'expedient_date' => 'required',
            'id_client' => ['required', function($attribute,$value, $fail){
                if($value !== 'new_client' && !Client::find($value)){
                    $fail('El cliente seleccionado es invalido');
                }
            }],
            
            'nullable|exists:clients,id', //Puede ser null si es nuevo cliente
			'authority' => 'string',
            'id_judged' => 'nullable',
            'id_judment' => 'nullable', //Agregamos para que se guarden en la base de datos
			'expedient_link' => 'string',
			'counter_party' => 'required|string',
			'judicial_district' => 'string',
			'touch_number' => 'string',
			'touch_room' => 'string',
			'room_number' => 'string',
			'protection_number' => 'string',
			'protection_authority' => 'string',


            //REQUEST PARA CLIENTE, SERAN OBLIGATORIOS SOLO SI ES NUEVO CLIENTE.
            'first_name' => 'nullable|string|required_if:id_client,new|',
			'last_name' => 'nullable|string|required_if:id_client,new|',
			'direction' => 'nullable|string|required_if:id_client,new|',
			'gender' => 'nullable|string|required_if:id_client,new|',
			'phone_number' => 'nullable|string|required_if:id_client,new|',
			'age' => 'nullable|string|required_if:id_client,new|',

        ];
    }
}
