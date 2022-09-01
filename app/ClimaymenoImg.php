<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class ClimaymenoImg extends Model
{
    protected $table='climaymeno_img';

    protected $primaryKey='idclimaymeno_img';

    public $timestamps=false;

    protected $fillable = [
        'idclimaymeno',
        'imagen',
        'descripcion',
        'fecha'
    ];

    protected $guarded =[

    ];
}
