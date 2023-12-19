<?php

namespace App\Http\Requests\Docs\Edit;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class MyDocsEditRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'type_id' => ['exists:types,id'],
            'file' => ['file'],
        ];
    }

    public function messages(): array
    {
        return [
            'exists' => 'O campo :attribute não existe em nossos registros internos.',
            'file' => 'O campo :attribute precisa conter um arquivo válido.'
        ];
    }
}
