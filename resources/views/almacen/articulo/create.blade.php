@extends ('layouts.admin')
@section ('contenido')


<div class="col-md-6 mb-4">
      <div class="card">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Crear Articulo </strong></h2>
            </header>

            <div class="card-body" >
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

                  {!!Form::open(array('url'=>'almacen/articulo','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
                  {{Form::token()}}
                  <div class="form-group input-sm">
                        <label for="nombre"><font color="orange">*</font>Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre..." value="{{old('nombre')}}">
                  </div>
                  <div class="form-group">
                        <label for="codigo"><font color="orange">*</font>Código</label>
                        <input type="text" name="codigo" class="form-control" placeholder="Codigo..." value="{{old('codigo')}}">
                  </div>
                  <div class="form-group">
                        <label for="idcategoria">
                              <font color="orange">*</font>Categoría
                              <a href="{{url('almacen\categoria\create')}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear Nueva Categoria">
                                          <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                                <i class="far fa-plus-square"></i>
                                          </button>
                                    </span>
                              </a>
                        </label>
                        <select id="idcategoria" type="text" class="form-control" name="idcategoria" value="{{ old('idcategoria') }}">
                              <option selected="selected" value="{{ old('idcategoria') }}">{{ old('idcategoria') }}</option>
                              @foreach ($categorias as $cat)
                                <option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>
                              @endforeach
                                    
                        </select>
                  </div>
                  <div class="form-group">
                        <label for="bodega">Bodega</label>
                        <input type="text" name="bodega" class="form-control" placeholder="Bodega..." value="{{old('bodega')}}">
                  </div>
                  <div class="form-group">
                        <label for="ubicacion">Ubicación</label>
                        <input type="text" name="ubicacion" class="form-control" placeholder="Ubicación..." value="{{old('ubicacion')}}">
                  </div>
                  <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea type="text" name="descripcion" class="form-control" value="{{old('descripcion')}}" placeholder="Descripción..."></textarea>
                  </div>
                  <div class="form-group">
                        <label for="minimo"><font color="orange">*</font>Stock Minimo</label>
                        <input type="number" name="minimo" class="form-control" id="minimo" value="{{old('minimo')}}" onkeypress="return validarentero(event,this.value)">
                  </div>
                  <div class="form-group">
                        <label for="imagen">Imagen</label>
                        <input type="file" name="imagen" value="{{old('imagen')}}">
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