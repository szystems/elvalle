<?php

namespace sisVentasWeb\Http\Controllers;

use Illuminate\Http\Request;

use sisVentasWeb\Http\Requests;
use sisVentasWeb\Paciente;
use sisVentasWeb\Incontinenciau;
//use sisVentasWeb\IncontinenciauCuestionario;
use sisVentasWeb\Bitacora;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use sisVentasWeb\Http\Requests\IncontinenciaFormRequest;
use sisVentasWeb\Http\Requests\BitacoraFormRequest;
use DB;
use Auth;
use sisVentasWeb\User;
use Illuminate\Support\Facades\Input;

class IncontinenciauController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $idpaciente=trim($request->get('searchidpaciente'));
        $incontinencias=DB::table('incontinenciau as i')
        ->join('paciente as p','i.idpaciente','=','p.idpaciente')
        ->join('users as d','i.iddoctor','=','d.id')
        ->join('users as u','i.idusuario','=','u.id')
        ->select('i.idembarazo','i.fecha','i.iddoctor','d.name as Doctor','d.foto as Imgdoctor','d.especialidad','i.idpaciente','p.nombre as Paciente','p.foto as Imgdpaciente','i.idusuario','u.name as Usuario','u.tipo_usuario')
        ->where('i.idpaciente','=',$idpaciente) 
        ->orderby('i.fecha','desc')
        ->paginate(20);
        
        

        return view("pacientes.historiales.incontinencias.index",["paciente"=>Paciente::findOrFail($idpaciente),"incontinencias"=>$incontinencias]);
    }
}
