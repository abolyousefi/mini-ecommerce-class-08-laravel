<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class accountPostRequest extends FormRequest
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
                'ir_mobile:zero',
                'unique:App\Models\User,mobile,'. auth()->id()
            ],
            'email' => [
                'required',
                'string',
                'unique:App\Models\User,email,'.auth()->id(),
                'min:5',
                'max:255'
            ],

        ];
    }
}
