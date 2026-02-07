<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ForbiddenWords;

class StorePostRequest extends FormRequest
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
            'category_id' => 'required',
            'state_id' => 'required',
            'municipio_id' => 'required',
            'plan_id' => 'required',
            'title' => ['required','max:60', new ForbiddenWords],
            'description' => ['required','min:40','max:500',new ForbiddenWords],
        ];
    }
}
