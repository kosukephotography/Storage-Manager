<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoragesStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'maker' => ['required' , 'string'],
            'model_number' => ['required' , 'string'],
            'serial_number' => ['required' , 'string'],
            'size' => ['required' , 'string'],
            'types' => ['required' , 'in:レンタル,ライブラリ'],
            'supported_os' => ['required' , 'in:Windows,Mac'],
            'recovery_key' => ['required' , 'string'],
            'password' => ['required' , 'string'],
            ];
    }
}
