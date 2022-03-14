<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table='persona';

    protected $primaryKey='idpersona';

    public $timestamps=false;


    protected $fillable =[
    	'idempresa',
    	'tipo',
    	'Nombre',
    	'tipo_documento',
		'num_documento',
    	'direccion',
    	'telefono',
    	'email',
    	'banco',
    	'nombre_cuenta',
    	'numero_cuenta',
        
    ];

    protected $guarded =[

    ];
}
