<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FisicoFormRequest extends FormRequest
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
            'motivo_consulta'=>'required|max:1000',
            'peso'=>'required',
            'talla'=>'required',
            'perimetro_abdominal'=>'required',
            'frecuencia_cardiaca'=>'required|integer',
            'frecuencia_respiratoria'=>'required|integer',
            'temperatura'=>'required|integer',
            'saturacion_oxigeno'=>'string|integer',
            //pie de pagina
            'impresion_clinica'=>'max:500',
            'plan_diagnostico'=>'max:500',
            'plan_tratamiento'=>'max:500',
            'recomendaciones_generales'=>'max:500',
            'recomendaciones_especificas'=>'max:500',
            //resultados
            'cabeza_cuello'=>'max:200',
            'tiroides'=>'max:200',
            'mamas_axilas'=>'max:200',
            'cardiopulmonar'=>'max:200',
            'abdomen'=>'max:500',
            'genitales_externos'=>'max:200',
            'especuloscopia '=>'max:200',
            'tacto_bimanual'=>'max:500',
            'miembros_inferiores'=>'max:200'

        ];
    }
}
