<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngresoFormRequest extends FormRequest
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
            'idproveedor'=>'required',
            'tipo_comprobante'=>'required|max:20',
            'serie_comprobante'=>'max:50',
            'num_comprobante'=>'max:50',
            'idarticulo'=>'required',
            'codigo'=>'max:50',
            'idpresentacion_compra'=>'required',
            'cantidad_compra'=>'required|min:1',
            'bonificacion'=>'required|min:0',
            'cantidad_total_compra'=>'required|min:1',
            'costo_unidad_compra'=>'required',
            'sub_total_compra'=>'required',
            'descuento'=>'required|min:0',
            'total_compra'=>'required',
            'idpresentacion_inventario'=>'required',
            'cantidadxunidad'=>'required|min:1',
            'total_unidades_inventario'=>'required|min:1',
            'costo_unidad_inventario'=>'required',
            'precio_venta'=>'required',
            'precio_oferta'=>'required',
            'estado_oferta'=>'required'
        ];
    }
}
