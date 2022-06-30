<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RadiofrecuenciaFotomodulacionFormRequest extends FormRequest
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

            'azul_area'=>'max:50',
            'azul_zona'=>'max:100',
            'azul_jm2'=>'integer',
            'azul_tiempo'=>'integer',
            

            'infralight_area'=>'max:50',
            'infralight_zona'=>'max:100',
            'infralight_jm2'=>'integer',
            'infralight_tiempo'=>'integer',
            

            'ambar_area'=>'max:50',
            'ambar_zona'=>'max:100',
            'ambar_jm2'=>'max:100',
            'ambar_tiempo'=>'integer',
            

            'rubylight_area'=>'max:50',
            'rubylight_zona'=>'max:100',
            'rubylight_jm2'=>'integer',
            'rubylight_tiempo'=>'integer'
            
        ];
    }
}
