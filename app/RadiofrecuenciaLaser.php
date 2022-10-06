<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class RadiofrecuenciaLaser extends Model
{
    protected $table='radiofrecuencia_laser';

    protected $primaryKey='idradiofrecuencia_laser';

    public $timestamps=false;

    protected $fillable = [
        'idradiofrecuencia',
        'numero_sesion',
        'fecha',

        'tipo',
        'area',
        'zonas_a_tratar',
        'parametros'
    ];

    protected $guarded =[

    ];
}
