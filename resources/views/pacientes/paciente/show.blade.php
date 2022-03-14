@extends ('layouts.admin')
@section ('contenido')


<div>
      <div class="card mb-4">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Paciente: {{$paciente->nombre}}</strong></h2>
                  
            </header>
            
            <div class="card-body">
                <a href="{{URL::action('PacienteController@edit',$paciente->idpaciente)}}">
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Paciente">
                        <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> Editar</button>
                    </span>
                </a>		
                <a href="" data-target="#modaleliminarshow-delete-{{$paciente->idpaciente}}" data-toggle="modal">
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Doctor">
                        <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button"><i class="far fa-minus-square"></i> Eliminar</button>
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
			@include('pacientes.paciente.modaleliminarshow')
                
                        
              

            <footer class="card-footer">
                  

        
            </footer>
      </div>
</div>
   
@endsection