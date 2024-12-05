<?php

namespace App\Http\Requests\Building;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
            'filter' => 'array|nullable',
            'query' => 'string|nullable',
            'sort' => 'array|nullable',
//            'sort' => 'string|nullable',
//            'order' => 'string|nullable',
        ];
    }

//    public function messages()
//    {
//        return [
//            'title.required' => 'Поле обязательно для заполнения',
//            'address.required' => 'Поле обязательно для заполнения',
//            'count_floor.required' => 'Поле обязательно для заполнения',
//            'count_floor.integer' => 'Поле заполняется только числами',
//        ];
//    }
}
