<?php

namespace sisVentasWeb\Http\Controllers;

use Illuminate\Http\Request;

use sisVentasWeb\Http\Requests;
use sisVentasWeb\Paciente;
use sisVentasWeb\Historia;
use sisVentasWeb\Bitacora;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use sisVentasWeb\Http\Requests\PacienteFormRequest;
use sisVentasWeb\Http\Requests\HistoriaFormRequest;
use sisVentasWeb\Http\Requests\BitacoraFormRequest;
use DB;
use Auth;
use sisVentasWeb\User;
use Illuminate\Support\Facades\Input;

class HistoriaController extends Controller
{
    public function index(Request $request)
    {
        $idpaciente=trim($request->get('searchidpaciente'));
        $historia = DB::table('historia')
        ->where('idpaciente','=',$idpaciente)
        ->first();

        return view("pacientes.historiales.historias.index",["paciente"=>Paciente::findOrFail($idpaciente),"historia"=>$historia]);
    }

    public function create(Request $request)
    {
        $idpaciente = $request->idpaciente;

        $paciente=DB::table('paciente')
        ->where('idpaciente','=',$idpaciente)
        ->first();

    	return view("pacientes.historiales.historias.create",["paciente"=>$paciente]);
    }

    public function store (HistoriaFormRequest $request)
    {
    	try
    	{ 
            $fechaHistoria=trim($request->get('fecha'));
            $fecha = date("Y-m-d", strtotime($fechaHistoria));
            $idpaciente=$request->get('idpaciente');

    		DB::beginTransaction();

            $historia=new Historia;
            $historia->idpaciente=$idpaciente;
            $historia->fecha=$fecha;
            $historia->estado_civil=$request->get('estado_civil');
            $historia->procedencia=$request->get('procedencia');
            $historia->escolaridad=$request->get('escolaridad');
            $historia->tel_emergencia=$request->get('tel_emergencia');
            $historia->profesion=$request->get('profesion');
            $historia->motivo=$request->get('motivo');
            $historia->historia=$request->get('historia');
    		$historia->save();

            $cli=DB::table('paciente')->where('idpaciente','=',$historia->idpaciente)->first();

            $zonahoraria = Auth::user()->zona_horaria;
            $moneda = Auth::user()->moneda;
            $fechahora= Carbon::now($zonahoraria);
            $bitacora=new Bitacora;
            $bitacora->idempresa=Auth::user()->idempresa;
            $bitacora->idusuario=Auth::user()->id;
            $bitacora->fecha=$fechahora;
            $bitacora->tipo="Paciente";
            $bitacora->descripcion="Se creo la historia de:".$cli->nombre.", Fecha: ".$fechaHistoria;
            $bitacora->save();

    		DB::commit();

    	}catch(\Exception $e)
    	{
    		DB::rollback();
    	}

    	$idpaciente=$cli->idpaciente;

        $paciente=DB::table('paciente')
        ->where('idpaciente','=',$idpaciente)
        ->first();

        $request->session()->flash('alert-success', "Se creo la historia de: ".$cli->nombre.", Fecha: ".$fechaHistoria);

        return view("pacientes.historiales.historias.index",["paciente"=>Paciente::findOrFail($idpaciente),"historia"=>$historia]);
    }

    public function edit($id)
    {
        $idpaciente=$id;
        $historia = DB::table('historia')
        ->where('idpaciente','=',$idpaciente)
        ->first();

    	return view("pacientes.historiales.historias.edit",["paciente"=>Paciente::findOrFail($idpaciente),"historia"=>$historia]);
    }

    public function update(HistoriaFormRequest $request,$id)
    {
        $idpaciente=$request->get('idpaciente');
        $idhistoria = $request->get('idhistoria');
        

        //$zona_horaria = Auth::user()->zona_horaria;
        $fechaHistoria = $request->get('fecha');
        $fecha = date("Y-m-d", strtotime($fechaHistoria));
        
        

        $historia=Historia::findOrFail($id);
        $historia->fecha=$fecha;
        $historia->estado_civil=$request->get('estado_civil');
        $historia->procedencia=$request->get('procedencia');
        $historia->escolaridad=$request->get('escolaridad');
        $historia->tel_emergencia=$request->get('tel_emergencia');
        $historia->profesion=$request->get('profesion');
        $historia->motivo=$request->get('motivo');
        $historia->historia=$request->get('historia');
        $historia->save();

        $cli=DB::table('paciente')->where('idpaciente','=',$historia->idpaciente)->first();

        $zonahoraria = Auth::user()->zona_horaria;
        $moneda = Auth::user()->moneda;
        $fechahora= Carbon::now($zonahoraria);
        $bitacora=new Bitacora;
        $bitacora->idusuario=Auth::user()->id;
        $bitacora->idempresa=Auth::user()->idempresa;
        $bitacora->fecha=$fechahora;
        $bitacora->tipo="Pacientes";
        $bitacora->descripcion="Se edito la historia de: ".$cli->nombre.", Fecha: ".$fechaHistoria;
        $bitacora->save();

        $request->session()->flash('alert-success', "Se edito la historia de: ".$cli->nombre.", Fecha: ".$fechaHistoria);

        $idpaciente=$cli->idpaciente;

        $paciente=DB::table('paciente')
        ->where('idpaciente','=',$idpaciente)
        ->first();

        return view("pacientes.historiales.historias.index",["paciente"=>Paciente::findOrFail($idpaciente),"historia"=>$historia]);
    }

}