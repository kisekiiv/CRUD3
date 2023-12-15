<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoregejalaRequest extends FormRequest
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
            'txtgejala'=>'required|unique:gejalas,gejala',
            'txtsubjek'=>'required|unique:gejalas,jenis_subjektif',
            'txtobjek'=>'required|unique:gejalas,jenis_objektif',
            'txtloinc'=>'required|numeric|unique:gejalas,kode_loinc'
        ];
    }
    public function messages():array
    {
        return[
            'txtgejala.required' => ':attribute Tidak Boleh Kosong',
            'txtgejala.unique'=>'Data :attribute Sudah Ada',
            'txtsubjek.required'=>':attribute Tidak Boleh Kosong',
            'txtsubjek.unique'=>'Data :attribute Sudah Ada',
            'txtobjek.required'=>':attribute Tidak Boleh Kosong',
            'txtobjek.unique'=>'Data :attribute Sudah Ada',
            'txtloinc.required'=>':attribute Tidak Boleh Kosong',
            'txtloinc.unique'=>'Data :attribute Sudah Ada'
        ];
    }

    public function attributes():array
    {
        return[
            'txtgejala' =>'Gejala',
            'txtsubjek' =>'Subjek',
            'txtobjek' =>'Objek',
            'txtloinc' =>'Kode loinc'
            
        ];
    }
}
