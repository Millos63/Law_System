<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PiecesFileRequest extends FormRequest
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
			'id_piece' => 'required',
			'start_file' => 'required|string',
			'start_description' => 'string',
            'start_date' => 'nullable|date',
			'finish_file' => 'string',
			'finish_description' => 'string',
            'finish_date' => 'date|nullable'
        ];
    }
}
