@extends('layouts.app')
@section('content')
    <!--================Home Banner Area =================-->
	<!-- breadcrumb start-->
	<section class="breadcrumb breadcrumb_bgcarrito">
		<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
			<div class="breadcrumb_iner">
				<div class="breadcrumb_iner_item">
				<h2>Finalizar Compra</h2>
				<p>Inicio <span>-</span>Orden</p>
				</div>
			</div>
			</div>
		</div>
		</div>
	</section>
	<!-- breadcrumb start-->

	<!--================Cart Area =================-->
  	<section class="cart_area padding_top">
    	<div class="container">
			<div class="flash-message">
				@foreach (['danger', 'warning', 'success', 'info'] as $msg)
					@if(Session::has('alert-' . $msg))
						<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
					@endif
				@endforeach
			</div>
			<div>
				<h3 class="mb-30">Carrito</h3>
			</div>
			<div class="cart_inner">
				<div class="table-responsive">
					<div align="right">
					</div>

					<table class="table">
						<thead>
							<tr>
								<th scope="col">Producto</th>
								<th scope="col">Cantidad</th>
								<th scope="col">Precio</th>
								<th scope="col">Sub-Total</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($carrito as $item)
                                <?php
                                    $articulo=DB::table('articulo')
                                    ->where('idarticulo','=',$item->id)
                                    ->first();
                                ?>
								<tr>
									<td>
										<div class="media">
											<div class="d-flex">
                                                <?php
                                                    $imagen=DB::table('articulo')
                                                    ->where('idarticulo','=',$item->id)
                                                    ->get();

                                                    $datosConfig=DB::table('users')->first();
                                                ?>
												@foreach($imagen as $img)
                                                    @if($img->imagen != null)
														<a href="{{URL::action('InicioController@show',$img->idarticulo)}}">
															<img src="{{asset('imagenes/articulos/'.$img->imagen)}}" alt="$img->nombre" width=100 alt="">
														</a>
                                                    @endif
                                                    @if($img->imagen == NULL)
                                                        <a href="{{URL::action('InicioController@show',$img->idarticulo)}}">
															<img src="{{asset('imagenes/noimage.png')}}" alt="$img->nombre" width=100 alt="">
                                                        </a>
                                                    @endif
                                                @endforeach
											</div>
											<div class="media-body">
												<p>{{$item->name}}</p>
											</div>
										</div>
									</td>
									<td>
										<h5>
                                            {{$item->quantity}}	
										</h5>
									</td>
									<td>
                                        @if($articulo->oferta_activar == 'NO')
                                            <h5><font color="green">{{ $datosConfig->moneda }}{{number_format($item->price,2, '.', ',')}}</font></h5>
                                        @elseif($articulo->oferta_activar == 'SI') 
                                            <h5><font color="green">{{ $datosConfig->moneda }}{{number_format($item->price,2, '.', ',')}}</font><br> <strike><small><font color="red">{{ $datosConfig->moneda }}{{number_format($articulo->ultimo_precio_venta,2, '.', ',')}}</font></small></strike></h5>
                                        @endif
									</td>
									<td>
                                        <h5><strong>{{ $datosConfig->moneda }}{{number_format($item->price*$item->quantity,2, '.', ',')}}</strong></h5>
									</td>
								</tr>
							@endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5><strong>Total</strong></h5>
                                </td>
                                <td>
                                    <h5><strong>{{ $datosConfig->moneda }}{{number_format(Cart::getTotal(),2, '.', ',')}}</strong></h5>
                                </td>
                            </tr>
							
						</tbody>
					</table>
				</div>
			</div>
			
			<div class="section-top-border">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<h3 class="mb-30">Finalizar Compra</h3>
                        <font color="orange">*Llene el formulario con los datos correspondientes para el envío, entrega y pago de su compra.</font>
                        <font color="orange">*Campos con "*" son obligatorios.</font>
						{{Form::open(array
                        (
                            'action' => 'CarritoSessionController@confirmarOrden',
                            'method' => 'POST',
                            'role' => 'form',
                        ))
                        }}
                        {{Form::token()}}
							<div class="mt-10">
								<input type="text" name="nombre" placeholder="Tu Nombre..."
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tu Nombre...'" value="{{old('nombre')}}" required
									class="single-input input-sm" >
							</div>
							<div class="mt-10">
								<input type="email" name="email" placeholder="Tu Email..." onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Tu Email...'" value="{{old('email')}}" required class="single-input" >
							</div>
							<div class="mt-10">
								<input type="text" name="telefono" placeholder="Teléfono del contacto..." onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Teléfono del contacto...'" value="{{old('telefono')}}" required class="single-input" >
							</div>
							<div class="mt-10">
								<input type="text" name="whatsapp" placeholder="Numero de Whatsapp..." onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Numero de Whatsapp...'" value="{{old('whatsapp')}}" class="single-input" >
							</div>
							<div class="mt-10">
								<input required type="hidden" name="pais" placeholder="Pais" onfocus="this.placeholder = ''"
									onblur="this.placeholder = Pais'" class="single-input" value="Guatemala">
							</div>
							<div class="input-group-icon mt-10">
								<div class="icon"><i class="" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
									<select required name="departamento" placeholder="Seleccione el Departamento">
                                        <option  value="Alta Verapaz">Alta Verapaz</option>
                                        <option  value="Baja Verapaz">Baja Verapaz</option>
                                        <option  value="Chimaltenango">Chimaltenango</option>
                                        <option  value="Chiquimula">Chiquimula</option>
                                        <option  value="El Progreso">El Progreso</option>
                                        <option  value="Escuintla">Escuintla</option>
										<option  value="Guatemala">Guatemala</option>
                                        <option  value="Huehuetenango">Huehuetenango</option>
                                        <option  value="Izabal">Izabal</option>
                                        <option  value="Jalapa">Jalapa</option>
                                        <option  value="Jutiapa">Jutiapa</option>
                                        <option  value="Petén">Petén</option>
										<option  value="Quetzaltenango">Quetzaltenango</option>
                                        <option  value="Quiché">Quiché</option>
                                        <option  value="Retalhuleu">Retalhuleu</option>
                                        <option  value="Sacatepéquez">Sacatepéquez</option>
                                        <option  value="San Marcos">San Marcos</option>
                                        <option  value="Santa Rosa">Santa Rosa</option>
                                        <option  value="Sololá">Sololá</option>
                                        <option  value="Suchitepéquez">Suchitepéquez</option>
                                        <option  value="Totonicapán">Totonicapán</option>
                                        <option  value="Zacapa">Zacapa</option>
									</select>
								</div>
							</div>
							<div class="mt-10">
								<input required type="text" name="municipio" placeholder="Municipio" onfocus="this.placeholder = ''"
									onblur="this.placeholder = Municipio'" value="{{old('municipio')}}" class="single-input" >
							</div>
							<div class="mt-10">
								<textarea name="direccion" class="single-textarea" placeholder="Direccion completa" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Direccion, departamento, descripcion'" required>{{old('direccion')}}</textarea>
							</div>
							

							<div class="input-group-icon mt-10">
								<div class="icon"><i class="fas fa-money-bill" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
									<select name="tipo_pago" placeholder="Seleccione el Tipo de Pago">
                                        <option  value="Efectivo" selected>Efectivo contra entrega</option>
                                        <option  value="Tarjeta">Tarjeta de crédito o debito</option>
                                        <option  value="Deposito">Deposito o Transferencia</option>
                                        <option  value="Link">Link de pago</option>
									</select>
								</div>
							</div>
							<div class="mt-10">
								<textarea name="comentarios" class="single-textarea" placeholder="Comentarios..." onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Comentarios'" >{{old('comentarios')}}</textarea>
							</div>
							<div class="input-group-icon mt-10">
								<button type="submit" class="genric-btn info circle" ><i class="far fa-check-circle"></i> Finalizar Compra</button>
							</div>
						{!!Form::close()!!}
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	<!--================End Cart Area =================-->
	
	
@endsection