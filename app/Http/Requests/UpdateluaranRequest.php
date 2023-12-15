<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateluaranRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtluaran'=>'required',
            'txtdefinisi'=>'required',
            'txtekspekID'=>'required'
        ];
    }
    public function messages():array
    {
        return[
            'txtluaran.required' => ':attribute Tidak Boleh Kosong',
            'txtdefinisi.required' => ':attribute Tidak Boleh Kosong',
            'txtekspekID.required' => ':attribute Tidak Boleh Kosong',
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
