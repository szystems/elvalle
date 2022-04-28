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
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{URL::action('HistorialController@show',$paciente->idpaciente)}}">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{URL::action('RecetaController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Recetas</u></b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('HistoriaController@index','searchidpaciente='.$paciente->idpaciente)}}">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fisico</a>
                    </li>
                </ul>
                
                
                <div class="card">
        
                    <header class="card-header">
                        <h2 class="h3 card-header-title"><strong>Listado de Recetas: </strong></h2>
                        @if(Auth::user()->tipo_usuario == "Doctor")
                        <a href="recetas/create?idpaciente={{$paciente->idpaciente}}">
                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Nueva receta ">
                                <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                    <i class="far fa-plus-square"></i> Nueva Receta
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
                                @foreach ($recetas as $receta)
                                    <tr>
                                        <td>
            
                                            <a href="{{URL::action('RecetaController@show',$receta->idreceta)}}">
                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Receta">
                                                    <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                                        <i class="far fa-eye"></i>
                                                    </button>
                                                </span>
                                            </a>
                                            @if(Auth::user()->tipo_usuario == "Doctor")
                                            <a href="" data-target="#modal-eliminar-{{$receta->idreceta}}" data-toggle="modal">
                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Receta">
                                                    <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                                            <i class="far fa-minus-square"></i>
                                                    </button>
                                                </span>
                                            </a>
                                            @endif
                                        </td>
                                        <?php
                                            $fecha = date("d-m-Y", strtotime($receta->fecha));
                                        ?>
                                        <td align="left"><h5>{{ $fecha}}</h5></td>
                                        <td align="center"><h5>{{ $receta->Doctor}}</h5></td>
                                    </tr>
                                    @include('pacientes.historiales.recetas.modaleliminar')
                                @endforeach
                            </table>
                        </div>
                        {{$recetas->render()}}
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