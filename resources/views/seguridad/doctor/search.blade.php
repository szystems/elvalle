{!! Form::open(array('url'=>'seguridad/doctor','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">
		<select name="searchText" id="searchText" class="form-control selectpicker"  data-live-search="true">
			<option selected value="">Todos</option>
			@if(isset($doctor))
			<option selected value="{{ $doctor->name }}">{{ $doctor->name }} ({{ $doctor->especialidad }})</option>
			@else
			<option selected value="">Todos</option>
			@endif

			@foreach ($doctoresFiltro as $doctor)
				<option value="{{ $doctor->name }}">{{ $doctor->name }} ({{ $doctor->especialidad }})</option>
			@endforeach
		</select>
		<span class="input-group-btn">
			<button type="submit" class="btn btn-info">
				<i class="fas fa-search"></i> Buscar
			</button>
		</span>
	</div>
</div>

{{Form::close()}}
