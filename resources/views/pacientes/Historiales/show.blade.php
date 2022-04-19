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
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <!--perfil-->
                    <li class="nav-item">
                        <a class="nav-link active" id="perfil-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="perfil" aria-selected="true">Perfil</a>
                    </li>
                    <!--Recetas-->
                    <li class="nav-item">
                        <a class="nav-link" id="recetas-tab" data-toggle="tab" href="#recetas" role="tab" aria-controls="recetas" aria-selected="false">Recetas</a>
                    </li>
                    <!--Historia-->
                    <li class="nav-item">
                          <a class="nav-link" id="historia-tab" data-toggle="tab" href="#historia" role="tab" aria-controls="historia" aria-selected="false">Historia</a>
                    </li>
                    <!--Fisico-->
                    <li class="nav-item">
                          <a class="nav-link" id="fisico-tab" data-toggle="tab" href="#fisico" role="tab" aria-controls="fisico" aria-selected="false">Fisico</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    
                    <!--perfil-->
                    <div class="tab-pane fade show active" id="perfil" role="tabpanel" aria-labelledby="perfil-tab">
                        <div class="card">
        
                            <header class="card-header">
                                <h2 class="h3 card-header-title"><strong>Perfil: </strong></h2>
                            </header> 
        
                            <div class="card-body">
                                    {{Form::open(array('action' => 'ReportesController@vistapaciente','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

                                    {{Form::token()}}		
                                        <div class="card mb-4">
                                            <header class="card-header d-md-flex align-items-center">
                                                <h4><strong>Imprimir Paciente </strong></h4>
                                                <input type="hidden" id="rid" class="form-control datepicker" name="rid" value="{{$paciente->idpaciente}}">
                                            </header>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                                                        <div class="form-group mb-2">
                                                            <select name="pdf" class="form-control" value="">
                                                                    <option value="Descargar" selected>Descargar</option>
                                                                    <option value="Navegador">Ver en navegador</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                                                        <div class="form-group mb-2">
                                                            <span class="input-group-btn">
                                                                <button type="submit" class="btn btn-danger">
                                                                    <i class="fa fa-file-pdf"></i> PDF
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    {{Form::close()}}

                                    <a href="{{URL::action('PacienteController@edit',$paciente->idpaciente)}}">
                                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Paciente">
                                            <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> Editar</button>
                                        </span>
                                    </a>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="nombre"><strong>Nombre</strong></label>
                                                <p>{{$paciente->nombre}}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="sexo"><strong>Sexo</strong></label>
                                                <p>{{$paciente->sexo}}</p>
                                            </div>
                                        </div>
                                        <?php
                                            $fecha_nacimiento = date("d-m-Y", strtotime($paciente->fecha_nacimiento));
                    
                                            $cumpleanos = new DateTime($paciente->fecha_nacimiento);
                                            $hoy = new DateTime();
                                            $annos = $hoy->diff($cumpleanos);
                                            $edad = $annos->y;
                                      ?>
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="fecha_nacimiento"><strong>Fecha Nacimiento</strong></label>
                                                <p>{{$fecha_nacimiento}} (Edad: {{$edad}})</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="correo"><strong>Correo</strong></label>
                                                <p>{{$paciente->correo}}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="telefono"><strong>Teléfono</strong></label>
                                                <p>{{$paciente->telefono}}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="direccion"><strong>Dirección</strong></label>
                                                <p>{{$paciente->direccion}}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="dpi"><strong>DPI</strong></label>
                                                <p>{{$paciente->dpi}}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="nit"><strong>Nit</strong></label>
                                                <p>{{$paciente->nit}}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="estado"><strong>Estado</strong></label>
                                                <p>{{$paciente->estado}}</p>
                                            </div>
                                        </div>
                                        @if ($paciente->foto != null)
                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                <div class="form-group">
                                                    <label for="foto"><strong>Imagen</strong></label>
                                                    <p><img src="{{asset('imagenes/pacientes/'.$paciente->foto)}}" alt="{{ $paciente->nombre}}" height="300px"  class="img-thumbnail"></p>
                                                </div>
                                            </div>
                                         @endif
                                    </div>
                            </div>
        
                            <div class="card-footer">
                            </div>
                                
                        </div>
                    </div>
                    <!--Recetas-->
                    <div class="tab-pane fade" id="recetas" role="tabpanel" aria-labelledby="recetas-tab">
                        <div class="card">
                                <header class="card-header">
                                      <h2 class="h3 card-header-title"><strong>Recetas: </strong></h2>
                                </header>
        
                                <div class="card-body">
                                </div>
        
                                <footer class="card-footer">
                                </footer>
                        </div>
                    </div>
                    <!--Historia-->
                    <div class="tab-pane fade" id="historia" role="tabpanel" aria-labelledby="historia-tab">
                        <div class="card">
                                <header class="card-header">
                                      <h2 class="h3 card-header-title"><strong>Historia: </strong></h2>
                                </header>
        
                                <div class="card-body">
                                    

                                </div>
        
                                <footer class="card-footer">
                                </footer>
                        </div>
                    </div>
                    <!--Fisico-->
                    <div class="tab-pane fade" id="fisico" role="tabpanel" aria-labelledby="fisico-tab">
                        <div class="card">
                                <header class="card-header">
                                      <h2 class="h3 card-header-title"><strong>Examenes Fisicos: </strong></h2>
                                </header>
        
                                <div class="card-body">
                                </div>
        
                                <footer class="card-footer">
                                </footer>
                        </div>
                    </div>
                    
                </div>
            </div>

            <footer class="card-footer">

            </footer>
        </div>
</div>
   
@endsection