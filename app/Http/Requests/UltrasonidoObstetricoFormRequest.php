<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UltrasonidoObstetricoFormRequest extends FormRequest
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
            'spp'=>'max:100',
            'fcardiaca_fetal'=>'max:100',
            'pubicacion'=>'max:100',
            'liquido_amniotico'=>'max:100',
            'utero_anexos'=>'max:100',
            'cervix'=>'max:100',
            'diametro_biparietal_medida'=>'required',
            'diametro_biparietal_semanas'=>'required|integer',
            'circunferencia_cefalica_medida'=>'required',
            'circunferencia_cefalica_semanas'=>'required|integer',
            'circunferencia_abdominal_medida'=>'required',
            'circunferencia_abdominal_semanas'=>'required|integer',
            'longitud_femoral_medida'=>'required',
            'longitud_femoral_semanas'=>'required|integer',
            'fetometria'=>'max:100',
            'peso_estimado'=>'max:100',
            'percentilo'=>'max:100',
            'comentarios'=>'max:1000',
            'interpretacion'=>'max:1000',
            'recomendaciones'=>'max:1000',
            'observaciones'=>'max:1000'
        ];
    }
}
