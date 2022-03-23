<!-- Modal -->
<div class="modal fade" id="modaleditar-{{$det->iddetalle_ingreso}}" tabindex="-1" role="dialog" aria-labelledby="modaleditar-{{$det->iddetalle_ingreso}}" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLongTitle">Editar Articulo de Inventario</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
			{!!Form::model($det,['method'=>'PATCH','route'=>['inventario.update',$det->iddetalle_ingreso]])!!}
            {{Form::token()}}
      		<div class="modal-body">
			  	<h5 class="modal-title"><b>Articulo:</b> {{ $det->Articulo}}-{{ $det->Codigo}}</h5>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for=""><strong>Codigo</strong></label>
						<input type="number" name="codigo_inventario" class="form-control input-sm" id="codigo_inventario" value="{{$det->Codigo}}">
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label><strong>Fecha Vencimiento</strong></label>
						<span class="form-icon-wrapper">
							<span class="form-icon form-icon--right">
								<i class="fas fa-calendar-alt form-icon__item"></i>
							</span>
							<input type="text" id="fecha_vencimiento{{$det->iddetalle_ingreso}}" class="form-control datepicker" name="fecha_vencimiento" value="{{$fecha_vencimiento}}">
						</span>
					</div>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label><strong>Presentacion</strong></label>
							<select name="idpresentacion_inventario" class="form-control">
							<option value="{{$det->idpresentacion_inventario}}" selected>{{$det->Presentacion}}</option>
							@foreach($presentaciones as $presentacion)
								<option value="{{$presentacion->idpresentacion}}">{{$presentacion->nombre}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label for=""><strong>Descripción</strong></label>
						<textarea name="descripcion_inventario" id="descripcion_inventario" class="form-control input-sm" cols="30" rows="2">{{$det->descripcion_inventario}}</textarea>
					</div>
				</div>
				@if($det->total_unidades_inventario == $det->stock)
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for=""><strong>Dividir Unidades</strong></label>
						<input type="number" name="cantidadxunidad" class="form-control input-sm" id="cantidadxunidad" value="{{$det->cantidadxunidad}}" onkeypress="return validarentero(event,this.value)" required>
					</div>
				</div>
				@else
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for=""><strong>Dividir Unidades</strong></label>
						<input readonly type="number" name="cantidadxunidad" class="form-control input-sm" id="cantidadxunidad" value="{{$det->cantidadxunidad}}" onkeypress="return validarentero(event,this.value)" required>
						<small>No puede editar este campo ya que ya se han realizado ventas de este articulo.</small>
					</div>
				</div>
				@endif
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="precio_venta"><strong>Precio Venta</strong></label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">{{ Auth::user()->moneda }}</span>
							</div>
							<input type="" name="precio_venta" class="form-control input-sm" id="precio_venta" aria-label="Amount (to the nearest dollar)" value="{{$det->precio_venta}}" onkeypress="return validardecimal(event,this.value)" required>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="precio_venta"><strong>Oferta</strong></label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">%</span>
							</div>
							<input type="" name="precio_oferta" class="form-control" id="precio_oferta" aria-label="Amount (to the nearest dollar)" value="{{$det->precio_oferta}}" onkeypress="return validardecimal(event,this.value)" required>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label><strong>Activar Oferta</strong></label>
						<select name="estado_oferta" class="form-control" id="estado_oferta">
							<option value="{{$det->estado_oferta}}" selected>{{$det->estado_oferta}}</option>
							<option value="Inactivo">Inactivo</option>
							<option value="Activada">Activada</option>
						</select>
					</div>
				</div>
      		</div>
      		<div class="modal-footer">
			  <input type="hidden" name="idingreso"  value="{{$det->idingreso}}">
			  	<input type="hidden" name="total_compra"  value="{{$det->total_compra}}">
				<input type="hidden" name="cantidad_total_compra"  value="{{$det->cantidad_total_compra}}">
				<input type="hidden" name="total_unidades_inventario_actual"  value="{{$det->total_unidades_inventario}}">
				<input type="hidden" name="stock_actual"  value="{{$det->stock}}">
			  	<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-ban"></i> Cerrar</button>
                <button type="submit" class="btn btn-info"><i class="far fa-edit"></i> Confirmar</button>
      		</div>
			{{Form::close()}}
    	</div>
  	</div>
</div>

<script>
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

        var optSimple = {
            format: "dd-mm-yyyy",
            language: "es",
            autoclose: true,
            todayHighlight: true,
            todayBtn: "linked",
        };
        $( '#fecha_vencimiento{{$det->iddetalle_ingreso}}' ).datepicker( optSimple );
        $( '#fecha_vencimiento{{$det->iddetalle_ingreso}}' ).datepicker( 'setDate', {{$fecha_vencimiento}} );
    </script>
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
			
        
			