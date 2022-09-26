<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class UltrasonidoObstetrico extends Model
{
    protected $table='ultrasonido_obstetrico';

    protected $primaryKey='idultrasonido_obstetrico';

    public $timestamps=false;

    protected $fillable = [
        'idpaciente',
        'iddoctor',
        'idusuario',
        'fecha',
        'spp',
        'fcardiaca_fetal',
        'pubicacion',
        'liquido_amniotico',
        'utero_anexos',
        'cervix',
        'diametro_biparietal_medida',
        'diametro_biparietal_semanas',
        'circunferencia_cefalica_medida',
        'circunferencia_cefalica_semanas',
        'circunferencia_abdominal_medida',
        'circunferencia_abdominal_semanas',
        'longitud_femoral_medida',
        'longitud_femoral_semanas',
        'fetometria',
        'peso_estimado',
        'percentilo',
        'comentarios',
        'interpretacion',
        'recomendaciones',
        'observaciones'
    ];

    protected $guarded =[

    ];
}
