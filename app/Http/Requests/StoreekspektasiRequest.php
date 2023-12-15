<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreekspektasiRequest extends FormRequest
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
            'txtekspektasi'=>'required|unique:ekspektasis,ekspektasi',
            'txtdefinisi'=>'required|unique:ekspektasis,definisi'
        ];
    }
    public function messages():array
    {
        return[
            'txtekspektasi.required' => ':attribute Tidak Boleh Kosong',
            'txtekspektasi.unique'=>'Data :attribute Sudah Ada',
            'txtdefinisi.required' => ':attribute Tidak Boleh Kosong',
            'txtdefinisi.unique'=>'Data :attribute Sudah Ada'
           
        ];
    }
    public function attributes():array
    {
        return[
            'txtekspektasi' =>'Ekspektasi',
            'txtdefinisi' =>'Definisi'
            
        ];
    }
}
