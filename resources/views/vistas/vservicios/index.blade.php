@extends('layouts.app')
@section('content')
    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Servicios</h2>
                            <p>Inicio <span>-</span>Servicios </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

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

    <!-- Start Sample Area -->
    <section class="sample-text-area">
        <div class="container box_1170">
            <h3 class="text-heading">Servicios</h3>
            <p class="sample-text">
                A continuación te mostramos un listado de nuestros servicios, haz click en el servicio en el que estas interesado para mayor información.
            </p>

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button"
                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                <i class="	fas fa-play u-sidebar-nav-menu__item-icon" style="font-size:15px;color:lightblue;text-shadow:1px 1px 2px #000000;"></i>
                                <strong><u> Ultrasonido</u></strong>
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                Nada se compara con escuchar los primeros latidos de tu bebé, queremos ser parte de este hermoso proceso en el que te conviertes en mamá, pregunta por nuestros ultrasonidos.
                            </p>
                            <br>
                            <p>
                                Tu vida cambiará cuando escuches por primera vez su corazón, haz tu cita de ultrasonido con nosotros.
                            </p>
                            <br>
                            <p>
                                ¿Necesitas un ultrasonido? Realiza este examen con nosotros, contamos con el personal capacitado para este procedimiento. Contáctanos a nuestros teléfonos.
                            </p>
                            <br>
                            <p>
                                El ultrasonido es la modalidad de imágenes preferida para el diagnóstico y el control de las mujeres embarazadas y los bebés nonatos. El ultrasonido se ha utilizado para evaluar el embarazo durante casi cuatro décadas y no hay pruebas que revelen que es perjudicial para el paciente, embrión o feto. ¿Sabes que es lo que el médico ve y busca cada vez que te haces un ultrasonido?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                <i class="	fas fa-play u-sidebar-nav-menu__item-icon" style="font-size:15px;color:lightblue;text-shadow:1px 1px 2px #000000;"></i>
                                <strong><u> Ginecoestética</u></strong>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                Nuestros tratamientos de rejuvenecimiento son indoloros, sin cirugía y EFECTIVOS. Nadie notará tu edad.
                            </p>
                            <br>
                            <p>
                                Reduce estrías y cicatrices y luce un vientre fenomenal este verano consulta como la Radiofrecuencia y fototerapia pueden ayudar a reducir y eliminar esa flacidez, estrías, cicatrices de cesáreas entre muchas otras cosas más.
                            </p>
                            <br>
                            <p>
                                Conoce los beneficios de la radiofrecuencia y la fototerapia en tu piel. Sin cirugías, sin bisturí, sin inyecciones ni anestesia. Con todos los resultados, pero con ningún efecto contraindicado.
                            </p>
                            <br>
                            <p>
                                Parecerá que rejuveneces cada año, sin cirugías, sin anestesia, sin cortes ni inyecciones en tu piel, prueba la radiofrecuencia y quítate unos años y unas arruguitas de encima.
                            </p>
                            <br>
                            <p>
                                Hay una forma de quitarte unos años de encima, sin cirugías y sin inyecciones, estimulando tu piel y logrando resultados sorprendentes en tiempos increíbles. Se llama Radiofrecuencia.
                            </p>
                            <br>
                            <p>
                                Diles adiós a esas molestas estrías de embarazo y sobrepeso con nuestros tratamientos de radiofrecuencia, pide más información o reserva tu cita.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                <i class="	fas fa-play u-sidebar-nav-menu__item-icon" style="font-size:15px;color:lightblue;text-shadow:1px 1px 2px #000000;"></i>
                                <strong><u> Silla Electromagnética</u></strong>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                Te explicamos cómo funciona la silla electromagnética. Recuerda que puedes llevar este proceso sin dolor en Clínicas de Especialistas El Valle.
                            </p>
                            <br>
                            <p>
                                ¡Vive sin incontinencia! Pregunta cómo puedes fortalecer tu suelo pélvico sin cirugías y sin dolor con la silla electromagnética.
                            </p>
                            <br>
                            <p>
                                Si la menopausia te trajo incontinencia queremos que sepas que podemos ayudarte, la incontinencia se puede eliminar, con nuestro tratamiento de silla electromagnética hemos hecho de la menopausia de muchas pacientes, una bella época para vivir.
                            </p>
                            <br>
                            <p>
                                ¿Padeces de incontinencia? La silla electromagnética ha demostrado ser eficaz en la eliminación de este malestar conoce cada uno de los datos por los cuales la silla electromagnética es conocida reserva tu cita o consulta para pedir más información.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                                <i class="	fas fa-play u-sidebar-nav-menu__item-icon" style="font-size:15px;color:lightblue;text-shadow:1px 1px 2px #000000;"></i>
                                <strong><u> Papanicolaou</u></strong>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                La prueba de Papanicolaou es la prueba que se usa con mayor frecuencia para detectar los cambios prematuros en las células que pueden derivar en cáncer de cuello uterino. Esta prueba también se llama citología vaginal. Para la prueba se tiene que obtener una muestra de células del cuello uterino es necesario que te hagas esta prueba para evitar y prevenir cualquier tipo de cáncer relacionado con el cuello uterino.
                            </p>
                            <br>
                            <p>
                                ¿Padeces de incontinencia? Está científicamente comprobado que la silla electromagnética reduce y hasta elimina este padecimiento, lo hace fortaleciendo el suelo pélvico a través de impulsos indoloros con sesiones de 20 minutos. Pregunta y haz tu cita.
                            </p>
                            <br>
                            <p>
                                Es importante que hagas tu primer papanicolaou si nunca lo has hecho, evita problemas íntimos y disfruta con plenitud tu vida en pareja.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Sample Area -->

    
@endsection
