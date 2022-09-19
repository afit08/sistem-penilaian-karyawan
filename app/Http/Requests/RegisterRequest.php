<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'nama_karyawan' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'tgl_lahir' => 'required',
            'nip' => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_karyawan.required'    => 'Nama Belum Diisi',
            'alamat.required'     => 'Alamat Belum Diisi',
            'no_tlp.required'     => 'Nomor Telepon Belum Diisi',
            'tgl_lahir.required'     => 'Tanggal Lahir Belum Diisi',
            'nip.required'     => 'NIP Belum Diisi',
            'password.required'     => 'Password Belum Diisi',
        ];
    }
}
