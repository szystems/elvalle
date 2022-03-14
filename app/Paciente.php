<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table='paciente';

    protected $primaryKey='idpaciente';

    public $timestamps=false;

    protected $fillable = [
        'nombre',
        'sexo', 
        'correo', 
        'telefono', 
        'direccion', 
        'fecha_nacimiento', 
        'dpi',
        'nit',
        'foto',
        'estado'
    ];

    protected $guarded =[

    ];
}
