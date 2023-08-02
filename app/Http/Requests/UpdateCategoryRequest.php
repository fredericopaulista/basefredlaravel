<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:10|max:70',
            'title' => 'required|min:10|max:70',
            'description' => 'required|min:10',
            'seoDescription' => 'required|min:1|max:260',
            'image' => 'mimes:png,jpg,webp,jpeg',

            'main' => 'boolean',
            'print' => 'boolean'
        ];
    }
}
