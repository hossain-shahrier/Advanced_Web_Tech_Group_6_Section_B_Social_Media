<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'name' => 'required|alpha|min:5',
            'username' => 'required|alpha_dash|min:5',
            'email' => 'required|email',
            'password' => 'required|alpha_dash|min:6',
            'cpassword' => 'required|alpha_dash|min:6',
            'phone' => 'required|numeric',
            'gender' => 'required',
            'type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cpassword.required' => 'The confirm password field is required',
            'cpassword.alpha_dash' => 'The confirm password must only contain letters, numbers, dashes and underscores',
            'cpassword.min:6' => 'The confirm password must be at least 6 characters',
        ];
    }
}
