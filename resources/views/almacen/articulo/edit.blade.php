@extends ('layouts.admin')
@section ('contenido')


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
            @endforeach
      </div> <!-- fin .flash-message -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                  <a class="nav-link active" id="articulo-tab" data-toggle="tab" href="#articulo" role="tab" aria-controls="articulo" aria-selected="true">Articulo</a>
            </li>
      </ul>
      <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="articulo" role="tabpanel" aria-labelledby="articulo-tab">
                  <!--Informacion general de articulo-->
                  <div class="card">
                        <header class="card-header">
                              <h2 class="h3 card-header-title"><strong>Editar Información de Articulo: </h2></strong>
                        </header>

                        <div class="card-body">
                              <h5 class="h4 card-title">Cambie los datos que desee editar:</h5>
                              <h6><font color="orange"> Campos Obligatorios *</font></h6>
                              
                              
                              <div class="col-lg-6 col-sm-12 col-md-12 col-xs-12">
                                    {!!Form::model($articulo,['method'=>'PATCH','route'=>['articulo.update',$articulo->idarticulo],'files'=>'true'])!!}
                                    {{Form::token()}}
                                    <div class="form-group">
                                          <label for="nombre"><font color="orange">*</font>Nombre</label>
                                          <input type="text" name="nombre" class="form-control" placeholder="Nombre..." value="{{$articulo->nombre}}">
                                    </div>
                                    <div class="form-group">
                                          <label for="codigo"><font color="orange">*</font>Código</label>
                                          <input type="text" name="codigo" class="form-control" placeholder="Codigo..." value="{{$articulo->codigo}}">
                                    </div>
                                    <div class="form-group">
                                          <label for="categoria"><font color="orange">*</font>Categoría</label>
                                                <a href="{{url('almacen\categoria\create')}}">
                                                      <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear Nueva Categoria">
                                                            <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                                                  <i class="far fa-plus-square"></i>
                                                            </button>
                                                      </span>
                                                </a>
                                          <select name="idcategoria" class="form-control">
                                                @foreach ($categorias as $cat)
                                                      @if ($cat->idcategoria==$articulo->idcategoria)
                                                            <option value="{{$cat->idcategoria}}" selected>{{$cat->nombre}}</option>
                                                      @else
                                                            <option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>
                                                      @endif
                                                @endforeach
                                          </select>
                                    </div>
                                    <div class="form-group">
                                          <label for="minimo"><font color="orange">*</font>Minimo</label>
                                          <input type="number" name="minimo" class="form-control" id="minimo" value="{{$articulo->minimo}}" onkeypress="return validarentero(event,this.value)">
                                    </div>
                                    <div class="form-group">
                                          <label for="bodega">Bodega</label>
                                          <input type="text" name="bodega" class="form-control" placeholder="Bodega..." value="{{$articulo->bodega}}">
                                    </div>
                                    <div class="form-group">
                                          <label for="ubicacion">Ubicación</label>
                                          <input type="text" name="ubicacion" class="form-control" placeholder="Ubicación..." value="{{$articulo->ubicacion}}">
                                    </div>
                                    <div class="form-group">
                                          <label for="descripcion">Descripción</label>
                                          <textarea type="text" name="descripcion" class="form-control" placeholder="Descripción...">{{$articulo->descripcion}}</textarea>
                                    </div>
                                    <div class="form-group">
                                          <label for="imagen">Imagen</label>
                                          <input type="file" name="imagen">
                                          @if (($articulo->imagen)!="")
                                          <img src="{{asset('imagenes/articulos/'.$articulo->imagen)}}" height="300px" width="300px">
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