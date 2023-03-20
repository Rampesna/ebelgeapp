<?php

namespace App\Http\Requests\Api\Admin\UserController;

use App\Http\Requests\Api\BaseApiRequest;

class UpdateRequest extends BaseApiRequest
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
            'id' => 'required',
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
            'title' => 'string|nullable',
            'phone' => 'string|nullable',
            'suspend' => 'required|int',
        ];
    }
}
