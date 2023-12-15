<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdategejalaRequest extends FormRequest
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
            'txtgejala'=>'required',
            'txtsubjek'=>'required',
            'txtobjek'=>'required',
            'txtloinc'=>'required|numeric'
        ];
    }
    public function messages():array
    {
        return[
            'txtgejala.required' => ':attribute Tidak Boleh Kosong',
            'txtsubjek.required'=>':attribute Tidak Boleh Kosong',
            'txtobjek.required'=>':attribute Tidak Boleh Kosong',
            'txtloinc.required'=>':attribute Tidak Boleh Kosong'
           
        ];
    }

    public function attributes():array
    {
        return[
            'txtgejala' =>'Gejala',
            'txtsubjek' =>'Subjek',
            'txtobjek' =>'Objek',
            'txtloinc'=>'Kode loinc'
        ];
    }
}
