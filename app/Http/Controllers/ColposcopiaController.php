<?php

namespace sisVentasWeb\Http\Controllers;

use Illuminate\Http\Request;

use sisVentasWeb\Http\Requests;
use sisVentasWeb\Paciente;
use sisVentasWeb\Colposcopia;
use sisVentasWeb\Bitacora;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use sisVentasWeb\Http\Requests\PacienteFormRequest;
use sisVentasWeb\Http\Requests\ColposcopiaFormRequest;
use sisVentasWeb\Http\Requests\BitacoraFormRequest;
use DB;
use Auth;
use sisVentasWeb\User;
use Illuminate\Support\Facades\Input;

class ColposcopiaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $idpaciente=trim($request->get('searchidpaciente'));
        $colposcopias=DB::table('colposcopia as c')
        ->join('paciente as p','c.idpaciente','=','p.idpaciente')
        ->join('users as d','c.iddoctor','=','d.id')
        ->join('users as u','c.idusuario','=','u.id')
        ->select('c.idcolposcopia','c.fecha','c.iddoctor','d.name as Doctor','d.especialidad','c.idpaciente','p.nombre as Paciente','c.idusuario','u.name as Usuario','u.tipo_usuario')
        ->where('c.idpaciente','=',$idpaciente) 
        ->orderby('c.fecha','desc')
        ->paginate(20);

        return view("pacientes.historiales.colposcopias.index",["paciente"=>Paciente::findOrFail($idpaciente),"colposcopias"=>$colposcopias]);
    }

    public function create(Request $request)
    {
        $iddoctor=Auth::user()->id;
    	$doctor=DB::table('users')
        ->where('id','=',$iddoctor)
        ->first();

        $idpaciente = $request->idpaciente;
        $paciente=DB::table('paciente')
        ->where('idpaciente','=',$idpaciente)
        ->first();

    	return view("pacientes.historiales.colposcopias.create",["doctor"=>$doctor,"paciente"=>$paciente]);
    }

    public function store (ColposcopiaFormRequest $request)
    {
    	try
    	{ 
            $fechacolposcopia=trim($request->get('fecha'));
            $fecha = date("Y-m-d", strtotime($fechacolposcopia));
            $iddoctor=$request->get('iddoctor');
            $idpaciente=$request->get('idpaciente');
            $idusuario=$request->get('idusuario');

            $presion_arterial1=$request->get('presion_arterial1');
            $presion_arterial2=$request->get('presion_arterial2');
            $presion_arterial=$presion_arterial1."/".$presion_arterial2;

    		DB::beginTransaction();

            $colposcopia=new Colposcopia;
            $colposcopia->fecha=$fecha;
            $colposcopia->iddoctor=$iddoctor;
            $colposcopia->idpaciente=$idpaciente;
            $colposcopia->idusuario=$idusuario;
            
            $colposcopia->union_escamoso_cilindrica=$request->get('union_escamoso_cilindrica');
            $colposcopia->colposcopia_insatisfactoria=$request->get('colposcopia_insatisfactoria');
            $colposcopia->hd_eap=$request->get('hd_eap');
            $colposcopia->hd_eam=$request->get('hd_eam');
            $colposcopia->hd_leucoplasia=$request->get('hd_leucoplasia');
            $colposcopia->hd_punteando=$request->get('hd_punteando');
            $colposcopia->hd_mosaico=$request->get('hd_mosaico');
            $colposcopia->hd_vasos=$request->get('hd_vasos');
            $colposcopia->hd_area=$request->get('hd_area');
            $colposcopia->hd_otros=$request->get('hd_otros');
            $colposcopia->hd_otros_especificar=$request->get('hd_otros_especificar');
            $colposcopia->carcinoma_invasor=$request->get('carcinoma_invasor');
            $colposcopia->otros_hallazgos=$request->get('otros_hallazgos');
            $colposcopia->dcn_insatisfactoria=$request->get('dcn_insatisfactoria');
            $colposcopia->dcn_insatisfactoria_especifique=$request->get('dcn_insatisfactoria_especifique');
            $colposcopia->hallazgos_nomales=$request->get('hallazgos_nomales');
            $colposcopia->inflamacion_infeccion=$request->get('inflamacion_infeccion');
            $colposcopia->inflamacion_infeccion_especifique=$request->get('inflamacion_infeccion_especifique');
    		$colposcopia->save();

            $cli=DB::table('paciente')->where('idpaciente','=',$colposcopia->idpaciente)->first();

            $zonahoraria = Auth::user()->zona_horaria;
            $moneda = Auth::user()->moneda;
            $fechahora= Carbon::now($zonahoraria);
            $bitacora=new Bitacora;
            $bitacora->idempresa=Auth::user()->idempresa;
            $bitacora->idusuario=Auth::user()->id;
            $bitacora->fecha=$fechahora;
            $bitacora->tipo="Paciente";
            $bitacora->descripcion="Se creo una colposcopia para el paciente:".$cli->nombre.", Fecha: ".$fechacolposcopia;
            $bitacora->save();

    		DB::commit();

    	}catch(\Exception $e)
    	{
    		DB::rollback();
    	}


    	$idpaciente=$idpaciente;
        $colposcopias=DB::table('colposcopia as c')
        ->join('paciente as p','c.idpaciente','=','p.idpaciente')
        ->join('users as d','c.iddoctor','=','d.id')
        ->join('users as u','c.idusuario','=','u.id')
        ->select('c.idcolposcopia','c.fecha','c.iddoctor','d.name as Doctor','d.especialidad','c.idpaciente','p.nombre as Paciente','c.idusuario','u.name as Usuario','u.tipo_usuario')
        ->where('c.idpaciente','=',$idpaciente) 
        ->orderby('c.fecha','desc')
        ->paginate(20);

        return view("pacientes.historiales.colposcopias.index",["paciente"=>Paciente::findOrFail($idpaciente),"colposcopias"=>$colposcopias]);
    }

    public function show($id)
    {
        $colposcopia=DB::table('colposcopia as c')
        ->join('paciente as p','c.idpaciente','=','p.idpaciente')
        ->join('users as d','c.iddoctor','=','d.id')
        ->join('users as u','c.idusuario','=','u.id')
        ->select('c.idcolposcopia','c.fecha','c.iddoctor','d.name as Doctor','d.especialidad','c.idpaciente','p.nombre as Paciente','c.idusuario','u.name as Usuario','u.tipo_usuario','c.union_escamoso_cilindrica','colposcopia_insatisfactoria','hd_eap','hd_eam','hd_leucoplasia','hd_punteado','hd_mosaico','hd_vasos','hd_area','hd_otros','hd_otros_especificar','carcinoma_invasor','otros_hallazgos','dcn_insatisfactoria','dcn_insatisfactoria_especifique','hallazgos_nomales','inflamacion_infeccion','inflamacion_infeccion_especifique')
        ->where('c.idcolposcopia','=',$id) 
        ->first();

        $paciente=DB::table('paciente')
        ->where('idpaciente','=',$colposcopia->idpaciente)
        ->first();
        
        $colposcopiaimgs=DB::table('colposcopia_img')
        ->where('idcolposcopia','=',$id) 
        ->get();

        return view("pacientes.historiales.colposcopias.show",["colposcopia"=>$colposcopia,"paciente"=>$paciente,"colposcopiaimgs"=>$colposcopiaimgs]);
    }

    public function edit($id)
    {
        $colposcopia=DB::table('colposcopia as c')
        ->join('paciente as p','c.idpaciente','=','p.idpaciente')
        ->join('users as d','c.iddoctor','=','d.id')
        ->join('users as u','c.idusuario','=','u.id')
        ->select('c.idcolposcopia','c.fecha','c.iddoctor','d.name as Doctor','d.especialidad','c.idpaciente','p.nombre as Paciente','c.idusuario','u.name as Usuario','u.tipo_usuario','c.union_escamoso_cilindrica','colposcopia_insatisfactoria','hd_eap','hd_eam','hd_leucoplasia','hd_punteado','hd_mosaico','hd_vasos','hd_area','hd_otros','hd_otros_especificar','carcinoma_invasor','otros_hallazgos','dcn_insatisfactoria','dcn_insatisfactoria_especifique','hallazgos_nomales','inflamacion_infeccion','inflamacion_infeccion_especifique')
        ->where('c.idcolposcopia','=',$id) 
        ->first();

        $paciente=DB::table('paciente')
        ->where('idpaciente','=',$colposcopia->idpaciente)
        ->first();
        
       
        return view("pacientes.historiales.colposcopias.edit",["colposcopia"=>$colposcopia,"paciente"=>$paciente]);
    }


    public function update(ColposcopiaFormRequest $request,$id)
    {
        $fechacolposcopia=trim($request->get('fecha'));
        $fecha = date("Y-m-d", strtotime($fechacolposcopia));
        $iddoctor=$request->get('iddoctor');
        $idpaciente=$request->get('idpaciente');
        $idusuario=$request->get('idusuario');

        
        $colposcopia=Colposcopia::findOrFail($id);
        $colposcopia->fecha=$fecha;
        $colposcopia->iddoctor=$iddoctor;
        $colposcopia->idpaciente=$idpaciente;
        $colposcopia->idusuario=$idusuario;
            
        $colposcopia->union_escamoso_cilindrica=$request->get('union_escamoso_cilindrica');
        $colposcopia->colposcopia_insatisfactoria=$request->get('colposcopia_insatisfactoria');
        $colposcopia->hd_eap=$request->get('hd_eap');
        $colposcopia->hd_eam=$request->get('hd_eam');
        $colposcopia->hd_leucoplasia=$request->get('hd_leucoplasia');
        $colposcopia->hd_punteando=$request->get('hd_punteando');
        $colposcopia->hd_mosaico=$request->get('hd_mosaico');
        $colposcopia->hd_vasos=$request->get('hd_vasos');
        $colposcopia->hd_area=$request->get('hd_area');
        $colposcopia->hd_otros=$request->get('hd_otros');
        $colposcopia->hd_otros_especificar=$request->get('hd_otros_especificar');
        $colposcopia->carcinoma_invasor=$request->get('carcinoma_invasor');
        $colposcopia->otros_hallazgos=$request->get('otros_hallazgos');
        $colposcopia->dcn_insatisfactoria=$request->get('dcn_insatisfactoria');
        $colposcopia->dcn_insatisfactoria_especifique=$request->get('dcn_insatisfactoria_especifique');
        $colposcopia->hallazgos_nomales=$request->get('hallazgos_nomales');
        $colposcopia->inflamacion_infeccion=$request->get('inflamacion_infeccion');
        $colposcopia->inflamacion_infeccion_especifique=$request->get('inflamacion_infeccion_especifique');
        $colposcopia->update();

        $request->session()->flash('alert-success', 'Se edito correctamente un examen colposcopia.');

        $cli=DB::table('paciente')->where('idpaciente','=',$idpaciente)->first();

        $zonahoraria = Auth::user()->zona_horaria;
        $moneda = Auth::user()->moneda;
        $fechahora= Carbon::now($zonahoraria);
        $bitacora=new Bitacora;
        $bitacora->idempresa=Auth::user()->idempresa;
        $bitacora->idusuario=Auth::user()->id;
        $bitacora->fecha=$fechahora;
        $bitacora->tipo="Paciente";
        $bitacora->descripcion="Se edito una colposcopia del paciente:".$cli->nombre.", Fecha: ".$fechacolposcopia;
        $bitacora->save();

        $idpaciente=$idpaciente;

        $colposcopia=DB::table('colposcopia as c')
        ->join('paciente as p','c.idpaciente','=','p.idpaciente')
        ->join('users as d','c.iddoctor','=','d.id')
        ->join('users as u','c.idusuario','=','u.id')
        ->select('c.idcolposcopia','c.fecha','c.iddoctor','d.name as Doctor','d.especialidad','c.idpaciente','p.nombre as Paciente','c.idusuario','u.name as Usuario','u.tipo_usuario','c.union_escamoso_cilindrica','colposcopia_insatisfactoria','hd_eap','hd_eam','hd_leucoplasia','hd_punteado','hd_mosaico','hd_vasos','hd_area','hd_otros','hd_otros_especificar','carcinoma_invasor','otros_hallazgos','dcn_insatisfactoria','dcn_insatisfactoria_especifique','hallazgos_nomales','inflamacion_infeccion','inflamacion_infeccion_especifique')
        ->where('c.idcolposcopia','=',$id) 
        ->first();

        $paciente=DB::table('paciente')
        ->where('idpaciente','=',$idpaciente)
        ->first();

        $colposcopiaimgs=DB::table('colposcopia_img')
        ->where('idcolposcopia','=',$id) 
        ->get();

        return view("pacientes.historiales.colposcopias.show",["colposcopia"=>$colposcopia,"paciente"=>$paciente,"colposcopiaimgs"=>$colposcopiaimgs]);
    }

    public function eliminarcolposcopia(Request $request)
    {
        $idcolposcopia = $request->get('idcolposcopia');
        $idpaciente = $request->get('idpaciente');
        
        $eliminarcolposcopia=Colposcopia::findOrFail($idcolposcopia);
        $eliminarcolposcopia->delete();

        $request->session()->flash('alert-success', 'Se elimino la colposcopia.');  
        
        $idpaciente=$idpaciente;
        $colposcopias=DB::table('colposcopia as c')
        ->join('paciente as p','c.idpaciente','=','p.idpaciente')
        ->join('users as d','c.iddoctor','=','d.id')
        ->join('users as u','c.idusuario','=','u.id')
        ->select('c.idcolposcopia','c.fecha','c.iddoctor','d.name as Doctor','d.especialidad','c.idpaciente','p.nombre as Paciente','c.idusuario','u.name as Usuario','u.tipo_usuario')
        ->where('c.idpaciente','=',$idpaciente) 
        ->orderby('c.fecha','desc')
        ->paginate(20);

        return view("pacientes.historiales.colposcopias.index",["paciente"=>Paciente::findOrFail($idpaciente),"colposcopias"=>$colposcopias]);
    }
}
