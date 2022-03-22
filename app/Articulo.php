<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table='articulo';

    protected $primaryKey='idarticulo';

    public $timestamps=false;


    protected $fillable =[
    	'idempresa',
    	'idcategoria',
    	'nombre',
		'minimo',
    	'bodega',
    	'ubicacion',
    	'descripcion',
    	'imagen',
    	'estado',
		'activar_tienda'
        
    ];

    protected $guarded =[

    ];
}
