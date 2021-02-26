<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePembayaranRequest extends FormRequest
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
            'id_petugas' => 'required',
            'id_spp' => 'required',
            'nisn' => 'required|numeric|max:10|min:10',
            'tgl-bayar' => 'required|min:2|max:1',
            'bulan_bayar' => 'required',
            'tahun_bayar' => 'required|max:4|min:4',
            'jumlah_bayar' => 'required|numeric'
        ];
    }
}
