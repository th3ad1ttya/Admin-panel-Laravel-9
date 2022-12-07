<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PushPlugin64UpdateRequest extends FormRequest
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
            'plugin64Name' => [
                'string',
                'required'
            ],
            'plugin64Version' => [
                'string',
                'required'
            ],
            'plugin64Url' => [
                'required'
            ]
        ];
    }
}
