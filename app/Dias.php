<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Dias extends Model
{
    protected $table='dias';

    protected $primaryKey='iddias';

    public $timestamps=false;

    protected $fillable = [
        'iddoctor',
        'fecha', 
        'apuntes'
    ];

    protected $guarded =[

    ];
}
