<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormContactRequest extends FormRequest
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
            //
            'name' => 'required|string|min:5',
            'contact' => 'required|size:9|unique:App\Models\Contact,contact',
            'email' => 'required|email|unique:App\Models\Contact,email',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required.',
            'name.string'  => 'Name should be a string',
            'name.min'  => 'Name should be more than 5 characters',
            'contact.required'  => 'Contact is required.',
            'contact.unique'  => 'This contact is already exits.',
            'contact.size'  => 'Contact number should be less than 9 characters',
            'email.required'  => 'Email is required.',
            'email.email'  => 'It should be valid email address.',
            'email.unique'  => 'This email already exits.',
        ];
    }
}
