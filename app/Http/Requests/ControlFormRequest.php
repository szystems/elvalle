<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ControlFormRequest extends FormRequest
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
            'idembarazo'=>'required',
            'fecha'=>'date',
            'semanas'=>'max:50',

            'sueno'=>'max:100',
            'apetito'=>'max:100',
            'estrenimiento'=>'max:100',
            'disuria'=>'max:100',
            'nauseas_vomitos'=>'max:100',
            'flujo_vaginal'=>'max:100',
            'dolor'=>'max:100',
            'otros'=>'max:300',

            'peso'=>'required',
            'talla'=>'required',
            'temperatura'=>'required|integer',
            'frecuencia_cardiaca_materna'=>'required|integer',
            'altura_uterina'=>'required',
            'frecuencia_cardiaca_fetal'=>'required|integer',
            'presentacion_fetal'=>'required|max:15',
            'movimientos_fetales'=>'required|max:5',
            'edema_mi'=>'required|max:5',
            'varices'=>'required|max:5',
            'flujo_vaginal_ph'=>'required',

            'medicamentos'=>'max:500',
            'especiales'=>'max:200',
            'proxima_cita'=>'date',
            'nota'=>'max:500'
        ];
    }
}
