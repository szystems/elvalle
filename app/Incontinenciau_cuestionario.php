<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Incontinenciau_cuestionario extends Model
{
    protected $table='incontinenciau_cuestionario';

    protected $primaryKey='idincontinenciau_cuestionario';

    public $timestamps=false;

    protected $fillable = [
        'idincontinenciau',
        'numero_cuestionario',
        'fecha',

        'frecuencia',
        'cantidad',
        'medida',
        'nunca',
        'antes_servicio',
        'toser',
        'duerme',
        'esfuerzos',
        'termina',
        'sinmotivo',
        'continua',
        'puntuacion'

    ];

    protected $guarded =[

    ];
}
