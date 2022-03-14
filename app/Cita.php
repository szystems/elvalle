<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table='cita';

    protected $primaryKey='idcita';

    public $timestamps=false;

    protected $fillable = [
        'idusuario',
        'iddoctor', 
        'idpaciente', 
        'fecha_inicio', 
        'fecha_fin', 
        'estado_cita', 
        'apuntes',
        'turno',
        'estado'
    ];

    protected $guarded =[

    ];
}
