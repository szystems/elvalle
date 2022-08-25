<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IncontinenciauCuestionarioFormRequest extends FormRequest
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
            'idincontinenciau'=>'required',
            'fecha'=>'date',

            'frecuencia'=>'required|integer',
            'cantidad'=>'required|integer',
            'medida'=>'required|integer',
            'nunca'=>'integer',
            'antes_servicio'=>'integer',
            'toser'=>'integer',
            'duerme'=>'integer',
            'esfuerzos'=>'integer',
            'termina'=>'integer',
            'sinmotivo'=>'integer',
            'continua'=>'integer'
            
        ];
    }
}
