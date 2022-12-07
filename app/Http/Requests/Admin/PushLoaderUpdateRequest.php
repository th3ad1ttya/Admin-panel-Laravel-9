<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PushLoaderUpdateRequest extends FormRequest
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
            'name' => [
                'string',
                'nullable'
            ],
            'loaderVersion' => [
                'string',
                'required'
            ],
            'loaderPackage' => [
                'string',
                'required'
            ],
            'loaderUrl' => [
                'required'
            ],
            'loaderChangeLog' => [
                'string',
                'nullable'
            ]
        ];
    }
}
