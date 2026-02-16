<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterPostRequest extends FormRequest
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
           'first_name' => [
               'required',
               'string',
               'min:2',
               'max:50',
               'persian_alpha'
           ],
            'last_name' => [
               'required',
               'string',
               'min:2',
               'max:50',
               'persian_alpha'
           ],
            'mobile' => [
                'required',
                'unique:App\Models\User',
                'ir_mobile:zero'
        ],
            'email' => [
                'required',
                'string',
                'min:7',
                'max:255'
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                'max:255',
                'confirmed'
            ]
        ];

    }
}
