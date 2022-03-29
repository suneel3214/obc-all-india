<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // return [
        //     'email' => 'required|email|unique:members',
        //     'mobile' => 'required|mobile|unique:members',
        //     'aadhar_no' => 'required|aadhar_no|unique:members',
        //     'pan_no' => 'required|pan_no|unique:members',

        // ];
    }
}
