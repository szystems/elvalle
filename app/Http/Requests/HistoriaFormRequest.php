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
            'motivo'=>'max:300',
            'historia'=>'max:1000',

            'ciclos_regulares'=>'max:5',
            'histerectomia'=>'max:5',
            'mastopatia'=>'max:5',
            'cardiopatias'=>'max:5',
            'cafelea_vascular'=>'max:5',
            'tabaquismo'=>'max:5',
            'tratamiento_quimioradiacion'=>'max:5',
            'ejercicio'=>'max:5',

            'affecciones_ginecologicas'=>'max:5',
            'cancer'=>'max:5',
            'varices_trombosis'=>'max:5',
            'enfermedades_hepaticas'=>'max:5',
            'alcoholismo'=>'max:5',
            'cafeista'=>'max:5',
            'trh'=>'max:5',
            'otros'=>'max:5',
            'otros_texto'=>'max:200',

            'cardiopatias_50anos'=>'max:5',
            'cardiopatias_50anos_quien'=>'max:50',
            'osteoporosis'=>'max:5',
            'osteoporosis_quien'=>'max:50',
            'cancer_mama'=>'max:5',
            'cancer_mama_quien'=>'max:50',
            'cancer_ovario'=>'max:5',
            'cancer_ovario_quien'=>'max:50',
            'diabetes'=>'max:5',
            'diabetes_quien'=>'max:50',
            'hiperlipidemias'=>'max:5',
            'hiperlipidemias_quien'=>'max:50',
            'cancer_endometrial'=>'max:5',
            'cancer_endometrial_quien'=>'max:50',
            'familiares_otros'=>'max:300',

            'gestas'=>'integer',
            'vias_resolucion'=>'max:500',
            'hijos_vivos'=>'integer',
            'hijos_muertos'=>'integer',
            'complicaciones_neonatales'=>'max:500',
            'complicaciones_obstetricos'=>'max:1000',
            'abortos'=>'integer',
            'causa'=>'max:500',

            'fur'=>'date',
            'ciclos_cada'=>'integer',
            'ciclos_por'=>'integer',
            'observaciones'=>'max:500',
            'cantidad_hemorragia'=>'max:15',
            'frecuencia'=>'max:15',
            'dismenorrea'=>'max:5',

            'activa'=>'max:5',
            'edad'=>'integer',
            'parejas'=>'integer',
            'metodo_anticonceptivo'=>'max:5',
            'metodo_si'=>'max:50',
            'tiempo_mes'=>'integer',
            'tiempo_ano'=>'integer',
            'efectos_secundarios'=>'max:500',

            'ultimo'=>'date',
            'resultado'=>'max:500',
            'colposcopia'=>'max:5',
            'colposcopia_si'=>'max:500',
            'procedimientos'=>'max:500',
            'rendiciones'=>'max:300',

            'revision'=>'max:1000'
        ];
    }
}
