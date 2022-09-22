<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Colposcopia extends Model
{
    protected $table='colposcopia';

    protected $primaryKey='idcolposcopia';

    public $timestamps=false;

    protected $fillable = [
        'idpaciente',
        'iddoctor',
        'idusuario',
        'fecha',
        'union_escamoso_cilindrica',
        'colposcopia_insatisfactoria',
        'hd_eap',
        'hd_eam',
        'hd_leucoplasia',
        'hd_punteando',
        'hd_mosaico',
        'hd_vasos',
        'hd_area',
        'hd_otros',
        'hd_otros_especificar',
        'carcinoma_invasor',
        'otros_hallazgos',
        'dcn_insatisfactoria',
        'dcn_insatisfactoria_especifique',
        'hallazgos_nomales',
        'inflamacion_infeccion',
        'inflamacion_infeccion_especifique'
    ];

    protected $guarded =[

    ];
}
