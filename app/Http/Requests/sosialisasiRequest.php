<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class sosialisasiRequest extends Request
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
            'hari'      => 'requrid|min:3|max:10',
            'tanggal'   => 'required|min:6|max:20',
            'sekolah'   => 'required|min:6|max:20',
            'konfirmasi'=> 'required'
        ];
    }
}
