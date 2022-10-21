<?php 
    if (Auth::user() != null) {
        $user = Auth::user(); 

        if ($user->idempresa == 0)
        {
        DB::update('update users set idempresa = '.$user->id.' where email = ?', [$user->email]);
        }
        
	}
?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Clinicas El Valle</title>
    <link rel="icon" href="{{asset('favico.ico')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('template/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('template/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/lightslider.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('template/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('template/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('template/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('template/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">

    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{asset('template/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/price_rangs.css')}}">
    
    
  
</head>

<body>
    <!-- whatsappt -->
    <style>
    .btn-whatsapp {
           display:block;
           width:70px;
           height:70px;
           color:#fff;
           position: fixed;
           right:75px;
           bottom:25px;
           border-radius:50%;
           line-height:80px;
           text-align:center;
           z-index:999;
    }
    </style>

    <div class="btn-whatsapp">
      <a href="http://wpp-redirect.herokuapp.com/go/?p=50236175744&m=" target="_blank" >
        <img src="{{asset('img/logow.png')}}" alt="" style="width: 90px;" title="">
      </a>
    </div>

    <!-- Fin whatsappt -->
    <!-- telefono -->
    <style>
    .btn-telefono {
           display:block;
           width:70px;
           height:70px;
           color:#fff;
           position: fixed;
           right:125px;
           bottom:25px;
           border-radius:50%;
           line-height:80px;
           text-align:center;
           z-index:999;
    }
    </style>

    <div class="btn-telefono">
      <a  href="tel:+50277368112">
        <img src="{{asset('img/tel.png')}}" alt="" style="width: 90px;">
      </a>
    </div>

    <!-- Fin telefono -->
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{asset('imagenes/logos/logolargo.png')}}" alt="Clinicas El Valle"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/vistas/vquienessomos') }}">¿Quiénes somos? </a>
								</li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/vistas/vespecialistas') }}">Especialistas </a>
								</li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/vistas/vservicios') }}">Servicios </a>
								</li>
								<li class="nav-item">
                                    <a class="nav-link" href="{{ url('/vistas/vcontacto') }}">Contacto</a>
								</li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown4" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @if (Auth::guest())
                                        <a class="dropdown-item" href="{{ route('login') }}"> Entrar</a>
                                        <!--<a class="dropdown-item" href="{{ route('register') }}">Registrarse</a>-->
                                        <a class="dropdown-item" href="{{ route('password.request') }}">Olvidaste tu Contraseña?</a>
                                    @elseif(Auth::user()->tipo_usuario != 'Doctor')
                                        <?php
                                            $usuario = Auth::user()->name; $nombre = explode(' ',trim($usuario));
                                        ?>
                                        <a class="dropdown-item">Hola {{ ucwords($nombre[0]) }}!</a>
                                        <a class="dropdown-item" href="{{URL::action('UsuarioController@show',Auth::user()->id)}}">Perfil</a>
										<a class="dropdown-item" href="{{ url('/panel') }}">Panel</a>
                                        @if(Auth::user()->menu_configuracion == "SI")
										    <a class="dropdown-item" href="{{URL::action('ConfiguracionController@edit',Auth::user()->id)}}">Configuración</a>
                                        @endif
										<a class="dropdown-item" href="{{ url('/logout') }}">Cerrar Sesion</a>
                                    @elseif(Auth::user()->tipo_usuario == 'Doctor')
                                        <?php
                                            $usuario = Auth::user()->name; $nombre = explode(' ',trim($usuario));
                                        ?>
                                        <a class="dropdown-item">Hola {{ ucwords($nombre[0]) }}!</a>
                                        <a class="dropdown-item" href="{{ url('/') }}">Inicio</a>
										<a class="dropdown-item" href="{{URL::action('DoctorController@show',Auth::user()->id)}}">Perfil</a>
                                        <a class="dropdown-item" href="{{ url('/panel') }}">Panel</a>
										<a class="dropdown-item" href="{{ url('/logout') }}">Cerrar Sesion</a>
                                    @endif
                                </div> 
                                
                            </div>
                            <!--<a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            
                            @if (Auth::guest())
                                <a  href="" >
                                    
                                    <i class="fas fa-cart-plus content: 7"></i><span class="badge badge-pill badge-primary">5</span>
                                </a>
                            @else
                            <div class="">
                                <a  href="" >
                                    
                                    <i class="fas fa-cart-plus content: 7"></i><span class="badge badge-pill badge-primary">5</span>
                                </a>
                            </div>
                            @endif-->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!--<div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Buscar...">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>-->
    </header>
    <!-- Header part end-->
	<br><br>
	<br>
	<br>
	<br>
	@yield('content')

	<!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>Contacto</h4>
                        <ul class="list-unstyled">
                            <li><i class="ti-home"> </i><a href="{{ url('/vistas/vcontacto') }}"> 7ma. Calle 13-45 zona 3, Quetzaltenango.</a></li>
                            <li><i class="ti-tablet"> </i><a href="tel:+50277368112"> +(502) 7736 8112</a></li>
                            <li><i class="ti-email"> </i><a href="{{ url('/vistas/vcontacto') }}"> info@clinicaselvalle.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>Redes</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://www.facebook.com/Cl%C3%ADnica-de-Especialistas-El-Valle-104060674672471" target="_blank"> Facebook</a></li>
                            <li><a href="" target="_blank"> Instagram</a></li>
                            <li><a href="" target="_blank"> Twitter</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>Recursos</h4>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/') }}">Inicio</a></li>
                            <li><a href="{{ url('/vistas/vquienessomos') }}">¿Quiénes somos?</a></li>
                            <li><a href="{{ url('/vistas/vespecialistas') }}">Especialistas</a></li>
                            <li><a href="{{ url('/vistas/vservicios') }}">Servicios</a></li>
                            <li><a href="{{ url('/vistas/vcontacto') }}">Contacto</a></li>
                            
                            
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>Cuenta</h4>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('login') }}">Entrar</a></li>
                            <!--<li><a href="{{ route('register') }}">Registrarse</a></li>-->
                            <li><a href="{{ route('password.request') }}">Olvidaste tu Contraseña?</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="copyright_text">
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://szystems.com" target="_blank">Szystems.</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li><a href="https://www.facebook.com/szystems" class="single_social_icon" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/szystems" class="single_social_icon" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.szystems.com/" class="single_social_icon" target="_blank"><i class="fas fa-globe"></i></a></li>
                                <li><a href="https://www.instagram.com/szystems/" class="single_social_icon" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{asset('template/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('template/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('template/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('template/js/swiper.min.js')}}"></script>
    <script src="{{asset('template/js/lightslider.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('template/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('template/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('template/js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('template/js/slick.min.js')}}"></script>
    <script src="{{asset('template/js/swiper.jquery.js')}}"></script>
    <script src="{{asset('template/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('template/js/waypoints.min.js')}}"></script>
    <script src="{{asset('template/js/contact.js')}}"></script>
    <script src="{{asset('template/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('template/js/jquery.form.js')}}"></script>
    <script src="{{asset('template/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('template/js/mail-script.js')}}"></script>

    <script src="{{asset('template/js/stellar.js')}}"></script>
    <script src="{{asset('template/js/price_rangs.js')}}"></script>

    <!-- custom js -->
    <script src="{{asset('js/theme.js')}}"></script>
    <script src="{{asset('template/js/custom.js')}}"></script>
</body>

</html>



	