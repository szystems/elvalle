<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table='ingreso';

    protected $primaryKey='idingreso';

    public $timestamps=false;


    protected $fillable =[
    	'idempresa',
    	'idproveedor',
    	'idusuario',
    	'tipo_comprobante',
    	'serie_comprobante',
    	'num_comporbante',
    	'fecha',
    	'impuesto',
    	'estado',
        
    ];

    protected $guarded =[

    ];
}
