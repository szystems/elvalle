<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HistoriaFormRequest extends FormRequest
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
            'fecha'=>'required', 
            'estado_civil'=>'max:15', 
            'procedencia'=>'max:50', 
            'escolaridad'=>'max:100', 
            'tel_emergencia'=>'max:20', 
            'profesion'=>'max:50',
            'motivo'=>'max:100',
            'historia'=>'max:1000'
        ];
    }
}
