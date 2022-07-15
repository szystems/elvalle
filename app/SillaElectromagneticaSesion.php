<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class SillaElectromagneticaSesion extends Model
{
    protected $table='sillae_ciclo_sesion';

    protected $primaryKey='idsillae_ciclo_sesion';

    public $timestamps=false;

    protected $fillable = [
        'idsillae_ciclo',
        'numero_sesion',
        'fecha',

        'tesla',
        'minutos',
        'observaciones'
    ];

    protected $guarded =[

    ];
}
