<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'name' => ['required', 'min:4', 'max:50'],
            'description' => ['required', 'min:5', 'max:300'],
            'start_date' => ['reqired', 'date'],
            'end_date' => ['nullable', 'date'],
            'status' => ['required', 'in:0,1'],
        ];
    }
}
