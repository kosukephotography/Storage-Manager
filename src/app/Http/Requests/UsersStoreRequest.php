<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersStoreRequest extends FormRequest
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
            'employee_number' => ['required' , 'string'],
            'email' => ['required' , 'email:rfc'],
            'family_name' => ['required' , 'string'],
            'first_name' => ['required' , 'string'],
            'is_admin' => ['required' , 'boolean'],
        ];
    }
}
