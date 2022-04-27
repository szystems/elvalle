<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecetaFormRequest extends FormRequest
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
            'fecha'=>'required',
            'iddoctor'=>'required',
            'idpaciente'=>'required',
            'idusuario'=>'required',
            'cantidad'=>'required',
            'presentacion'=>'required',
            'medicamento'=>'required'
        ];
    }
}
