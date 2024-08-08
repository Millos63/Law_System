<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PieceRequest extends FormRequest
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
			'id_expedient' => 'required',
			'piece_type' => 'required|string',
			'piece_number' => 'required|string',
			'review_authority' => 'string',
			'review_number' => 'string',
			'complaint_authority' => 'string',
			'complaint_number' => 'string',
			'observations' => 'string',
        ];
    }
}
