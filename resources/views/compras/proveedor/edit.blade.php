@extends ('layouts.admin')
@section ('contenido')
<script>

</script>

<div class="col-md-12 mb-12">
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
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                  <a class="nav-link active" id="proveedor-tab" data-toggle="tab" href="#proveedor" role="tab" aria-controls="proveedor" aria-selected="true">Proveedor</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link" id="vendedor-tab" data-toggle="tab" href="#vendedor" role="tab" aria-controls="vendedor" aria-selected="false">Vendedores</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            
            <div class="tab-pane fade show active" id="proveedor" role="tabpanel" aria-labelledby="proveedor-tab">
                <!--Proveedor-->
                <div class="card">
                    <header class="card-header">
                        <h2 class="h3 card-header-title"><strong>Editar Proveedor: {{$persona->nombre}}</strong></h2>
                    </header> 

                    <div class="card-body">
                        <h5 class="h4 card-title">Ingrese los datos que se le piden:</h5>
                        <h6><font color="orange"> Campos Obligatorios *</font></h6>
                        @if (count($errors)>0)
                            <div class="alert alert-danger">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif

                        {!!Form::model($persona,['method'=>'PATCH','route'=>['proveedor.update',$persona->idpersona]])!!}
                        {{Form::token()}}
                        <h3><strong><u>Datos Generales: </u></strong></h3>
                        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                              <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                    <label for="nombre"><font color="orange">*</font>Nombre</label>
                                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{$persona->nombre}}" >
                                    @if ($errors->has('nombre'))
                                          <span class="help-block">
                                                <strong>
                                                      {{ $errors->first('nombre') }}
                                                </strong>
                                          </span>
                                    @endif
                              </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control" name="email" value="{{$persona->email}}">
                                    @if ($errors->has('email'))
                                          <span class="help-block">
                                                <strong>
                                                      {{ $errors->first('email') }}
                                                </strong>
                                          </span>
                                    @endif
                              </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                              <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                                    <label for="direccion">Dirección</label>
                                    <input id="direccion" type="text" class="form-control" name="direccion" value="{{$persona->direccion}}">
                                    @if ($errors->has('direccion'))
                                          <span class="help-block">
                                                <strong>
                                                      {{ $errors->first('direccion') }}
                                                </strong>
                                          </span>
                                    @endif
                              </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                              <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                                    <label for="telefono">Teléfono</label>
                                    <input id="telefono" type="text" class="form-control" name="telefono" value="{{$persona->telefono}}">
                                    @if ($errors->has('telefono'))
                                          <span class="help-block">
                                                <strong>
                                                      {{ $errors->first('telefono') }}
                                                </strong>
                                          </span>
                                    @endif
                              </div>
                        </div>
                        
                        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                              <div class="form-group{{ $errors->has('tipo_documento') ? ' has-error' : '' }}">
                                    <label for="tipo_documento">Tipo de Documento</label>
                                    <input id="tipo_documento" type="text" class="form-control" name="tipo_documento" value="{{$persona->tipo_documento}}">
                                    @if ($errors->has('tipo_documento'))
                                          <span class="help-block">
                                                <strong>
                                                      {{ $errors->first('tipo_documento') }}
                                                </strong>
                                          </span>
                                    @endif
                              </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                              <div class="form-group{{ $errors->has('num_documento') ? ' has-error' : '' }}">
                                    <label for="num_documento">Numero de Documento</label>
                                    <input id="num_documento" type="text" class="form-control" name="num_documento" value="{{$persona->num_documento}}">
                                    @if ($errors->has('num_documento'))
                                          <span class="help-block">
                                                <strong>
                                                      {{ $errors->first('num_documento') }}
                                                </strong>
                                          </span>
                                    @endif
                              </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                              <div class="form-group{{ $errors->has('banco') ? ' has-error' : '' }}">
                                    <label for="banco">Nombre de Banco</label>
                                    <input id="banco" type="text" class="form-control" name="banco" value="{{$persona->banco}}">
                                    @if ($errors->has('banco'))
                                          <span class="help-block">
                                                <strong>
                                                      {{ $errors->first('banco') }}
                                                </strong>
                                          </span>
                                    @endif
                              </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                              <div class="form-group{{ $errors->has('nombre_cuenta') ? ' has-error' : '' }}">
                                    <label for="nombre_cuenta">Nombre de Cuenta</label>
                                    <input id="nombre_cuenta" type="text" class="form-control" name="nombre_cuenta" value="{{$persona->nombre_cuenta}}">
                                    @if ($errors->has('nombre_cuenta'))
                                          <span class="help-block">
                                                <strong>
                                                      {{ $errors->first('nombre_cuenta') }}
                                                </strong>
                                          </span>
                                    @endif
                              </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                              <div class="form-group{{ $errors->has('numero_cuenta') ? ' has-error' : '' }}">
                                    <label for="numero_cuenta">Numero de Cuenta</label>
                                    <input id="numero_cuenta" type="text" class="form-control" name="numero_cuenta" value="{{$persona->numero_cuenta}}">
                                    @if ($errors->has('numero_cuenta'))
                                          <span class="help-block">
                                                <strong>
                                                      {{ $errors->first('numero_cuenta') }}
                                                </strong>
                                          </span>
                                    @endif
                              </div>
                        </div>
                    </div>

                    <footer class="card-footer">
                        <div class="form-group">
                            <button class="btn btn-danger" type="reset"><i class="fas fa-ban"></i> Borrar</button>
                            <button class="btn btn-info" type="submit"><i class="far fa-save"></i> Guardar</button>
                        </div>

                        {!!Form::close()!!}
                    </footer>
                </div>
            </div>
            
            <div class="tab-pane fade" id="vendedor" role="tabpanel" aria-labelledby="vendedor-tab">
                <!--vendedor-->
                <div class="card">
                        <header class="card-header">
                              <h2 class="h3 card-header-title"><strong>Vendedores</strong></h2>
                        </header>

                        <div class="card-body">
                              <div class="card">
                                    <header class="card-header">
                                          <h2 class="h3 card-header-title"><strong>Vendedores:</strong></h2>
                                    </header>
                                    
                                    <div class="card-body">
                                          <div class="table-responsive">
                                          <table class="table table-striped table-bordered table-condensed table-hover">          
                                                <thead>
                                                      <th><h5><strong><i class="fa fa-sliders-h"></i></strong></h5></th>
                                                      <th><h5><strong>Nombre</strong></h5></th>
                                                      <th><h5><strong>Codigo</strong></h5></th>
                                                      <th><h5><strong>Telefono</strong></h5></th>
                                                      <th><h5><strong>Email</strong></h5></th>       
                                                </thead>
                                                @foreach ($vendedores as $vendedor)
                                                      <tr>
                                                      <td align="left">
                                                            <a href="" data-target="#modal-editar-vendedor{{$vendedor->idvendedor}}" data-toggle="modal">
                                                                  <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar vendedor">
                                                                  <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                                                        <i class="far fa-edit"></i>
                                                                  </button>
                                                                  </span>
                                                            </a>
                                                            <a href="" data-target="#modal-eliminar-vendedor{{$vendedor->idvendedor}}" data-toggle="modal">
                                                                  <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Vendedor">
                                                                  <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                                                        <i class="far fa-minus-square"></i>
                                                                  </button>
                                                                  </span>
                                                            </a>
                                                      </td>
                                                      <td align="left"><h5>{{$vendedor->nombre}}</h5></td>
                                                      <td align="left"><h5>{{$vendedor->codigo}}</h5></td>
                                                      <td align="left"><h5>{{$vendedor->telefono}}</h5></td>
                                                      <td align="left"><h5>{{$vendedor->email}}</h5></td>
                                                      </tr>
                                                      @include('compras.proveedor.eliminarvendedor.eliminarvendedor')
                                                      @include('compras.proveedor.editarvendedor.editarvendedor')
                                                @endforeach
                                                      <tfoot>
                                                      </tfoot>
                                          </table>
                                          </div>
                                          
                                    </div>

                                    <footer class="card-footer">

                                    </footer>
                              </div> 
                              <div class="card">
                                    {!!Form::open(array('url'=>'compras/vendedor','method'=>'POST','autocomplete'=>'off'))!!}
                                    {{Form::token()}}
                                    <header class="card-header">
                                          <h2 class="h3 card-header-title"><strong>Agregar Vendedor:</strong></h2>
                                          <h6><font color="orange"> Campos obligatorios *</font></h6>
                                    </header>
                                    
                                    <div class="card-body">
                                          <div class="form-group">
                                                <div class="input-group">
                                                      <input type="hidden" name="idproveedor" class="form-control" id="idproveedor" value="{{$persona->idpersona}}">
                                                      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                            <label for="nombre"><strong><font color="orange">*</font>Nombre:</strong></label>
                                                            <div class="form-group">
                                                                  <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}">
                                                            </div>
                                                      </div>
                                                      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                            <label for="codigo"><strong>Codigo:</strong></label>
                                                            <div class="form-group">
                                                                  <input type="text" name="codigo" class="form-control" value="{{old('codigo')}}">
                                                            </div>
                                                      </div>
                                                      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                            <label for="telefono"><strong>Telefono:</strong></label>
                                                            <div class="form-group">
                                                                  <input type="text" name="telefono" class="form-control" value="{{old('telefono')}}">
                                                            </div>
                                                      </div>
                                                      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                            <label for="email"><strong>Email:</strong></label>
                                                            <div class="form-group">
                                                                  <input type="text" name="email" class="form-control" value="{{old('email')}}">
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>

                                    <footer class="card-footer">
                                          <div class="form-group" id="guardar">
                                                <button class="btn btn-danger" type="reset"><i class="fas fa-ban"></i> Borrar</button>
                                                <button class="btn btn-info" type="submit"><i class="far fa-save"></i> Agregar</button>
                                          </div>
                                    </footer>
                                    {!!Form::close()!!}
                              </div>
                        </div>

                        <footer class="card-footer">
                              
                        </footer>
                </div>
            </div>
        </div>
</div>
@push ('scripts')
    <script>
        

        function validardecimal(e,txt) 
        {
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla==8) return true;
            if (tecla==46 && txt.indexOf('.') != -1) return false;
            patron = /[\d\.]/;
            te = String.fromCharCode(tecla);
            return patron.test(te); 
        }  

        function validarentero(e,txt) 
        {
            tecla = (document.all) ? e.keyCode : e.which;

            //Tecla de retroceso para borrar, siempre la permite
            if (tecla==8)
            {
                return true;
            }
        
        // Patron de entrada, en este caso solo acepta numeros
        patron =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final); 
        }
    </script>
@endpush
@endsection