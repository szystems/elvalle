@extends ('layouts.admin')
@section ('contenido')


<div>
        <div class="card mb-4">
            <header class="card-header">
                <h2 class="h3 card-header-title"><strong>Historial Paciente: {{$paciente->nombre}}</strong></h2>
            </header>

            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                    </ul>
                </div>
            @endif
            <!--Mensaje de abono correcto-->
            <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))

                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                        {{session()->forget('alert-' . $msg)}}
                    @endforeach
            </div> <!-- fin .flash-message -->

            <div class="card-body">
                <ul class="nav nav-tabs">
                    @php
                        $totalRecetas=DB::table('receta')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();

                        $totalFisicos=DB::table('fisico')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();

                        $totalEmbarazos=DB::table('embarazo')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();

                        $totalRadiofrecuencias=DB::table('radiofrecuencia')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();

                        $totalSillas=DB::table('sillae_ciclo')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();

                        $totalClimaymenos=DB::table('climaymeno')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();

                        $totalIncontinencias=DB::table('incontinenciau')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();

                        $totalColposcopias=DB::table('colposcopia')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();

                        $totalUltrasonidos=DB::table('ultrasonido_obstetrico')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();
                    @endphp
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('HistorialController@show',$paciente->idpaciente)}}">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('HistoriaController@index','searchidpaciente='.$paciente->idpaciente)}}">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('RecetaController@index','searchidpaciente='.$paciente->idpaciente)}}">Recetas <span class="badge badge-info">{{ $totalRecetas }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('FisicoController@index','searchidpaciente='.$paciente->idpaciente)}}">Fisico <span class="badge badge-info">{{ $totalFisicos }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('EmbarazoController@index','searchidpaciente='.$paciente->idpaciente)}}">Embarazos <span class="badge badge-info">{{ $totalEmbarazos }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('RadiofrecuenciaController@index','searchidpaciente='.$paciente->idpaciente)}}">Ginecoestética <span class="badge badge-info">{{ $totalRadiofrecuencias }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('SillaElectromagneticaController@index','searchidpaciente='.$paciente->idpaciente)}}">Silla Electromagnetica <span class="badge badge-info">{{ $totalSillas }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('ClimaymenoController@index','searchidpaciente='.$paciente->idpaciente)}}">Climaterio / Menopausea <span class="badge badge-info">{{ $totalClimaymenos }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('IncontinenciauController@index','searchidpaciente='.$paciente->idpaciente)}}">Incontinencia Urinaria <span class="badge badge-info">{{ $totalIncontinencias }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{URL::action('ColposcopiaController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Colposcopia</u></b> <span class="badge badge-info">{{ $totalColposcopias }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('UltrasonidoObstetricoController@index','searchidpaciente='.$paciente->idpaciente)}}">Ultrasonido Obstetrico <span class="badge badge-info">{{ $totalUltrasonidos }}</span></a>
                    </li>
                </ul>
                
                
                <div class="card">
        
                    <header class="card-header">
                        <h2 class="h3 card-header-title"><strong>Listado de Colposcopias: </strong></h2>
                        @if(Auth::user()->tipo_usuario == "Doctor")
                        <a href="colposcopias/create?idpaciente={{$paciente->idpaciente}}">
                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Nuevo examen colposcopia ">
                                <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                    <i class="far fa-plus-square"></i> Nueva Colposcopia
                                </button>
                            </span>
                        </a>
                        @endif
                    </header> 
        
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <th><h5><STRONG>Opciones</STRONG></th>
                                    <th><h5><STRONG>Fecha</STRONG></th>
                                    <th><h5><STRONG>Doctor</STRONG></th>
                                    
                                </thead>
                                @foreach ($colposcopias as $colposcopia)
                                    <tr>
                                        <td>
            
                                            <a href="{{URL::action('ColposcopiaController@show',$colposcopia->idcolposcopia)}}">
                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver examen colposcopia">
                                                    <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                                        <i class="far fa-eye"></i>
                                                    </button>
                                                </span>
                                            </a>
                                            @if(Auth::user()->tipo_usuario == "Doctor")
                                                <a href="{{URL::action('ColposcopiaController@edit',$colposcopia->idcolposcopia)}}">
                                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar examen colposcopia">
                                                        <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                                                <i class="far fa-edit"></i>
                                                        </button>
                                                    </span>
                                                </a>

                                                <a href="" data-target="#modal-eliminar-{{$colposcopia->idcolposcopia}}" data-toggle="modal">
                                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar examen colposcopia">
                                                        <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                                                <i class="far fa-minus-square"></i>
                                                        </button>
                                                    </span>
                                                </a>
                                            @endif
                                        </td>
                                        <?php
                                            $fecha = date("d-m-Y", strtotime($colposcopia->fecha));
                                        ?>
                                        <td align="left"><h5>{{ $fecha}}</h5></td>
                                        <td align="center"><h5>{{ $colposcopia->Doctor}}</h5></td>
                                    </tr>
                                    @include('pacientes.historiales.colposcopias.modaleliminar')
                                @endforeach
                            </table>
                        </div>
                        {{$colposcopias->render()}}
                    </div>
        
                    <div class="card-footer">
                    </div>
                                
                </div>

            </div>

            <footer class="card-footer">

            </footer>
        </div>
</div>
   
@endsection