<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class RadiofrecuenciaFotomodulacion extends Model
{
    protected $table='radiofrecuencia_fotomodulacion';

    protected $primaryKey='idradiofrecuencia_fotomodulacion';

    public $timestamps=false;

    protected $fillable = [
        'idradiofrecuencia',
        'numero_sesion',
        'fecha',

        'azul_area',
        'azul_zona',
        'azul_jm2',
        'azul_tiempo',
        
        'infralight_area',
        'infralight_zona',
        'infralight_jm2',
        'infralight_tiempo',
        
        'ambar_area',
        'ambar_zona',
        'ambar_jm2',
        'ambar_tiempo',
        
        'rubylight_area',
        'rubylight_zona',
        'rubylight_jm2',
        'rubylight_tiempo'
    ];

    protected $guarded =[

    ];
}
