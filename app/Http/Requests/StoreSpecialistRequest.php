<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSpecialistRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'bail',
                'required',
                'string',
                'unique:App\Models\specialist,name',
            ],
        ];
    }
    public function messages(): array
    {
        return [
            'required' => ':attribute bắt buộc phải điền',
            'unique' => ':attribute đã được dùng',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'Tên',
        ];
    }
}
