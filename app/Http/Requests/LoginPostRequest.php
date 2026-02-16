<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class LoginPostRequest extends FormRequest
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
           'mobile' => [
               'required',
               'exists:App\Models\User',
               'ir_mobile:zero'

               ],
            'password' => [
                'required',
                'string',
                'min:8',
                'max:255'
            ]
        ];
    }
}
