@extends('layouts.app')

@section('content')

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <!--<div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{asset('template/img/banner_img.png')}}" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Clinicas de Especialistas El Valle</h1>
                                            <p>Ginicologia y Medicina Interna</p>
                                            <a href="#" class="btn_2">Contactanos</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{asset('imagenes/banner/portada0.jpg')}}" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{asset('template/img/banner_img.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                         <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth $ Wood Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('imagenes/banner/portada0.jpg')}}" alt="First slide">
                    
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('imagenes/banner/portada1.jpg')}}" alt="Second slide">
                    
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('imagenes/banner/portada2.jpg')}}" alt="Third slide">
                    
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('imagenes/banner/portada4.jpg')}}" alt="Third slide">
                    
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('imagenes/banner/portada5.jpg')}}" alt="Third slide">
                    
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('imagenes/banner/portada6.jpg')}}" alt="Third slide">
                    
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- product_list part start-->
    <section class="product_list best_seller section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <a href="{{ url('/vistas/vespecialistas') }}">
                            <h2>Servicios</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/servicios/anticonceptivos2.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/servicios/cancer.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/servicios/cita.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/servicios/cutis.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/servicios/cutis2.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/servicios/embarazo1.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/servicios/incontinencia1.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/servicios/parto1.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/servicios/radio1.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/servicios/radio2.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/servicios/radio3.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/servicios/silla2.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/servicios/silla3.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/servicios/ultra1.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/servicios/ultra2.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/servicios/vaginosis.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/servicios/vph.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->

    <!-- product_list part start-->
    <section class="product_list best_seller section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <a href="{{ url('/vistas/vespecialistas') }}">
                            <h2>Especialistas</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/doctoras/doctoras4.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/doctoras/doctoras2.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/doctoras/doctoras3.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="single_product_item">
                            <a href="">
                                <img src="{{asset('imagenes/doctoras/doctoras1.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->

  
@endsection
