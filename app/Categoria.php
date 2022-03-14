<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categoria';

    protected $primaryKey='idcategoria';

    public $timestamps=false;


    protected $fillable =[
    	'nombre',
    	'descripcion',
        'condicion',
        'imagen',
        'idempresa',
    ];

    protected $guarded =[

    ];
}
