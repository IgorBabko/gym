<?php

namespace Gym\Http\Requests;

use Gym\Http\Requests\Request;
use Gym\Page;

class PageFormRequest extends Request
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
            'name' => 'required|alpha_num_space|unique:pages,name,'.request()->input('id'),
            'description' => 'required|string',
            'text' => 'required|string'
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'alpha_num_space' => 'Name field should contain letters, digits and spaces.',
        ];
    }
}
