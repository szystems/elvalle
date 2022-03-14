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
				<h2>Carrito de Compra</h2>
				<p>Inicio <span>-</span>Carrito</p>
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
            </div> <!-- fin .flash-message -->
		
			<div class="cart_inner">
				<div class="table-responsive">
                    @if(Cart::isEmpty() != 1)
					<div align="right">
						<a href="" data-target="#modal-vaciar" data-toggle="modal">
							<button class="genric-btn danger circle" style="pointer-events: none;" type="button">
								<i class="far fa-minus-square"></i> Vaciar Carrito
							</button>
						</a>
                    </div>
                    @endif
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
												<a href="" data-target="#modal-eliminar-item-{{$item->id}}" data-toggle="modal" title="Eliminar Articulo">
													<button class="genric-btn danger circle" style="pointer-events: none;" type="button">
														<i class="far fa-minus-square"></i>
													</button>
												</a>
													<p>{{$item->name}}</p>
											</div>
										</div>
									</td>
									<td>
										<h5>{{$item->quantity}}
												
										<a href="" data-target="#modal-modificar-item-{{$item->id}}" data-toggle="modal" title="Cambiar Cantidad">
											<button class="genric-btn success circle" style="pointer-events: none;" type="button">
											<i class="far fa-edit"></i>
											</button>
										</a>
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
								@include('vistas.vcarrito.cantidad.editarcantidadmodal')
                                @include('vistas.vcarrito.vaciar.vaciarcarritomodal')
                                @include('vistas.vcarrito.eliminar.eliminaritemmodal')
                            @endforeach
                            @if(Cart::isEmpty() != 1)
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
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <h5><strong>Envio</strong></h5>
                                    </td>
                                    <td>
                                        <h5><strong>{{ $datosConfig->moneda }}{{number_format($datosConfig->envio,2, '.', ',')}}</strong></h5>
                                    </td>
                                </tr>     
                            @else
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <h5><strong>Total</strong></h5>
                                    </td>
                                    <td>
                                                <?php
                                                    $datosConfig=DB::table('users')->first();
                                                ?>
                                        <h5><strong>{{ $datosConfig->moneda }}0.00</strong></h5>
                                    </td>
                                </tr>
                            @endif
						</tbody>
                    </table>
                    <div class="checkout_btn_inner float-left" >
                        <h5><strong>Descripcion del envio:</strong></h5>
                        <h5><strong>*{{ $datosConfig->descripcion_envio }}</strong></h5>
                    </div>
					<div class="checkout_btn_inner float-left" >
                        {!! Form::open(array('url'=>'vistas/vinicio','class'=>'d-flex justify-content-between search-inner','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
                                    <input type="hidden" name="searchText" id="search" value="">
                                    <input type="hidden" name="querydesde" value="0">
                                    <input type="hidden" name="queryhasta" value="99999">
                                    <input type="hidden" name="searchempresa" value="">
                                    <input type="hidden" name="searchcategoria" value="">
                                    <input type="hidden" name="searchoferta" value="">
                                    <input type="hidden" name="searchpor" value="a.idarticulo">
                                    <input type="hidden" name="searchorden" value="asc">
                                    <button type="submit" class="genric-btn success circle"><i class="fas fa-store"></i> Seguir Comprando</button>
                        {{Form::close()}}
						<br>
						
						
					</div>
					
				</div>
			</div>
			
			<div class="section-top-border">
				<div class="row">
					<div class="col-lg-6 col-md-12">
                        <h3 class="mb-30">¿Ya tienes cuenta?</h3>
                        <div class="input-group-icon mt-10">
							<button onclick="window.location.href = '{{ route('login') }}';" class="genric-btn info circle" ><i class="fa fa-user u-sidebar-nav-menu__item-icon"></i> Entrar</button>
                        </div>
                        <div class="input-group-icon mt-10">
							<button onclick="window.location.href = '{{ route('register') }}';" class="genric-btn info circle" ><i class="glyphicon glyphicon-list-alt"></i> Registrarse</button>
						</div>
                        @if(Cart::isEmpty() != 1)
                            <h3 class="mb-30">¿O quieres comprar como invitado?</h3>
                            {{Form::open(array
                                (
                                    'action' => 'CarritoSessionController@finalizarOrden',
                                    'method' => 'POST',
                                    'role' => 'form',
                                ))
                            }}
                            {{Form::token()}}
                                <div class="input-group-icon mt-10">
							        <button type="submit" class="genric-btn info circle" ><img src="{{asset('elmana/img/core-img/cart.png')}}" alt=""> Finalizar Compra</button>
                                </div>
                            {{Form::close()}}
                                        
                        @else
                        @endif
					</div>
					
				</div>
            </div>
            
		</div>
	</section>
	<!--================End Cart Area =================-->
	
	
@endsection