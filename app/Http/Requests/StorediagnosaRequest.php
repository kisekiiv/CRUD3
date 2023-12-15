<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorediagnosaRequest extends FormRequest
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
            'txtkode'=>'required|unique:diagnosas,kode_diagnosa',
            'txtnama'=>'required|unique:diagnosas,nama_diagnosa',
            'txtdefinisi'=>'required|unique:diagnosas,definisi',
            'txtuser'=>'required'
        ];
    }
    public function messages():array
    {
        return[
            'txtkode.required' => ':attribute Tidak Boleh Kosong',
            'txtkode.unique'=>'Data :attribute Sudah Ada',
            'txtnama.required'=>'Data :attribute Tidak Boleh Kosong',
            'txtnama.unique'=>'Data :attribute Sudah Ada',
            'txtdefinisi.required'=>':attribute Tidak Boleh Kosong',
            'txtdefinisi.unique'=>'Data :attribute  Sudah Ada',
            'txtuser.required'=>':attribute Tidak Boleh Kosong'
        ];
    }

    public function attributes():array
    {
        return[
            'txtkode' =>'Kode',
            'txtnama' =>'Nama Diagnosa',
            'txtdefinisi' =>'Definisi Diagnosa',
            
        ];
    }
}
