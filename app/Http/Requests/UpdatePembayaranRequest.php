<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePembayaranRequest extends FormRequest
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
            'id_petugas' => 'nullable',
            'id_spp' => 'required',
            'nisn' => 'required|numeric|min:10',
            'tgl_bayar' => 'nullable',
            'bulan_dibayar' => 'required',
            'tahun_dibayar' => 'nullable',
            'jumlah_bayar' => 'required|numerics'
        ];
    }
}
