<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStore extends FormRequest
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
        $emailRule = 'unique:users';

        if ($this->method() == 'patch'){
            $emailRule = 'unique:users,email,'.$this->user;
        }

        return [
            'name'      =>  'required',
            'email'      =>  'required|email|'.$emailRule,
            'password'      =>  'required|min:6'
        ];
    }
}
