<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'name' => [
                'required', // Field must be present and not empty
                'string', // Must be a string
                'max:255', // Maximum length of 255 characters
                'regex:/^[\p{L} .\'-]+$/u', // Allows letters, spaces, periods, apostrophes, and hyphens
            ],
            'address' => [
                'required', // Field must be present and not empty
                'string', // Must be a string
                'min:10', // Minimum length of 10 characters for a valid address
                'max:255', // Maximum length of 255 characters
            ],
            'phone' => [
                'required', // Field must be present and not empty
                'string', // Must be a string
                'max:15', // Maximum length of 15 characters
                'regex:/^(\+?\d{1,3}[- ]?)?\d{10}$/', // Allows optional international code, followed by 10 digits
            ],
        ];
    }
}
