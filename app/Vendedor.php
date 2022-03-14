<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table='vendedor';

    protected $primaryKey='idvendedor';

    public $timestamps=false;

    protected $fillable = [
        'idproveedor',
        'nombre', 
        'telefono',
        'email',
        'codigo'
    ];

    protected $guarded =[

    ];
}
