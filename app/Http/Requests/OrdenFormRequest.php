<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdenFormRequest extends FormRequest
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
            'idpaciente'=>'required',
            'iddoctor'=>'required',
            'idusuario'=>'required',
            'fecha'=>'required',
            'codigoeeps'=>'max:20',
            'codigopapanicolau'=>'max:20',
            'observaciones'=>'max:500',
            'estado_orden'=>'required|max:20',
            'estado'=>'required|max:20'
        ];
    }
}
