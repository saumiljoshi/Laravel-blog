<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PostCreate extends FormRequest
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
            'categories_id'=>[
                'required'
            ],
            'user_id'=>[
                'required'
            ],
            'title'=>[
                'required',
                Rule::unique('posts')
            ],
            'description'=>[
                'required'
            ],

        ];

    }
}
