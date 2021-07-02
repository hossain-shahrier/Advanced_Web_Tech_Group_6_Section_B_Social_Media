<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyRequest extends FormRequest
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
            'firstname'=>'required|between:3,30|regex:/^[a-zA-ZÑñ\s]+$/',
            'lastname'=>'required|between:3,30|regex:/^[a-zA-ZÑñ\s]+$/',
            'email'=>'required|between:10,50|email',
            'phone'=>'required|min:11|numeric',
            'address' => 'required|between:5,100',
            'addfile' => 'required|max:10000|mimes:doc,docx,pdf',
            'documents' => 'required|max:10000|mimes:doc,docx,pdf',
            
        ];
    }
}
