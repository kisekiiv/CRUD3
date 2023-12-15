<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatekriteriaHasilRequest extends FormRequest
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
            'txtkriteria'=>'required',
            'txtkode'=>'required'
        ];
    }
    public function messages():array
    {
        return[
            'txtkriteria.required' => ':attribute Tidak Boleh Kosong',
            'txtkode.required' => ':attribute Tidak Boleh Kosong',
            
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
