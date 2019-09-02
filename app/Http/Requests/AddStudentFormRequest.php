<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddStudentFormRequest extends FormRequest
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
            'name'=>'required',
            'image'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'religion'=>'required',
            'nationality'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'password1'=>'required',
            'password2'=>'required',

            // this is for parent informaton

            'father_name'=>'required',
            'father_image'=>'required',
            'mother_name'=>'required',
            'mobile_number'=>'required',
            'papassword1'=>'required',
            'papassword2'=>'required',
            'class'=>'required',

            // this is for address
            //this is for present address

            'precare_of'=>'required',
            'preaddress'=>'required',
            'predistrict'=>'required',
            'prethana'=>'required',
            'previllage'=>'required',
            'prepost'=>'required',
            'prepost-code'=>'required',

            //this is for parmenent address
            'parcare_of'=>'required',
            'paraddress'=>'required',
            'pardistrict'=>'required',
            'parthana'=>'required',
            'parvillage'=>'required',
            'parpost'=>'required',
            'parpost-code'=>'required',






        ];
            
    }
}
