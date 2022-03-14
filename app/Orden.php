<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table='orden';

    protected $primaryKey='idorden';

    public $timestamps=false;


    protected $fillable =[
        'idpaciente',
        'iddoctor',
        'idusuario',
        'fecha',
    	'codigoeeps',
    	'codigopapanicolau',
    	'observaciones',
    	'estado_orden',
    	'estado',
        'total'        
    ];

    protected $guarded =[

    ];
}
