<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatediagnosaRequest extends FormRequest
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
            'txtkode'=>'required',
            'txtnama'=>'required',
            'txtdefinisi'=>'required',
            'txtuser'=>'required',
            
        ];
    }
    public function messages():array
    {
        return[
            'txtkode.required' => ':attribute Tidak Boleh Kosong',
            'txtnama.required'=>':attribute Tidak Boleh Kosong',
            'txtdefinisi.required'=>':attribute Tidak Boleh Kosong',
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
