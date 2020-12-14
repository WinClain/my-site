<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'email',
            'password' => 'min:8|max:32'
        ];
    }

    public function messages(){
        return [
            'email.email' => 'Поле email должно содержать email !',
            'password.min' => 'Поле password должно содержать более 8 символов !',
            'password.max' => 'Поле password должно содержать менее 32 символов !'
        ];
    }
}
