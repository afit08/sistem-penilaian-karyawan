<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DivisiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'kode_divisi' => 'required',
            'divisi' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'kode_divisi.required'    => 'Kode Divisi Belum Diisi',
            'divisi.required'     => 'Divisi Belum Diisi',
        ];
    }
}
