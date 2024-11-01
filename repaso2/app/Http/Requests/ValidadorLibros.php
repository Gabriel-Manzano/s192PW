<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorLibros extends FormRequest
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
            'txtISBN'=>'required|numeric|digits:13',
            'txttitulo'=>'required|string|max:150',
            'txtautor'=>'required|string',
            'txtpaginas'=>'required|integer|min:1',
            'txtaño'=>'required|integer|digits:4|min:1000|max:'.date('Y'),
            'txteditorial'=>'required|string',
            'txtemail'=>'required|email'
        ];
    }
}
