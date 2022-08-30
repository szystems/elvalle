<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class FisicoImg extends Model
{
    protected $table='fisico_img';

    protected $primaryKey='idfisico_img';

    public $timestamps=false;

    protected $fillable = [
        'idfisico',
        'imagen',
        'descripcion',
        'fecha'
    ];

    protected $guarded =[

    ];
}
