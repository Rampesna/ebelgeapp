<?php

namespace App\Http\Requests\Api\User\EInvoiceReportController;

use App\Http\Requests\Api\BaseApiRequest;

class InboxRequest extends BaseApiRequest
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
            'startDate' => 'required',
            'endDate' => 'required',
        ];
    }
}