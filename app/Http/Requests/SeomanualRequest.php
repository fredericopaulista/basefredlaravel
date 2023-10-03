<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeomanualRequest extends FormRequest
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
            'seo_title' => 'required|min:10|max:70',
            'seo_url' => 'required|url',
            'seo_description' => 'required|min:10',
            'seo_og_title' => 'required|min:10',
            'seo_og_description' => 'required|min:10',
            'seo_og_image' => 'mimes:png,jpg,webp,jpeg',

        ];
    }
}
