<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => ['required', 'min:5'],
            'description' => ['required', 'min:5'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Error.. Title is required.",
            'title.min' => "Error.. Title should be more than 5 char.",
            'description.required' => "Error.. Description is required.",
            'description.min' => "Error.. Description should be more than 5 char.",
        ];
    }
}
