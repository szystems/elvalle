{!! Form::open(array('url'=>'pacientes/historiales/historia','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchidpaciente" placeholder="Buscar por Nombre, Telefono, Nit o DPI..." value="{{$pac->idpaciente}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-info">
				<i class="far fa-clipboard"></i> 
			</button>
		</span>
	</div>
</div>

{{Form::close()}}
