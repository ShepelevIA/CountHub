<?php

namespace App\Http\Requests\Equipment;

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
            'model_id' => 'required|integer|exists:type_equipments,id',
            'cabinet_id' => 'required|integer|exists:cabinets,id',
        ];
    }

    public function messages()
    {
        return [
            'inventory_number.required' => 'Поле обязательно для заполнения',
            'inventory_number.numeric' => 'Поле заполняется только числами',
            'model_id.required' => 'Поле обязательно для заполнения',
            'model_id.integer' => 'Поле заполняется только числами',
            'model_id.exists' => 'Поле не соответствует данным из другой таблицы',
            'cabinet_id.required' => 'Поле обязательно для заполнения',
            'cabinet_id.integer' => 'Поле заполняется только числами',
            'cabinet_id.exists' => 'Поле не соответствует данным из другой таблицы',
        ];
    }
}
