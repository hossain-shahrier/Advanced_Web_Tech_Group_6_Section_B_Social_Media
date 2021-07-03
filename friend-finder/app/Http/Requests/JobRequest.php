<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            // 'jobtitle' => 'required|between:5,30|regex:/^[a-zA-ZÑñ\s]+$/',
            'jobtitle' => 'required|regex:/^[a-zA-ZÑñ\s]+$/',
            'jobinfo' => 'required|between:5,255',
            'jobcategory' => 'required|min:5',
            'jobtype' => 'required|min:5',
            'joblocation' => 'required|between:5,100',
            'jobvacancy' => 'required|numeric',
            
        ];
    }
}
