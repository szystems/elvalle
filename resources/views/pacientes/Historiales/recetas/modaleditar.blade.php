<!-- Basic Modals -->
<div class="modal fade" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal-editar-{{$detalle->idreceta_medicamento}}">
	{{Form::open(array
		(
			'action' => 'RecetaController@editarmedicamento',
			'method' => 'GET',
			'role' => 'form',
		))
	}}
	{{Form::token()}}

	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar Medicamento</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
					$presentaciones=DB::table('presentacion')
					->where('estado','=','Habilitado')
					->orderBy('nombre','asc')
					->get();
				?>
				<div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
					<div class="form-group">
						  <label for="cantidad">Cantidad</label>
						  <input type="number" name="cantidad" class="form-control" value="{{ $detalle->cantidad }}" onkeypress="return validarentero(event,this.value)" required>
					</div>
				</div>
				<div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">
						<div class="form-group">
							<label>Presentacion</label>
							<select name="presentacion" class="form-control">
									<option value="{{$detalle->idpresentacion}}" selected>{{ $detalle->nombre }}</option>
									@foreach($presentaciones as $presentacion)
										<option value="{{$presentacion->idpresentacion}}">{{$presentacion->nombre}}</option>
									@endforeach
							</select>
						</div>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

						<div class="form-group">
							<label>Medicamento</label>
							<input type="text" name="medicamento" class="form-control" value="{{ $detalle->medicamento }}" required>
						</div>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
						<div class="form-group">
							<label for="">Indicaciones</label>
							<textarea name="indicaciones" class="form-control" cols="30" rows="2">{{ $detalle->indicaciones }}</textarea>
						</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-ban"></i> Cancelar</button>
				<button type="submit" class="btn btn-info"><i class="far fa-edit"></i> Editar</button>
				<input type="hidden" name="idreceta_medicamento" value="{{$detalle->idreceta_medicamento}}">
				<input type="hidden" name="idreceta" value="{{$receta->idreceta}}">
				<input type="hidden" name="idpaciente" value="{{$receta->idpaciente}}">
			</div>
		</div>
	</div>
	{{Form::close()}}
	
</div>
<!-- End Basic Modals -->