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
                        <a class="nav-link active" aria-current="page" href="{{URL::action('SillaElectromagneticaController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Silla Electromagnetica</u></b> <span class="badge badge-info">{{ $totalSillas }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('ClimaymenoController@index','searchidpaciente='.$paciente->idpaciente)}}">Climaterio / Menopausea <span class="badge badge-info">{{ $totalClimaymenos }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('IncontinenciauController@index','searchidpaciente='.$paciente->idpaciente)}}">Incontinencia Urinaria <span class="badge badge-info">{{ $totalIncontinencias }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('ColposcopiaController@index','searchidpaciente='.$paciente->idpaciente)}}">Colposcopia <span class="badge badge-info">{{ $totalColposcopias }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('UltrasonidoObstetricoController@index','searchidpaciente='.$paciente->idpaciente)}}">Ultrasonido Obstetrico <span class="badge badge-info">{{ $totalUltrasonidos }}</span></a>
                    </li>
                </ul>
                
                
                <div class="card">
        
                    <header class="card-header">
                        <h2 class="h3 card-header-title"><strong>Silla Electromagnetica: </strong></h2>

                        @if(Auth::user()->tipo_usuario == "Doctor")
                        
                        {!!Form::open(array('url'=>'pacientes/historiales/sillas','method'=>'POST','autocomplete'=>'off'))!!}
                        {{Form::token()}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                                    <div class="form-group mb-2">
                                        <label for="ciclo_numero"></label><font color="orange"></font>Ciclo:</label>
                                        <select name="ciclo_numero" class="form-control">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                                    <div class="form-group mb-2">
                                        <span class="input-group-btn"><br>
                                            <button type="submit" class="btn btn-success">
                                                <i class="far fa-plus-square"></i> Crear Ciclo
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--datos ocultos-->
                        <input type="hidden" name="idpaciente" value="{{ $paciente->idpaciente }}">
                        <input type="hidden" name="iddoctor" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="idusuario" value="{{ Auth::user()->id }}">
                        
                        </h4>
                        {{Form::close()}}
                            
                        @endif
                    </header>
        
                    <div class="card-body">
                        <h2 class="h3 card-header-title"><strong>Listado de ciclos de silla electromagnetica: </strong></h2>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <th><h5><i class="fa fa-sliders-h"></i></th>
                                    <th><h5><STRONG>Fecha</STRONG></th>
                                    <th><h5><STRONG>Ciclo</STRONG></th>
                                    <th><h5><STRONG>Doctor</STRONG></th>
                                    
                                </thead>
                                @foreach ($sillaCiclos as $sillaCiclo)
                                    <tr>
                                        <td>
            
                                            <a href="{{URL::action('SillaElectromagneticaController@show',$sillaCiclo->idsillae_ciclo)}}">
                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Ciclo">
                                                    <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                                        <i class="far fa-eye"></i>
                                                    </button>
                                                </span>
                                            </a>
                                            @if(Auth::user()->tipo_usuario == "Doctor")
                                                <a href="" data-target="#modal-eliminar-{{$sillaCiclo->idsillae_ciclo}}" data-toggle="modal">
                                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar ciclo">
                                                        <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                                                <i class="far fa-minus-square"></i>
                                                        </button>
                                                    </span>
                                                </a>
                                            @endif
                                        </td>
                                        <?php
                                            $fecha = date("d-m-Y", strtotime($sillaCiclo->fecha));
                                        ?>
                                        <td align="left"><h5>{{ $fecha}}</h5></td>
                                        <td align="center"><h5>{{ $sillaCiclo->ciclo_numero}}</h5></td>
                                        <td align="center"><h5>{{ $sillaCiclo->Doctor}}</h5></td>
                                    </tr>
                                    @include('pacientes.historiales.sillas.modaleliminar')
                                @endforeach
                            </table>
                        </div>
                        {{$sillaCiclos->render()}}
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