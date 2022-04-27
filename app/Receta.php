<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $table='receta';

    protected $primaryKey='idreceta';

    public $timestamps=false;

    protected $fillable = [
        'fecha',
        'iddoctor', 
        'idpaciente',
        'idusuario'
    ];

    protected $guarded =[

    ];
}
