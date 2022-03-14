<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class ReporteIngresos extends Model
{
    protected $table='ingreso';

    protected $primaryKey='idingreso';

    public $timestamps=false;


    protected $fillable =[
        
    ];

    protected $guarded =[

    ];
}
