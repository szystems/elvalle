@extends ('layouts.admin')
@section ('contenido')


<div class="col-md-6 mb-4">
      <div class="card">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Editar Categoría: {{ $categoria->nombre}}</strong></h2>
            </header>

            <div class="card-body">
                  <h5 class="h4 card-title">Cambie los datos que desee editar:</h5>
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

                  {!!Form::model($categoria,['method'=>'PATCH','route'=>['categoria.update',$categoria->idcategoria],'files'=>'true'])!!}
                  {{Form::token()}}
                  <div class="form-group">
                        <label for="nombre"><font color="orange">*</font>Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="{{$categoria->nombre}}" placeholder="Nombre...">
                  </div>
                  <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea type="text" name="descripcion" class="form-control" placeholder="Descripción..." >{{$categoria->descripcion}}</textarea>
                  </div>
                  <div class="form-group">
                        <label for="imagen">Imagen</label>
                        <input type="file" name="imagen">
                        @if (($categoria->imagen)!="")
                          <img src="{{asset('imagenes/categorias/'.$categoria->imagen)}}" height="300px" width="300px">
                        @endif
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
@endsection