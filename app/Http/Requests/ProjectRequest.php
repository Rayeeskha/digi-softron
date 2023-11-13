<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
        $image = ['required'];
        if (request()->id > 0) {
            $image= ['mimes:jpeg,jpg,png,gif|max:10000'];
        }

        return [
            'projectype_id' => ['required'],
            'project_name' => ['required'],
            'description' => ['required'],
            'image' => $image,
        ];
    }
}
