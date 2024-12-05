<?php

namespace App\Http\Requests\Cabinet;

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
            'number_cabinet' => 'required|integer',
            'floor' => 'required|integer|exists:floors,id',
            'type_cabinet_id' => 'required|integer|exists:cabinet_types,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле обязательно для заполнения',
            'number_cabinet.required' => 'Поле обязательно для заполнения',
            'number_cabinet.integer' => 'Поле заполняется только числами',
            'floor.required' => 'Поле обязательно для заполнения',
            'floor.integer' => 'Поле заполняется только числами',
            'floor.exists' => 'Поле не соответствует данным из другой таблицы',
            'type_cabinet_id.required' => 'Поле обязательно для заполнения',
            'type_cabinet_id.integer' => 'Поле заполняется только числами',
            'type_cabinet_id.exists' => 'Поле не соответствует данным из другой таблицы',
        ];
    }
}
