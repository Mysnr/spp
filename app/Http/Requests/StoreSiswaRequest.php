<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSiswaRequest extends FormRequest
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
            'nisn'  => 'required|numeric|unique:siswa|min:9',
            'nis'   => 'required|numeric|unique:siswa|min:9',
            'nama'  => 'required',
            'id_kelas'  => 'required',
            'id_spp'    => 'required',
            'no_telp'   => 'required|numeric|min:11',
            'alamat'    => 'required|min:5'
        ];
    }
}
