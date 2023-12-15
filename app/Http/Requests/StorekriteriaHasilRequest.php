<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorekriteriaHasilRequest extends FormRequest
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
            'txtkriteria'=>'required|unique:kriteria_hasils,kriteria_hasil',
            'txtkode'=>'required|unique:kriteria_hasils,kode_kelompok_kriteria'
        ];
    }
    public function messages():array
    {
        return[
            'txtkriteria.required' => ':attribute Tidak Boleh Kosong',
            'txtkriteria.unique'=>'Data :attribute Sudah Ada',
            'txtkode.required' => ':attribute Tidak Boleh Kosong',
            'txtkode.unique'=>'Data :attribute Sudah Ada'
        ];
    }

    public function attributes():array
    {
        return[
            'txtkriteria' =>'Kriteria',
            'txtkode' =>'Kode',
        ];
    }
}
