@extends ('layouts.admin')
@section ('contenido')


<div>
        <div class="card mb-4">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Nueva Orden </strong></h2>
            </header>

            <div class="card-body">
                <h5 class="h4 card-title">Ingrese los datos que se le piden:</h5>
                @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {!!Form::open(array('url'=>'ventas/orden','method'=>'POST','autocomplete'=>'off'))!!}
                {{Form::token()}}
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label>Fecha</label>
                            <span class="form-icon-wrapper">
                                <span class="form-icon form-icon--right">
                                    <i class="fas fa-calendar-alt form-icon__item"></i>
                                </span>
                                <input type="text" id="datepicker" class="form-control datepicker" name="fecha" value="">
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label>Estado Orden:</label>
                            <!--<select name="estado_orden" class="form-control">
                                <option selected value="Pendiente" selected>Pendiente</option>
                                <option value="Finalizada">Finalizada</option>
                            </select>-->
                            <input readonly type="text" name="estado_orden"  value="Pendiente" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        
                        <div class="form-group">
                            <label for="paciente">Paciente</label>
                              <a href="{{url('pacientes\paciente\create')}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear nuevo Paciente">
                                          <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                                <i class="far fa-plus-square"></i>
                                          </button>
                                    </span>
                              </a>
                            <select name="idpaciente" id="idpaciente" class="form-control selectpicker"  data-live-search="true">
                                  <option value="">Buscar Paciente #Documento/Nombre</option>
                                  @foreach($pacientes as $paciente)
                                  <option value="{{$paciente->idpaciente}}">{{$paciente->dpi}} - {{$paciente->nombre}}</option>
                                  @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="doctor">Doctor</label>
                              <!--<a href="{{url('seguridad\doctor\create')}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear nuevo Doctor">
                                          <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                                <i class="far fa-plus-square"></i>
                                          </button>
                                    </span>
                              </a>-->
                            <select name="iddoctor" id="iddioctor" class="form-control selectpicker"  data-live-search="true">
                                  <option value="">Buscar Doctor Nombre/Especialidad</option>
                                  @foreach($doctores as $doctor)
                                  <option value="{{$doctor->id}}">{{$doctor->name}} - {{$doctor->especialidad}}</option>
                                  @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <div class="form-group">
                            <h5 class="h4 card-title"><b> Pacientes seguro:</b></h5>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="codigoeeps">Código EEPS</label>
                            <input type="text" name="codigoeeps"  value="{{old('codigoeeps')}}" class="form-control" placeholder="Código EEPS...">
                          </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="codigopapanicolau">Código Papanicolau</label>
                            <input type="text" name="codigopapanicolau"  value="{{old('codigopapanicolau')}}" class="form-control" placeholder="Código Papanicolau...">
                        </div>
                    </div>
                    
                    @foreach($rubros as $rubro)
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <div class="form-group">
                            <label><b><u>{{$rubro->nombre}}</u></b> </label>
                            <p>{{$rubro->nota}}</p>
                            <?php
                                $articulos = DB::table('rubro_articulo as ra')
                                ->join('articulo as a','ra.idarticulo','=','a.idarticulo')
								->where('idrubro', '=', $rubro->idrubro)
								->get();

                                
                            ?>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-condensed table-hover">
                                    <thead>
                                        
                                        <th class="col-5"><h5><strong>Rubro</strong></h5></th>
                                        <th class="col-3"><h5><strong>Precio ({{ Auth::user()->moneda }})</strong></h5></th>
                                        <th><h5><strong>Activar</strong></h5></th>
                                        
                                    </thead>
                                @foreach ($articulos as $articulo)
                                    <tr>
                                        <td align="center"><h5>{{ $articulo->nombre}}</h5></td>
                                        <!--Datos escondidos-->
                                        <input type="hidden" name="idarticulo{{$articulo->idrubro_articulo}}" value="{{$articulo->idarticulo}}">
                                        <input type="hidden" name="cantidad{{$articulo->idrubro_articulo}}" value="1">
                                        <input type="hidden" name="precio_costo{{$articulo->idrubro_articulo}}" value="{{$articulo->precio_costo}}">
                                        
                                        <td>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">{{ Auth::user()->moneda }}</span>
                                                </div>
                                                <input type="text" name="precio_final{{$articulo->idrubro_articulo}}" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$articulo->precio_venta}}" onkeypress="return validardecimal(event,this.value)">
                                            </div>
                                        </td>

                                        <td align="left">
                                            <label class="d-flex align-items-center justify-content-between">
                                                <div class="form-toggle">
                                                    <input name="check{{$articulo->idrubro_articulo}}" type="checkbox" value="Habilitado" >
                                                    <div class="form-toggle__item">
                                                        <i class="fa" data-check-icon="&#xf00c" data-uncheck-icon="&#xf00d"></i>
                                                    </div>
                                                </div>
                                            </label>
                                        </td>
                                    </tr>
                                    
                                @endforeach
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <div class="form-group">
                            <label for="observaciones">Observaciones</label>
                            <Textarea type="text" name="observaciones"  value="{{old('observaciones')}}" class="form-control" placeholder="Observaciones..."></Textarea>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <footer class="card-footer">
                  <div class="form-group" id="guardar">
                        <!--Datos escondidos-->
                        <input type="hidden" name="idusuario" value="{{Auth::user()->id}}">
                        <input type="hidden" name="estado" value="Habilitada">
                        <input type="hidden" name="total" value="0">
                        <input name="_token" value="{{ csrf_token() }}" type="hidden" >
                        <button class="btn btn-danger" type="reset"><i class="fas fa-ban"></i> Borrar</button>
                        <button class="btn btn-info" type="submit"><i class="far fa-save"></i> Guardar</button>
                  </div>

        
            </footer>
        </div>
</div>
    {!!Form::close()!!}
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
        $( '#datepicker' ).datepicker( optSimple );

        $( '#datepicker' ).datepicker( 'setDate', today );
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
@endsection