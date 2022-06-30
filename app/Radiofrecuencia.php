<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Radiofrecuencia extends Model
{
    protected $table='radiofrecuencia';

    protected $primaryKey='idradiofrecuencia';

    public $timestamps=false;

    protected $fillable = [
        'idpaciente',
        'iddoctor',
        'idusuario',
        'fecha',
        'fototipo_piel',
        'implantes',
        'implantes_tipo',
        'marcapasos',
        'periodo_gestacion',
        'glaucoma',
        'neoplasias_procesos_tumorales',
        'portador_epilepsia',
        'antecedentes_fotosensibilidad',
        'tratamientos_acidos',
        'medicamentos_fotosensibles',
        'resumen'
    ];

    protected $guarded =[

    ];
}
