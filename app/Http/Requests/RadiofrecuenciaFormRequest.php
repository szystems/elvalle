<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RadiofrecuenciaFormRequest extends FormRequest
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
            'fototipo_piel'=>'max:5',
            'implantes'=>'max:5',
            'implantes_tipo'=>'max:50',
            'marcapasos'=>'max:5',
            'periodo_gestacion'=>'max:200',
            'glaucoma'=>'max:200',
            'neoplasias_procesos_tumorales'=>'max:200',
            'portador_epilepsia'=>'max:200',
            'antecedentes_fotosensibilidad'=>'max:200',
            'tratamientos_acidos'=>'max:200',
            'medicamentos_fotosensibles'=>'max:200',
            'resumen'=>'max:500'
        ];
    }
}
