<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class ClimaymenoControl extends Model
{
    protected $table='climaymeno_control';

    protected $primaryKey='idclimaymeno_control';

    public $timestamps=false;

    protected $fillable = [
        'idclimaymeno',
        'numero_control',
        'fecha',

        'bochornos',
        'bochornos_escala',
        'depresion',
        'depresion_escala',
        'irritabilidad',
        'irritabilidad_escala',
        'perdida_libido',
        'perdida_libido_escala',
        'sequedad_vaginal',
        'sequedad_vaginal_escala',
        'insomnio',
        'insombio_escala',
        'cefalea',
        'cefalea_escala',
        'fatiga',
        'fatiga_escala',
        'artralgias_mialgias',
        'artralgias_mialgias_escala',
        'trastornos_miccionales',
        'trastornos_miccionales',
        'otros',
        'otros_si',

        'peso',
        'talla',
        'presion_arterial',
        'temperatura',
        'frecuencia_cardiaca',
        'cara',
        'mamas',
        'torax',
        'abdomen',
        'vulva',
        'utero_anexos',
        'varices',
        'flujo_vaginal_ph',
        'hallazgos',

        'fecha_laboratorios',
        'hemograma',
        'examen_orina',
        'glicemia_curva_glicemica',
        'insulina',
        'panel_lipidos',
        'transaminasas',
        'citologia_cervicovaginal',
        'mamografia',
        'fsh',
        'lh',
        'pruebas_tiroideas',
        'prolactina',
        'densitometria_osea',
        'ultrasonografia_pelvica',
        'escala_homa',
        'otros_laboratorio',

        'acos',
        'tratamiento_infecciones',
        'trh_tipo_dosis',
        'tratamiento_osteoporosis',
        'calcio',
        'vitamina_d',
        'aspirina',
        'tratamiento_hta',
        'tratamiento_diabetes',
        'jabones_intimos',
        'nota_adicionales'

    ];

    protected $guarded =[

    ];
}
