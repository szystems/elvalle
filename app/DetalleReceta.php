<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class DetalleReceta extends Model
{
    protected $table='receta_medicamento';

    protected $primaryKey='idreceta_medicamento';

    public $timestamps=false;


    protected $fillable =[
    	'idreceta',
    	'cantidad',
        'presentacion',
        'medicamento',
    	'indicaciones'
    ];

    protected $guarded =[

    ];
}
