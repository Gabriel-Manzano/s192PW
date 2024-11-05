<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorUsuarios extends FormRequest{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'txtcorreo'=>'required|email',
            'txtpassword'=>'required',
            'txtedad'=>'required|numeric'
        ];
    }
}