<?php

namespace App\Http\Requests\Admin\Lib;

use Illuminate\Foundation\Http\FormRequest;

class Lib32Requests extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'libARMV7aName' => [
                'string',
                'nullable'
            ],
            'libARMV8aName' => [
                'string',
                'nullable'
            ],
            'libARMV7aUrl' => [
                'nullable'
            ],
            'libARMV8aUrl' => [
                'nullable'
            ],
            'libARMV7aVersion' => [
                'string',
                'nullable'
            ],
            'libARMV8aVersion' => [
                'string',
                'nullable'
            ]
        ];
    }
}
