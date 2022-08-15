<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Climaymeno extends Model
{
    protected $table='climaymeno';

    protected $primaryKey='idclimaymeno';

    public $timestamps=false;

    protected $fillable = [
        'idpaciente',
        'iddoctor',
        'idusuario',
        'fecha'
    ];

    protected $guarded =[

    ];
}
