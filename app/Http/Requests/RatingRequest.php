<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RatingRequest extends FormRequest
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
            'kode_rating' => 'required',
            'nilai_rating' => 'required',
            'keterangan' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'kode_rating.required'    => 'Kode Rating Belum Diisi',
            'nilai_rating.required'     => 'Nilai Rating Belum Diisi',
            'keterangan.required'     => 'Keterangan Belum Diisi',
        ];
    }
}
