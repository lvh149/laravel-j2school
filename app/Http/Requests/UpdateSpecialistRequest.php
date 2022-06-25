<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSpecialistRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'bail',
                'required',
                'string',
                Rule::unique(specialists::class)->ignore($this->specialist),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute bắt buộc phải điền',
            'unique'   => ':attribute đã được dùng',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'Tên',
        ];
    }
}
