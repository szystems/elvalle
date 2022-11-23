{!! Form::open(array('url'=>'pacientes/cita','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
	<div>
    	<div class="card mb-4">
            <header class="card-header">
				  <h5 class="h3 card-header-title"><strong>Filtrar por: </strong></h5>
				  <h6><font color="orange"> Selecciona la fecha y doctor para filtrar la búsqueda de citas.</font></h6>
				  <h6><font color="orange"> Campos Obligatorios *</font></h6>
				  <input type="hidden" class="form-control" name="xsearch" placeholder="Buscar por Codigo..." value="xfiltros">
            </header>
            <div class="card-body">
                <div class="row">
					<?php
					
					?>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group mb-2">
							<label for="desde"></label><font color="orange">*</font>Desde:</label>
							<span class="form-icon-wrapper">
								<span class="form-icon form-icon--right">
									<i class="fas fa-calendar-alt form-icon__item"></i>
								</span>
								<input type="text" id="datepickerdesde" class="form-control datepicker" name="desde" value="{{ $desde }}">
							</span>
						</div>
					</div>

					<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group mb-2">
							<label for="hasta"></label><font color="orange">*</font>Hasta:</label>
							<span class="form-icon-wrapper">
								<span class="form-icon form-icon--right">
									<i class="fas fa-calendar-alt form-icon__item"></i>
								</span>
								<input type="text" id="datepickerhasta" class="form-control datepicker" name="hasta" value="{{ $hasta }}">
							</span>
						</div>
					</div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group mb-2">
                            
                            <label for="iddoctorBuscar"><font color="orange">*</font>Doctor</label>
                            <select name="iddoctorBuscar" id="iddoctorBuscar" class="form-control selectpicker"  data-live-search="true">
                                @if($iddoctorBuscar == "")
                                    <option selected value="">Todos</option>
                                @else
                                    <option selected value="{{$doctorBuscar->id}}">{{$doctorBuscar->name}} ({{$doctorBuscar->especialidad}})</option>
                                    <option value="">Todos</option>
                                @endif

                                @foreach($doctores as $doctor)
                                <option value="{{$doctor->id}}">{{$doctor->name}} / {{$doctor->especialidad}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
				</div>
            </div>
            <footer class="card-footer">
                <div class="form-group">
					<span class="input-group-btn">
						<button type="submit" class="btn btn-info">
							<i class="fas fa-search"></i> Buscar
						</button>
					</span>
				</div>
			</footer>
    	</div>
	</div>

{{Form::close()}}
