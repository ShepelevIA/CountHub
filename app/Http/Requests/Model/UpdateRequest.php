<?php

namespace App\Http\Requests\Model;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'type_brand_id' => 'required|integer|exists:brands,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле обязательно для заполнения',
            'type_brand_id.required' => 'Поле обязательно для заполнения',
            'type_brand_id.integer' => 'Поле заполняется только числами',
            'type_brand_id.exists' => 'Поле не соответствует данным из другой таблицы',
        ];
    }
}
