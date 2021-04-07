<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSiswaRequest extends FormRequest
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
            'nisn'  => 'required|numeric',
            'nis'   => 'required|numeric',
            'nama'  => 'required',
            'id_kelas'  => 'required',
            'id_spp'    => 'required',
            'no_telp'   => 'required|numeric|min:11',
            'alamat'    => 'required|min:5'
        ];
    }
}
