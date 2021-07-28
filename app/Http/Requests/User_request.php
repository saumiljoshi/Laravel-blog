<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class User_request extends FormRequest
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
            'name'=>[
                'required'
            ],
            'email'=>[
                'required',
                'email',
                Rule::unique('users'),
            ],
            'password'=>[
                'required'
            ],
            'phone_no'=>[
                'required',
                'max:10'
            ],
            'address'=>[
                'required',
                'max:10'
            ],
            'city'=>[
                'required',
                'max:10'
            ],
           'state' =>[
                'required',
            ],
            'Zip' =>[
                'required',
            ]
        ];
    }
}
