<?php

namespace sisVentasWeb;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
     protected $table='venta';

    protected $primaryKey='idventa';

    public $timestamps=false;


    protected $fillable =[
        'id_empresa',
        'idcliente',
        'idusuario',
    	'tipo_comprobante',
    	'serie_comprobante',
    	'num_comporbante',
    	'fecha',
    	'impuesto',
        'total_venta',
        'total_compra',
        'total_comision',
        'total_impuesto',
        'abonado',
        'estado',
        'estadosaldo',
        'estadoventa',
        'tipopago'
        
    ];

    protected $guarded =[

    ];
}
