<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    protected $table='control';

    protected $primaryKey='idcontrol';

    public $timestamps=false;

    protected $fillable = [
        'idcontrol',
        'idembarazo',
        'numero_control',
        'fecha',
        'semanas',

        'sueno',
        'apetito',
        'estrenimiento',
        'disuria',
        'nauseas_vomitos',
        'flujo_vaginal',
        'dolor',
        'otros',

        'peso',
        'talla',
        'presion_arterial',
        'temperatura',
        'frecuencia_cardiaca_materna',
        'altura_uterina',
        'frecuencia_cardiaca_fetal',
        'presentacion_fetal',
        'movimientos_fetales',
        'edema_mi',
        'varices',
        'flujo_vaginal_ph',

        'medicamentos',
        'especiales',
        'proxima_cita',
        'nota'

    ];

    protected $guarded =[

    ];
}
