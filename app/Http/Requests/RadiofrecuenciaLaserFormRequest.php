<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RadiofrecuenciaLaserFormRequest extends FormRequest
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

            'tipo'=>'max:20',
            'area'=>'max:100',
            'zonas_a_tratar'=>'max:200',
            'parametros'=>'max:100'
        ];
    }
}
