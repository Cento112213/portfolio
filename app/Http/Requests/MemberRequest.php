<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'domain' => ['required', 'unique:members'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:member_details'],
            'linkedin' => ['required', 'string'],
            'contact_number' => ['required', 'string'],
            'profile_photo' => ['required', 'image', 'mimes:jpeg,png,jpg,gif'],
        ];
    }
}
