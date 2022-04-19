<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    protected $table='paciente';

    protected $primaryKey='idpaciente';

    public $timestamps=false;

    protected $fillable = [
        
    ];

    protected $guarded =[

    ];
}
