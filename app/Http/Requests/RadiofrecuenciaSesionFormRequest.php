<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RadiofrecuenciaSesionFormRequest extends FormRequest
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
            'idradiofrecuencia',
            'fecha'=>'date',

            'monopolar_areas'=>'max:50',
            'monopolar_indicacion'=>'max:100',
            'monopolar_temperatura'=>'integer',
            'monopolar_tiempo'=>'integer',
            'monopolar_zonas_tratadas'=>'max:100',

            'bipolar_areas'=>'max:50',
            'bipolar_indicacion'=>'max:100',
            'bipolar_temperatura'=>'integer',
            'bipolar_tiempo'=>'integer',
            'bipolar_zonas_tratadas'=>'max:100',

            'tetrapolar_areas'=>'max:50',
            'tetrapolar_indicacion'=>'max:100',
            'tetrapolar_temperatura'=>'integer',
            'tetrapolar_tiempo'=>'integer',
            'tetrapolar_zonas_tratadas'=>'max:100',

            'hexapolar_areas'=>'max:50',
            'hexapolar_indicacion'=>'max:100',
            'hexapolar_temperatura'=>'integer',
            'hexapolar_tiempo'=>'integer',
            'hexapolar_zonas_tratadas'=>'max:100',

            'ginecologico_areas'=>'max:50',
            'ginecologico_indicacion'=>'max:100',
            'ginecologico_temperatura'=>'integer',
            'ginecologico_tiempo'=>'integer',
            'ginecologico_zonas_tratadas'=>'max:100'
        ];
    }
}
