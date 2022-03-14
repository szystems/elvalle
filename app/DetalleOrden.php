<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class DetalleOrden extends Model
{
    protected $table='detalle_orden';

    protected $primaryKey='iddetalle_orden';

    public $timestamps=false;


    protected $fillable =[
    	'idorden',
    	'idarticulo',
    	'cantidad',
        'precio_venta',
        'precio_costo'
    ];

    protected $guarded =[

    ];
}
