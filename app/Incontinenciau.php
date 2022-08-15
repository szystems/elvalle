<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Incontinenciau extends Model
{
    protected $table='incontinenciau';

    protected $primaryKey='idincontinenciau';

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
