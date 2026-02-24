<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checkoutPostRequest extends FormRequest
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
            'user_province' => [
                'required',
                'string',
                'min:2',
                'max:500'
            ],
            'user_city'  => [
                'required',
                'string',
                'min:2',
                'max:500'
            ],
            'user_address' => [
                'required',
                'string',
                'min:4',
                'max:500'
            ],
            'postal_code' => [
                'required',
                'ir_postal_code'
            ],
//            'user_mobile' => [
//                'ir_mobile'
//            ],
//            'description' => [
//                'string',
//                'min:5',
//                'max:1000'
//            ]
        ];
    }
}
