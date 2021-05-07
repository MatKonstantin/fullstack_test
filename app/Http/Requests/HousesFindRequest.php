<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HousesFindRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'condition.name' => 'string',
            'condition.price' => 'numeric|max:16777215',
            'condition.bedrooms' => 'numeric|max:255',
            "condition.bathrooms" => "numeric|max:255",
            "condition.storeys" => "numeric|max:255",
            "condition.garages" => "numeric|max:255",
        ];
    }
}
