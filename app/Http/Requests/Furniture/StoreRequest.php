<?php

namespace App\Http\Requests\Furniture;

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
            'inventory_number' => 'required|numeric',
            'furniture_type_id' => 'required|integer|exists:type_equipments,id',
            'cabinet_id' => 'required|integer|exists:cabinets,id',
            'color' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'inventory_number.required' => 'Поле обязательно для заполнения',
            'inventory_number.numeric' => 'Поле заполняется только числами',
            'furniture_type_id.required' => 'Поле обязательно для заполнения',
            'furniture_type_id.integer' => 'Поле заполняется только числами',
            'furniture_type_id.exists' => 'Поле не соответствует данным из другой таблицы',
            'cabinet_id.required' => 'Поле обязательно для заполнения',
            'cabinet_id.integer' => 'Поле заполняется только числами',
            'cabinet_id.exists' => 'Поле не соответствует данным из другой таблицы',
            'color.required' => 'Поле обязательно для заполнения',
            'color.string' => 'Поле заполняется только буквами',
        ];
    }
}
