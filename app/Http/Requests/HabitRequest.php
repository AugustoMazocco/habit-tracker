<?php

namespace App\Http\Requests;

;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class HabitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|string'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo é obrigatório',
            'name.max' => 'O campo deve ter no máximo 255 caracteres',
            'name.string' => 'O campo deve ser um texto'
        ];
    }
}
