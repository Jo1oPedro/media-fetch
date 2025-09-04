<?php

namespace App\Http\Requests\Api\MediaController;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMediaStatusFormRequest extends FormRequest
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
            "s3_url" => ["required", "url", "unique:media,s3_url"],
            "status" => ["required", "string"]
        ];
    }
}
