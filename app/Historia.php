<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    protected $table='historia';

    protected $primaryKey='idhistoria';

    public $timestamps=false;

    protected $fillable = [
        'idpaciente',
        'fecha', 
        'estado_civil', 
        'procedencia', 
        'escolaridad', 
        'tel_emergencia', 
        'profesion',
        'motivo',
        'historia',

        'ciclos_regulares'.
        'histerectomia'.
        'mastopatia',
        'cardiopatias',
        'cafelea_vascular',
        'tabaquismo',
        'tratamiento_quimioradiacion',
        'ejercicio',

        'affecciones_ginecologicas',
        'cancer',
        'varices_trombosis',
        'enfermedades_hepaticas',
        'alcoholismo',
        'cafeista',
        'trh',
        'otros',
        'otros_texto',

        'cardiopatias_50anos',
        'cardiopatias_50anos_quien',
        'osteoporosis',
        'osteoporosis_quien',
        'cancer_mama',
        'cancer_mama_quien',
        'cancer_ovario',
        'cancer_ovario_quien',
        'diabetes',
        'diabetes_quien',
        'hiperlipidemias',
        'hiperlipidemias_quien',
        'cancer_endometrial',
        'cancer_endometrial_quien',

        'gestas',
        'vias_resolucion',
        'hijos_vivos',
        'hijos_muertos',
        'complicaciones_neonatales',
        'complicaciones_obstetricos',
        'abortos',
        'causa',

        'fur',
        'ciclos_cada',
        'ciclos_por',
        'ciclos_dias',
        'cantidad_hemorragia',
        'frecuencia',

        'activa',
        'edad',
        'parejas',
        'metodo_anticonceptivo',
        'metodo_si',
        'tiempo_mes',
        'tiempo_ano',
        'efectos_secundarios',

        'ultimo',
        'resultado',
        'colposcopia',
        'colposcopia_si',
        'procedimientos',

        'revision'
    ];

    protected $guarded =[

    ];
}
