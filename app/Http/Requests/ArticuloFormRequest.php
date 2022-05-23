<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloFormRequest extends FormRequest
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
            'idcategoria'=>'required',
            'codigo'=>'max:50|nullable',
            'nombre'=>'required|max:45',
            'minimo'=>'required|numeric',
            'bodega'=>'max:100',
            'ubicacion'=>'max:45',
            'descripcion'=>'max:200',
            'imagen'=>'mimes:jpg,jpeg,bmp,png|max:10000',
        ];
    }
}
