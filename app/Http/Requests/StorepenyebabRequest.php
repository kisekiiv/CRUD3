<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorepenyebabRequest extends FormRequest
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
            'txtpenyebab'=>'required|unique:penyebabs,penyebab'
        ];
    }
    public function messages():array
    {
        return[
            'txtpenyebab.required' => ':attribute Tidak Boleh Kosong',
            'txtpenyebab.unique'=>'Data :attribute Sudah Ada'
        ];
    }

    public function attributes():array
    {
        return[
            'txtpenyebab' =>'Penyebab',
            
        ];
    }
}
