<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class UltrasonidoObstetricoImg extends Model
{
    protected $table='ultrasonido_obstetrico_img';

    protected $primaryKey='idultrasonido_obstetrico_img';

    public $timestamps=false;

    protected $fillable = [
        'idultrasonido_obstetrico',
        'imagen',
        'descripcion',
        'fecha'
    ];

    protected $guarded =[

    ];
}
