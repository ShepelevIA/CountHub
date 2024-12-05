<?php

namespace App\Http\Requests\Brand;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'type_equipment_id' => 'required|integer|exists:type_equipments,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле обязательно для заполнения',
            'type_cabinet_id.required' => 'Поле обязательно для заполнения',
            'type_cabinet_id.integer' => 'Поле заполняется только числами',
            'type_cabinet_id.exists' => 'Поле не соответствует данным из другой таблицы',
        ];
    }
}
