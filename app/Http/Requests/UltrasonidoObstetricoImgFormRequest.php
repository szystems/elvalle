<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UltrasonidoObstetricoImgFormRequest extends FormRequest
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
            'idultrasonido_obstetrico'=>'required',
            'imagen'=>'required|mimes:jpg,jpeg,bmp,png|max:10000',
            'descripcion'=>'max:300'
        ];
    }
}
