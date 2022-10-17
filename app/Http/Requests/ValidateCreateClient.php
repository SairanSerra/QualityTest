<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateCreateClient extends FormRequest
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
            'name'          => ['required'],
            'document'      => ['required'],
            'codigo'        => ['required'],
            'idclient'      => ['required'],
            'cep'           => ['required'],
            'street'        => ['required'],
            'distric'       => ['required'],
            'city'          => ['required'],
            'state'         => ['required'],
            'number'        => ['required'],
            'complement'    => [],
            'phone'         => ['required'],
            'limitCredit'   => ['required'],
            'validate'      => ['required']         
        ];
    }
}
