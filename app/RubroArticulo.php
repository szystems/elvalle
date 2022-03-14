<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class RubroArticulo extends Model
{
    protected $table='rubro_articulo';

    protected $primaryKey='idrubro_articulo';

    public $timestamps=false;

    protected $fillable = [
        'idrubro',
        'idarticulo',
        'precio_costo',
        'precio_venta',
        'estado'
    ];

    protected $guarded =[

    ];
}
