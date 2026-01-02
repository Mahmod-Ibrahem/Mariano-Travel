<?php

namespace Modules\Category\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $rules = [
            'type' => 'bail|required',
            'header' => 'bail|nullable',
            'bg_header' => 'bail|nullable',
            'description' => 'bail|nullable',
            'name' => 'bail|nullable',
            'title_meta' => 'bail|required',
            'description_meta' => 'bail|required',
            'country_id' => 'bail|required|exists:countries,id',
        ];

        if ($this->isMethod('POST')) {
            $rules['image'] = 'bail|required|image|mimes:jpeg,png,jpg,webp';
        } else {
            $rules['image'] = 'bail|nullable|image|mimes:jpeg,png,jpg,webp';
        }
        return $rules;
    }
}
