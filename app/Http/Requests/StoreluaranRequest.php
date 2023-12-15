<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreluaranRequest extends FormRequest
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
            'txtluaran'=>'required|unique:luarans,luaran',
            'txtdefinisi'=>'required|unique:luarans,definisi',
            'txtekspekID'=>'required|unique:luarans,ekspektasi_id'
        ];
    }
    public function messages():array
    {
        return[
            'txtluaran.required' => ':attribute Tidak Boleh Kosong',
            'txtluaran.unique'=>'Data :attribute Sudah Ada',
            'txtdefinisi.required' => ':attribute Tidak Boleh Kosong',
            'txtdefinisi.unique'=>'Data :attribute Sudah Ada',
            'txtekspekID.required' => ':attribute Tidak Boleh Kosong',
            'txtekspekID.unique'=>'Data :attribute Sudah Ada'
        ];
    }
    public function attributes():array
    {
        return[
            'txtluaran' =>'Luaran',
            'txtdefinisi' =>'definisi',
            'txtekspekID' =>'ekspekID',
        ];
    }
}
