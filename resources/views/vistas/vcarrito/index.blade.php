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
    <?php
        $datosConfig=DB::table('users')->first();
    ?>
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
		
			<div class="cart_inner">
				<div class="table-responsive">
					@foreach($ordenes as $orden)
                        @if($ordenes->count() > 0)
                            <div align="right">
                                <a href="" data-target="#modal-eliminar-orden-{{$orden->idorden}}" data-toggle="modal">
                                    <button class="genric-btn danger circle" style="pointer-events: none;" type="button">
                                        <i class="far fa-minus-square"></i> Vaciar Carrito
                                    </button>
                                </a>
                            </div>
                            {{Form::close()}}
                            <?php
                                $detalles=DB::table('orden_detalle as d')
                                ->join('articulo as a','d.idarticulo','=','a.idarticulo')
                                ->join('categoria as c','a.idcategoria','=','c.idcategoria')
                                ->select('d.idorden_detalle','d.idorden','d.idarticulo','a.nombre as articulo','c.nombre as categoria','a.codigo','d.cantidad','d.precio','a.ultimo_precio_venta','a.ultimo_precio_oferta','a.oferta_activar','d.estado','d.condicion')
                                ->where('d.condicion','=','1')
                                ->where('d.idorden','=',$orden->idorden)
                                ->get();
                            ?>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Producto</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Sub-Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($detalles as $detalle)
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <?php
                                                            $imagen=DB::table('articulo')
                                                            ->where('idarticulo','=',$detalle->idarticulo)
                                                            ->get();

                                                            $datosConfig=DB::table('users')->first();
                                                        ?>
                                                        @foreach($imagen as $img)
                                                            @if($img->imagen != null)
                                                                <a href="{{URL::action('InicioController@show',$img->idarticulo)}}">
                                                                    <img src="{{asset('imagenes/articulos/'.$img->imagen)}}" alt="" width=100 alt="$img->nombre">
                                                                </a>
                                                            @endif
                                                            @if($img->imagen == NULL)
                                                                <a href="{{URL::action('InicioController@show',$img->idarticulo)}}">
                                                                    <img src="{{asset('imagenes/noimage.png')}}" alt="" width=100 alt="$img->nombre">
                                                                </a>
                                                            @endif
                                                        @endforeach

                                                    </div>
                                                    <div class="media-body">
                                                        <a href="" data-target="#modal-eliminar-{{$detalle->idorden_detalle}}" data-toggle="modal" title="Eliminar Articulo">
                                                            <button class="genric-btn danger circle" style="pointer-events: none;" type="button">
                                                                <i class="far fa-minus-square"></i>
                                                            </button>
                                                        </a>
                                                        <p>{{$detalle->articulo}}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>{{$detalle->cantidad}}
                                                        
                                                <a href="" data-target="#modal-det-{{$detalle->idorden_detalle}}" data-toggle="modal" title="Editar Cantidad">
                                                    <button class="genric-btn success circle" style="pointer-events: none;" type="button">
                                                    <i class="far fa-edit"></i>
                                                    </button>
                                                </a>
                                                </h5>
                                            </td>
                                            <td>
                                                <h5><strong>{{ $datosConfig->moneda }}{{number_format(($detalle->precio*$detalle->cantidad),2, '.', ',')}}</strong></h5>
                                            </td>
                                        </tr>
                                        @include('vistas.vcarrito.detalle.detmodal')
                                        @include('vistas.vcarrito.eliminardetalle.eliminarmodal')
                                        @include('vistas.vcarrito.eliminarorden.eliminarordenmodal')
                                    @endforeach
                                    @if($orden)
                                        <tr>
                                            <td></td>
                                            <td>
                                                <h5><strong>Total</strong></h5>
                                            </td>
                                            <td>
                                                <h5><strong>{{ $datosConfig->moneda }}{{number_format($orden->total,2, '.', ',')}}</strong></h5>
                                            </td>
                                        </tr>
                                        <tr>
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
                                                <h5><strong>{{ $datosConfig->moneda }}.0.00</strong></h5>
                                            </td>
                                        </tr>
                                        @endif
                                        
                                </tbody>
                            </table>
                            <div class="checkout_btn_inner float-left" >
                                <h5><strong>Descripcion del envio:</strong></h5>
                                <h5><strong>*{{ $datosConfig->descripcion_envio }}</strong></h5>
                            </div>
                        @endif
                        
					@endforeach
				</div>
			</div>
			<div class="section-top-border">
				<div class="row">
					<div class="col-lg-6 col-md-12">
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
                        @if($ordenes->count() > 0)
                            {{Form::open(array
                                (
                                    'action' => 'VistaCarritoController@finalizarOrden',
                                    'method' => 'POST',
                                    'role' => 'form',
                                ))
                            }}
                            {{Form::token()}}
                                <input type="hidden" name="idorden" value="{{$orden->idorden}}">
                                <div class="input-group-icon mt-10">
							        <button type="submit" class="genric-btn info circle" ><img src="{{asset('elmana/img/core-img/cart.png')}}" alt=""> Finalizar Compra</button>
                                </div>
                            {{Form::close()}}
                        @endif
					</div>
					
				</div>
            </div>
		</div>
	</section>
	<!--================End Cart Area =================-->
	
	
@endsection