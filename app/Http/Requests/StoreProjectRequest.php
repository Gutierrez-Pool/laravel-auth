<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'unique:projects,title|max:255|required',
            'content' => 'required',
            'cover_image' => 'nullable'
        ];
    }

    public function messages(): array
    {
        return [
            'title.unique' => 'Il titolo è in uso',
            'title.max' => 'Il titolo deve avere massimo :max caratteri',
            'title.required' => 'Devi inserire un titolo',

            'content.required' => 'Devi inserire il contenuto',

            'cover_image' => ''
        ];
    }
}
