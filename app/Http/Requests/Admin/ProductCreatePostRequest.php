<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreatePostRequest extends FormRequest
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
               'max:128',
           ],
            'name_en' => [
                'required',
                'string',
                'alpha_num',
                'min:2',
                'max:128'
            ],
            'category_id' => [
                'required',
                'int'
            ],
            'price' => [
                'required',
                'int'
            ],
            'discount' => [
                'sometimes',
                'nullable',
                'int'
            ],
            'qty' => [
                'required',
                'int'
            ],
            'description' => [
                'sometimes',
                'nullable',
                'string',
                'min:4',
                'max:1000'
            ]
        ];
    }
}
