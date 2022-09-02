@extends ('layouts.admin')
@section ('contenido')


<div>
      <div class="card mb-4">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Categoría: {{$categoria->nombre}}</strong></h2>
                  
            </header>
            <div class="card-body">

                @if(Auth::user()->tipo_usuario != "Doctor")
                <a href="{{URL::action('CategoriaController@edit',$categoria->idcategoria)}}">
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Categoría">
                        <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> Editar</button>
                    </span>
                  </a>
								
				  <a href="" data-target="#modaleliminarshow-delete-{{$categoria->idcategoria}}" data-toggle="modal">
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Categoría">
                        <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button"><i class="far fa-minus-square"></i> Eliminar</button>
                    </span>
				  </a>
                  @endif
                  
                  <div class="row">
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="nombre"><strong>Nombre</strong></label>
                            <p>{{$categoria->nombre}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="descripcion"><strong>Descripción</strong></label>
                            <p>{{$categoria->descripcion}}</p>
                        </div>
                    </div>
                    @if ($categoria->imagen != null)
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="imagen"><strong>Imagen</strong></label>
                            <p><img src="{{asset('imagenes/categorias/'.$categoria->imagen)}}" alt="{{ $categoria->nombre}}" height="400px"  class="img-thumbnail"></p>
                        </div>
                    </div>
                    @endif
                    
                  </div>
            </div>
			@include('almacen.categoria.modaleliminarshow')
                
                        
              

            <footer class="card-footer">
                  

        
            </footer>
      </div>
</div>
   
@endsection