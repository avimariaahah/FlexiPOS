<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpoilageDetailStoreRequest extends FormRequest
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
            'spoilage_id' => 'required',
            'product_id' => 'required',
            'unit' => 'required',
            'expiry_date' => 'required',
            'quantity' => 'required',
            'cost_per_quantity' => 'required',
        ];
    }
}
