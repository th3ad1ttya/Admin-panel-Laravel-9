<?php

namespace App\Http\Requests\Admin\Lib;

use Illuminate\Foundation\Http\FormRequest;

class Lib64Requests extends FormRequest
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
            'lib64ARMV7aName' => [
                'string',
                'nullable'
            ],
            'lib64ARMV8aName' => [
                'string',
                'nullable'
            ],
            'lib64ARMV7aUrl' => [
                'nullable'
            ],
            'lib64ARMV8aUrl' => [
                'nullable'
            ],
            'lib64ARMV7aVersion' => [
                'string',
                'nullable'
            ],
            'lib64ARMV8aVersion' => [
                'string',
                'nullable'
            ]
        ];
    }
}
