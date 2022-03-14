@extends ('layouts.admin')
@section ('contenido')


<div class="col-md-6 mb-4">
      <div class="card">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Crear Rubro </strong></h2>
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

                  {!!Form::open(array('url'=>'ventas/rubro','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
                  {{Form::token()}}
                  <div class="form-group">
                        <label for="nombre"><font color="orange">*</font>Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre..." value="{{old('nombre')}}">
                        
                  </div>
                  <div class="form-group">
                        <label for="nota">Nota</label>
                        <textarea type="text" name="nota" class="form-control" placeholder="Nota..." value="{{old('nota')}}"></textarea>
                  </div>
                  <div class="form-group">
				<label class="d-flex align-items-center justify-content-between">
					<span class="form-label-text">Estado en Ordenes</span>
					<div class="form-toggle">
                                    <input name="estado_rubro" type="checkbox" value="Habilitado" checked>
						<div class="form-toggle__item">
							<i class="fa" data-check-icon="&#xf00c" data-uncheck-icon="&#xf00d"></i>
						</div>
					</div>
				</label>
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