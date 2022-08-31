<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class EmbarazoImg extends Model
{
    protected $table='embarazo_img';

    protected $primaryKey='idembarazo_img';

    public $timestamps=false;

    protected $fillable = [
        'idembarazo',
        'imagen',
        'descripcion',
        'fecha'
    ];

    protected $guarded =[

    ];
}
