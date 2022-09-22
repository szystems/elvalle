<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColposcopiaFormRequest extends FormRequest
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
            'fecha'=>'required|date_format:d-m-Y|date',
            'union_escamoso_cilindrica'=>'max:5',
            'colposcopia_insatisfactoria'=>'max:100',
            'hd_eap'=>'boolean',
            'hd_eam'=>'boolean',
            'hd_leucoplasia'=>'boolean',
            'hd_punteando'=>'boolean',
            'hd_mosaico'=>'boolean',
            'hd_vasos'=>'boolean',
            'hd_area'=>'boolean',
            'hd_otros'=>'boolean',
            'hd_otros_especificar'=>'max:300',
            'carcinoma_invasor'=>'max:5',
            'otros_hallazgos'=>'max:500',
            'dcn_insatisfactoria'=>'boolean',
            'dcn_insatisfactoria_especifique'=>'max:300',
            'hallazgos_nomales'=>'max:300',
            'inflamacion_infeccion'=>'boolean',
            'inflamacion_infeccion_especifique'=>'max:300'
        ];
    }
}
