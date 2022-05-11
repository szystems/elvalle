<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Fisico extends Model
{
    protected $table='fisico';

    protected $primaryKey='idfisico';

    public $timestamps=false;

    protected $fillable = [
        'idpaciente',
        'iddoctor',
        'idusuario',
        'fecha',
        'motivo_consulta',
        'peso',
        'talla',
        'perimetro_abdominal',
        'presion_arterial',
        'frecuencia_cardiaca',
        'frecuencia_respiratoria',
        'temperatura',
        'saturacion_oxigeno',
        //pie pagina
        'impresion_clinica',
        'plan_diagnostico',
        'plan_tratamiento',
        'recomendaciones_generales',
        'recomendaciones_especificas',
        //resultados
        'cabeza_cuello',
        'tiroides',
        'mamas_axilas',
        'cardiopulmonar',
        'abdomen',
        'genitales_externos',
        'especuloscopia ',
        'tacto_bimanual',
        'miembros_inferiores'


    ];

    protected $guarded =[

    ];
}
