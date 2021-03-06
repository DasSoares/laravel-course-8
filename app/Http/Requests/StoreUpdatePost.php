<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePost extends FormRequest
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
            //existe 2 tipos de fazer as validações dos campos
            'title' => 'required|min:3|max:160', // 1
            'content' => ['required','min:5', 'max:1000'], // 2
        ];
    }
}
