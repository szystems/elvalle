<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    protected $table='detalle_ingreso';

    protected $primaryKey='iddetalle_ingreso';

    public $timestamps=false;


    protected $fillable =[
    	'idingreso',
    	'idarticulo',
    	'cantidad',
    	'idpresentacion_compra',
        'cantidad_compra',
        'bonificacion',
        'cantidad_total_compra',
        'costo_unidad_compra',
        'sub_total_compra',
        'descuento',
        'total_compra',
        'fecha_vencimiento',
        'idpresentacion_inventario',
        'cantidadxunidad',
        'total_unidades_inventario',
        'costo_unidad_inventario',
        'descripcion_inventario',
        'precio_venta',
        'precio_oferta',
        'estado_oferta',
        'stock',
        'estado'
    ];

    protected $guarded =[

    ];
}
