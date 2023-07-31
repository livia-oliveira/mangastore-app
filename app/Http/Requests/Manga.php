<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Manga extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return [
            'title' => 'required|string',
            'number_of_chapters' => 'required|integer',
            'state' => 'required|boolean',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}
