<?php

namespace sisVentasWeb\Http\Requests;

use sisVentasWeb\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class CategoriaFormRequest extends FormRequest
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
            'nombre'=>'required|max:45',
            'descripcion'=>'max:500',
            'imagen'=>'mimes:jpg,jpeg,bmp,png|max:10240'
        ];
    }
}
