@extends ('layouts.admin')
@section ('contenido')



<div>
      <div class="card mb-4">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Articulo: {{$articulo->nombre}}</strong></h2>
                  
            </header>
                {{Form::open(array('action' => 'ReportesController@vistaarticulo','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

                {{Form::token()}}		
					<div class="card mb-4">
						<header class="card-header d-md-flex align-items-center">
							<h4><strong>Imprimir Artículo </strong></h4>
							<input type="hidden" id="rid" class="form-control datepicker" name="rid" value="{{$articulo->idarticulo}}">
                            <input type="hidden" id="rnombre" class="form-control datepicker" name="rnombre" value="{{$articulo->nombre}}">
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
            <div class="card-body">
                  <a href="{{URL::action('ArticuloController@edit',$articulo->idarticulo)}}">
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Articulo">
                        <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> Editar</button>
                    </span>
                  </a>
								
				  <a href="" data-target="#modaleliminarshow-delete-{{$articulo->idarticulo}}" data-toggle="modal">
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Articulo">
                        <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button"><i class="far fa-minus-square"></i> Eliminar</button>
                    </span>
				  </a>
                  <div class="row">
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="codigo"><strong>Código</strong></label>
                            <p>{{$articulo->codigo}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="nombre"><strong>Nombre</strong></label>
                            <p>{{$articulo->nombre}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="categoria"><strong>Categoria</strong></label>
                            <p>{{$articulo->categoria}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="descripcion"><strong>Descripción</strong></label>
                            <p>{{$articulo->descripcion}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="bodega"><strong>Bodega</strong></label>
                            <p>{{$articulo->bodega}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="ubicacion"><strong>Ubicación</strong></label>
                            <p>{{$articulo->ubicacion}}</p>
                        </div>
                    </div>
                    
                    @if ($articulo->imagen != null)
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="imagen"><strong>Imagen</strong></label>
                            <p><img src="{{asset('imagenes/articulos/'.$articulo->imagen)}}" alt="{{ $articulo->nombre}}" height="400px"  class="img-thumbnail"></p>
                        </div>
                    </div>
                    @endif
                  </div>
            </div>
			@include('almacen.articulo.modaleliminarshow')
                
                        
              

            <footer class="card-footer">
                  

        
            </footer>
      </div>
      
</div>
   
@endsection