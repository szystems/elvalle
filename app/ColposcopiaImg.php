<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class ColposcopiaImg extends Model
{
    protected $table='colposcopia_img';

    protected $primaryKey='idcolposcopia_img';

    public $timestamps=false;

    protected $fillable = [
        'idcolposcopia',
        'imagen',
        'descripcion',
        'fecha'
    ];

    protected $guarded =[

    ];
}
