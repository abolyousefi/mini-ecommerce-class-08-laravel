<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class AdminsUpdatePostRequest extends FormRequest
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
    public function rules(Request $request): array
    {
        return [
            'name' => [
                'required',
                'string',
                'min:2',
                'max:64',
                'alpha_num'
            ],
            'username' => [
                'required',
                'string',
                'min:3',
                'max:64',
                'unique:App\Models\Admin,username,'.$request->input('id'),
            ],
            'status' => [
                'required',
                'int'
            ],
            'password' => [
                'sometimes',
                'nullable',
                'string',
                'min:8',
                'max:200'
            ]
        ];
    }
}
