<?php

namespace Modules\SuperCategory\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuperCategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Super category name is required',
        ];
    }
}
