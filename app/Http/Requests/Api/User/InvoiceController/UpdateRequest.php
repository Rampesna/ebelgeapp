<?php

namespace App\Http\Requests\Api\User\InvoiceController;

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
            'companyId' => 'required',
            'typeId' => 'required',
            'currencyId' => 'required',
            'currency' => 'required',
            'vatDiscountId' => 'required',
            'datetime' => 'required',
            'vatIncluded' => 'required',
        ];
    }
}
