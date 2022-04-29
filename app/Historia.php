<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    protected $table='historia';

    protected $primaryKey='idhistoria';

    public $timestamps=false;

    protected $fillable = [
        'idpaciente',
        'fecha', 
        'estado_civil', 
        'procedencia', 
        'escolaridad', 
        'tel_emergencia', 
        'profesion',
        'motivo',
        'historia',
        'ciclos_regulares'.
        'histerectomia'.
        'mastopatia',
        'cardiopatias',
        'cafelea_vascular',
        'tabaquismo',
        'tratamiento_quimioradiacion',
        'ejercicio'

    ];

    protected $guarded =[

    ];
}
