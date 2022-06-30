<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class RadiofrecuenciaSesion extends Model
{
    protected $table='radiofrecuencia_sesion';

    protected $primaryKey='idradiofrecuencia_sesion';

    public $timestamps=false;

    protected $fillable = [
        'idradiofrecuencia',
        'numero_sesion',
        'fecha',

        'monopolar_areas',
        'monopolar_indicacion',
        'monopolar_temperatura',
        'monopolar_tiempo',
        'monopolar_zonas_tratadas',

        'bipolar_areas',
        'bipolar_indicacion',
        'bipolar_temperatura',
        'bipolar_tiempo',
        'bipolar_zonas_tratadas',

        'tetrapolar_areas',
        'tetrapolar_indicacion',
        'tetrapolar_temperatura',
        'tetrapolar_tiempo',
        'tetrapolar_zonas_tratadas',

        'hexapolar_areas',
        'hexapolar_indicacion',
        'hexapolar_temperatura',
        'hexapolar_tiempo',
        'hexapolar_zonas_tratadas',

        'ginecologico_areas',
        'ginecologico_indicacion',
        'ginecologico_temperatura',
        'ginecologico_tiempo',
        'ginecologico_zonas_tratadas'
    ];

    protected $guarded =[

    ];
}
