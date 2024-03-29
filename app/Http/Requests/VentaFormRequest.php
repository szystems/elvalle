<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VentaFormRequest extends FormRequest
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
            'idcliente'=>'required',
            'tipo_comprobante'=>'required|max:20',
            'serie_comprobante'=>'max:20',
            'num_comprobante'=>'max:20',
            'idarticulo'=>'required',
            'cantidad'=>'required',
            'precio_venta'=>'required',
            'precio_oferta'=>'required|between:0,100',
            'descuento'=>'required',
            'total_comision'=>'required',
            'total_impuesto'=>'required',
            'abonado'=>'required',
            'estadoventa'=>'required',
            'tipopago'=>'required',
        ];
    }
}
