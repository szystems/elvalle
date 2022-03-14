<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    protected $table='rubro';

    protected $primaryKey='idrubro';

    public $timestamps=false;

    protected $fillable = [
        'nombre',
        'nota', 
        'estado_rubro',
        'estado'
    ];

    protected $guarded =[

    ];
}
