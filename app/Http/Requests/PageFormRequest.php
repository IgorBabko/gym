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
            'name' => 'required|string|unique:pages',
            'description' => 'required|string',
            'text' => 'required|string'
        ];
    }
}
