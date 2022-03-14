@extends ('layouts.admin')
@section ('contenido')


<div>
      <div class="card mb-4">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Rubro: {{$rubro->nombre}}</strong></h2>
                  
            </header>
            <div class="card-body">
                <a href="{{URL::action('RubroController@edit',$rubro->idrubro)}}">
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Rubro">
                        <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> Editar</button>
                    </span>
                  </a>
								
				  <a href="" data-target="#modaleliminarshow-delete-{{$rubro->idrubro}}" data-toggle="modal">
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Categoría">
                        <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button"><i class="far fa-minus-square"></i> Eliminar</button>
                    </span>
				  </a>
                  <div class="row">
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="nombre"><strong>Nombre</strong></label>
                            <p>{{$rubro->nombre}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="nota"><strong>Nota</strong></label>
                            <p>{{$rubro->nota}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="estado_rubro"><strong>Estado en Orden</strong></label>
                            <p>{{$rubro->estado_rubro}}</p>
                        </div>
                    </div>
                    
                  </div>
            </div>
			@include('ventas.rubro.modaleliminarshow')
                
                        
              

            <footer class="card-footer">
            @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif 
                <!-- .flash-message -->

                <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))
                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                            @endif
                            {{session()->forget('alert-' . $msg)}}
                        @endforeach
                    </div> 
                <!-- fin .flash-message -->
                {!!Form::open(array('url'=>'ventas/rubroarticulo','method'=>'POST','autocomplete'=>'off'))!!}
                {{Form::token()}}
                <h4><strong>Agregar articulo a rubro</strong>
                <div class="card-body">
                    <div class="row">
                        <input  id="idrubro" type="hidden" class="form-control" name="idrubro" value="{{$rubro->idrubro}}" >
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <div class="form-group{{ $errors->has('idarticulo') ? ' has-error' : '' }} mb-2">
                                <label for="fecha"></label><font color="orange">*</font>Articulo:</label>
                                <select name="idarticulo" class="form-control selectpicker" id="idarticulo" data-live-search="true" required>
                                    <option value="" selected>Seleccione un articulo</option>
                                        @foreach($articulos as $articulo)
                                    <option value="{{$articulo->idarticulo}}">{{$articulo->nombre}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                            <div class="form-group{{ $errors->has('precio_costo') ? ' has-error' : '' }} mb-2">
                                <label for="precio_costo"></label><font color="orange">*</font>Precio Costo:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">{{ Auth::user()->moneda }}</span>
                                    </div>
                                    <input type="text" name="precio_costo" class="form-control" aria-label="Amount (to the nearest dollar)" value="0.00" onkeypress="return validardecimal(event,this.value)" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                            <div class="form-group{{ $errors->has('precio_venta') ? ' has-error' : '' }} mb-2">
                                <label for="precio_venta"></label><font color="orange">*</font>Precio Venta:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">{{ Auth::user()->moneda }}</span>
                                    </div>
                                    <input type="text" name="precio_venta" class="form-control" aria-label="Amount (to the nearest dollar)" value="0.00" onkeypress="return validardecimal(event,this.value)" required>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="form-group mb-2">
                                <span class="input-group-btn"><br>
                                    <button type="submit" class="btn btn-success">
                                        <i class="far fa-calendar-plus"></i> Agregar
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                </h4>
                {{Form::close()}}

                <h2 class="h3 card-header-title"><strong>Artículos del Rubro:</strong></h2>
                <div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
                            <th><h5><STRONG>Articulo</STRONG></th>
                            <th><h5><STRONG>Precio Costo</STRONG></th>
                            <th><h5><STRONG>Precio Venta</STRONG></th>
                            <th><h5><STRONG><i class="fa fa-sliders-h"></i></STRONG></th>
							
						</thead>
		               @foreach ($rubroArticulos as $rubroarticulo)
						<tr>
                            <td align="center"><h5>{{ $rubroarticulo->nombre}}</h5></td>
                            <td align="center"><h5>{{ Auth::user()->moneda }}{{number_format($rubroarticulo->precio_costo,2, '.', ',')}}</h5></td>
                            <td align="center"><h5>{{ Auth::user()->moneda }}{{number_format($rubroarticulo->precio_venta,2, '.', ',')}}</h5></td>
							<td>
                                <a href="" data-target="#modal-editar-articulo{{$rubroarticulo->idrubro_articulo}}" data-toggle="modal">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Articulo">
                                        <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    </span>
                                </a>
								<a href="" data-target="#modal-articulo-{{$rubroarticulo->idrubro_articulo}}" data-toggle="modal">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Articulo">
										<button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
												<i class="far fa-calendar-minus"></i>
										</button>
									</span>
								</a>
							</td>
							
							
						</tr>
                        @include('ventas.rubro.editararticulo.editararticulo')
						@include('ventas.rubro.modalarticulo')
						@endforeach
					</table>
				</div>

        
            </footer>
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