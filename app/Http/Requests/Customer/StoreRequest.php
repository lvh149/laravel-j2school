<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name_booking' => [
                'string',
            ],
            'phone_booking' => [
                'string',
            ],
            'name_patient' => [
                'required',
                'string',
            ],
            'phone_patient' => [
                'required',
                'string',
            ],
            'email' => [
                'required',
                'email',
            ],
            'gender' => [
                'required',
                'boolean',
            ],
            'birth_date' => [
                'required',
                'date',
                'before:today',
            ],
        ];
    }
}
