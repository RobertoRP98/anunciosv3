<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReportRequest extends FormRequest
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
            'post_id' => ['required', 'exists:posts,id'],
            'reason' => ['required', 'in:Incumple politicas,Trafico,Datos falsos,Contenido ofensivo,Estafa o fraude,Otro'],
            'contact' => 'nullable|email',
            'description' => 'nullable|max:2000',
            'terms_accepted' => ['required_with:contact', 'sometimes', 'boolean'],
        ];
    }
}
