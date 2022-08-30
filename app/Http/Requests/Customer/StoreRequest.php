<?php

namespace App\Http\Requests\Customer;

use App\Models\Specialist;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name_booking' => [
                'nullable',
                'string',
            ],
            'phone_booking' => [
                'nullable',
                'string',
            ],
            'name_patient' => [
                'bail',
                'required',
                'string',
            ],
            'phone_patient' => [
                'bail',
                'required',
                'numeric',
                'unique:customers,phone_patient'
            ],
            'email' => [
                'bail',
                'required',
                'email',
                'unique:customers,email'
            ],
            'gender' => [
                'required',
                'boolean',
            ],
            'birth_date' => [
                'bail',
                'required',
                'date',
                'before:today',
            ],
            'description' => [
                'bail',
                'required',
                'max:500',
            ],
            'time_doctor_id' => [
                'required',
                'numeric',
            ],
            'price' => [
                'required',
                'numeric',
    ]
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute bắt buộc phải điền',
            'unique' => ':attribute đã được dùng',
            'numeric' => ':attribute phải là số',
            'max: 500' => ':attribute tối đa 500 kí tự',
            'before:today' => ':attribute không hợp lệ',
        ];
    }

    public function attributes(): array
    {
        return [
            'name_patient' => 'Tên bệnh nhân',
            'phone_patient' => 'Số điện thoại',
            'birth_date' => 'Ngày sinh',
            'description' => 'Tình trạng bệnh nhân',
        ];
    }
}
