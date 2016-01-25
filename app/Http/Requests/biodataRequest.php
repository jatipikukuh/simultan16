<?php

namespace App\Http\Requests;


use App\Http\Requests\Request;
use Response;

class biodataRequest extends Request
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
            'nama_lengkap'      => 'required|min:5|max:30',
            'alamat'            => 'required|min:10|max:50',
            'e_mail'            => 'required|email|max:40',
            'nomor_hp'          => 'required|min:11|max:15',
            'nomor_induk_siswa' => 'required|max:20',
            'asal_sekolah'      => 'required|max:40',
            'pilihan'           => '',
            'jurusan_1'         => 'required|max:50',
            'jurusan_2'         => 'required|max:50',
            'image'             => 'mimes:jpg,jpeg,png|max:300|required'
        ];
    }
}
