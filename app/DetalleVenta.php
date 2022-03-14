<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table='detalle_venta';

    protected $primaryKey='iddetalle_venta';

    public $timestamps=false;


    protected $fillable =[
    	'idventa',
    	'idarticulo',
        'idpresentacion',
        'iddetalle_ingreso',
    	'cantidad',
        'precio_venta',
        'precio_compra',
        'precio_oferta',
        'descuento',
        'agregado'
    ];

    protected $guarded =[

    ];
}
