<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KategoriRequest extends FormRequest
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
            'kode_kategori' => 'required',
            'nama_kategori' => 'required',
            'bobot' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'kode_kategori.required'    => 'Kode Kategori Belum Diisi',
            'nama_kategori.required'     => 'Nama Kategori Belum Diisi',
            'bobot.required'     => 'Bobot Belum Diisi',
        ];
    }
}
