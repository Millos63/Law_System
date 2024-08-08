<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromotionsAccordRequest extends FormRequest
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
			'promotion_file' => 'string',
            'promotion_date' => 'date|nullable',
			'promotion_description' => 'string',
			'accord_file' => 'string',
            'accord_date' => 'date|nullable',
			'accord_description' => 'string',
        ];
    }
}
