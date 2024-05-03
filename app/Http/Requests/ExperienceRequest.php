<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
            'member_id' => ['required', 'string'],
            'title' => ['required', 'string'],
            'employment_type' => ['required', 'string', 'in:Full-time,Part-time,Self-employed,Freelance,Contract,Internship,Apprenticeship,Seasonal'],
            'company_name' => ['required', 'string'],
            'location' => ['required', 'string'],
            'location_type' => ['required', 'string', 'in:On-site,Hybride,Remote'],
            'start_date' => ['required', 'date'],
            'end_date' => ['nullable', 'date', 'after_or_equal:start_date'],
            'description' => ['required', 'string'],
        ];
    }
}
