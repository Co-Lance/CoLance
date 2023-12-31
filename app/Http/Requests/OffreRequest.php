<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OffreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'image' => 'required|url',
            'description' => 'required|string',
            'location' => 'required',
        ];
    }
    public  function  messages()
    {
        return [
            'name.required' => 'A name is required',
            'name.max' => 'A name is max',
            'image.required' => 'A image is required',
            'image.url' => 'A image is url',
            'description.required' => 'A description is required',
            'location.required' => 'Please select a location',
            'product' => 'required',

        ] ;
    }
}
