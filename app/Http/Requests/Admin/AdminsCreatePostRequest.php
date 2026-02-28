<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminsCreatePostRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'alpha_num',
                'min:2',
                'max:64'
            ],
            'username' => [
                'required',
                'string',
                'min:3',
                'max:64',
                'unique:App\Models\Admin'
            ],
            'password' =>[
                'required',
                'string',
                'min:8',
                'max:200',
            ],
            'status' => [
                'required',
                'int'
            ]
        ];
    }
}
