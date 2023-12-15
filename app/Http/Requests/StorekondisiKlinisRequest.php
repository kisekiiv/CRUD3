<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorekondisiKlinisRequest extends FormRequest
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
            'txtkondisi'=>'required|unique:kondisi_klinis,kondisi',
            'txtkode'=>'required|unique:kondisi_klinis,kode_icd10'
        ];
    }
    public function messages():array
    {
        return[
            'txtkondisi.required' => ':attribute Tidak Boleh Kosong',
            'txtkondisi.unique'=>'Data :attribute Sudah Ada',
            'txtkode.required' => ':attribute Tidak Boleh Kosong',
            'txtkode.unique'=>'Data :attribute Sudah Ada'
        ];
    }

    public function attributes():array
    {
        return[
            'txtkondisi' =>'Kondisi',
            'txtkode' =>'Kode',
        ];
    }
}
