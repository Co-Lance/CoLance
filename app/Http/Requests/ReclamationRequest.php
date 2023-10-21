<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReclamationRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'user' => 'required|string|max:255|min:3|alpha',
            'type' => 'required|string|max:255|in:urgent,not-urgent ,average',
            'contact' => ['required', 'string', 'max:255', 'regex:/^([\w\.-]+@[\w\.-]+\.\w+|(\+)?[0-9\s\-]+)$/'],
            'description' => 'required|string|min:10',
            'product_id' => 'required|integer|exists:products,id',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Title is required.',
            'user.required' => 'Your name is required.',
            'user.min' => 'Name should be at least 3 characters long.',
            'user.alpha' => 'Name should contain only alphabets.',
            'type.required' => 'Type is required.',
            'type.in' => 'Selected type is invalid.',
            'contact.required' => 'Contact details are required.',
            'contact.regex' => 'Please enter a valid email address or phone number.',
            'description.required' => 'Description is required.',
            'description.min' => 'Description should be at least 10 characters long.',
            'product_id.required' => 'Product is required.',
            'product_id.exists' => 'Selected product is invalid. urgent,not-urgent ,average',
        ];
    }
}
