<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Embarazo extends Model
{
    protected $table='embarazo';

    protected $primaryKey='idembarazo';

    public $timestamps=false;

    protected $fillable = [
        'idembarazo',
        'idpaciente',
        'iddoctor',
        'idusuario',
        'fur',
        'fecha',
        'trimestre1',
        'trimestre2',
        'trimestre3'
    ];

    protected $guarded =[

    ];
}
