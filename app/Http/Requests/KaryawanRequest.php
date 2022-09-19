<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KaryawanRequest extends FormRequest
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
            'nip' => 'required',
            'nama_karyawan' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'jabatan' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nip.required'     => 'NIP Belum Diisi',
            'nama_karyawan.required'     => 'Nama Karyawan Belum Diisi',
            'alamat.required'     => 'Alamat Belum Diisi',
            'tgl_lahir.required'     => 'Tanggal Lahir Belum Diisi',
            'jabatan.required'     => 'Jabatan Belum Diisi',
        ];
    }
}
