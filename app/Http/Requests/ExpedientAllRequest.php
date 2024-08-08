<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpedientAllRequest extends FormRequest
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
			'id_client'=> 'nullable',
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

            //PARA CLIENTE
            'first_name' => 'required|string',
			'last_name' => 'required|string',
			'direction' => 'required|string',
			'gender' => 'required|string',
			'phone_number' => 'required|string',
			'age' => 'required|string',
        ];
    }
}
