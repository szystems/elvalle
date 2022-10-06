<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClimaymenoControlFormRequest extends FormRequest
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
            'idclimaymeno'=>'required',
            'fecha'=>'date',

            'bochornos'=>'max:5',
            'bochornos_escala'=>'max:5',
            'depresion'=>'max:5',
            'depresion_escala'=>'max:5',
            'irritabilidad'=>'max:5',
            'irritabilidad_escala'=>'max:5',
            'perdida_libido'=>'max:5',
            'perdida_libido_escala'=>'max:5',
            'sequedad_vaginal'=>'max:5',
            'sequedad_vaginal_escala'=>'max:5',
            'insomnio'=>'max:5',
            'insombio_escala'=>'max:5',
            'cefalea'=>'max:5',
            'cefalea_escala'=>'max:5',
            'fatiga'=>'max:5',
            'fatiga_escala'=>'max:5',
            'artralgias_mialgias'=>'max:5',
            'artralgias_mialgias_escala'=>'max:5',
            'trastornos_miccionales'=>'max:5',
            'trastornos_miccionales_escala'=>'max:5',
            'otros'=>'max:5',
            'otros_si'=>'max:200',

            'peso'=>'required',
            'talla'=>'required',
            'presion_arterial'=>'max:10',
            'temperatura'=>'required|integer',
            'frecuencia_cardiaca'=>'required|integer',
            'cara'=>'max:50',
            'mamas'=>'max:50',
            'torax'=>'max:50',
            'abdomen'=>'max:50',
            'vulva'=>'max:50',
            'utero_anexos'=>'max:50',
            'varices'=>'max:50',
            'flujo_vaginal_ph'=>'max:50',
            'hallazgos'=>'max:50',

            'fecha_laboratorios'=>'date',
            'hemograma'=>'max:50',
            'examen_orina'=>'max:50',
            'glicemia_curva_glicemica'=>'max:50',
            'insulina'=>'max:50',
            'panel_lipidos'=>'max:50',
            'transaminasas'=>'max:50',
            'citologia_cervicovaginal'=>'max:50',
            'mamografia'=>'max:50',
            'fsh'=>'max:50',
            'lh'=>'max:50',
            'pruebas_tiroideas'=>'max:50',
            'prolactina'=>'max:50',
            'densitometria_osea'=>'max:50',
            'ultrasonografia_pelvica'=>'max:50',
            'escala_homa'=>'max:50',
            'otros_laboratorio'=>'max:100',

            'acos'=>'max:100',
            'tratamiento_infecciones'=>'max:100',
            'trh_tipo_dosis'=>'max:300',
            'tratamiento_osteoporosis'=>'max:100',
            'calcio'=>'max:100',
            'vitamina_d'=>'max:100',
            'aspirina'=>'max:100',
            'tratamiento_hta'=>'max:100',
            'tratamiento_diabetes'=>'max:100',
            'jabones_intimos'=>'max:100',
            'nota_adicionales'=>'max:1000'
        ];
    }
}
