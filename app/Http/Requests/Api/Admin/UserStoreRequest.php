<?php

namespace App\Http\Requests\Api\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'first_name' => 'required|string|between:2,255',
            'last_name' => 'nullable|string|between:2,255',
            'image' => 'nullable|string',
            'email' => 'required|email|max:255',
            'phone' => ['required', 'string', 'numeric', 'regex:/09\d{9}/i'],
            'password' => 'required|string|min:8|max:16',
        ];
    }
}
