<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class SillaElectromagnetica extends Model
{
    protected $table='sillae_ciclo';

    protected $primaryKey='idsillae_ciclo';

    public $timestamps=false;

    protected $fillable = [
        'idpaciente',
        'iddoctor',
        'idusuario',
        'fecha',
        'ciclo_numero'
    ];

    protected $guarded =[

    ];
}
