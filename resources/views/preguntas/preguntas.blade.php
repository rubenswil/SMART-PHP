
@extends('layouts.app')

@section('content')
	<div class="contact-us-section section-spacing">
		<div class="container">
			<div class="theme-title-one">
				<h2>{{$encuestasEmpresa->TituloEncuesta}}</h2>
				<h3>{{$empresas[0]->Nombre}}</h3>
				<!-- <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p> -->
			</div> <!-- /.theme-title-one -->
			<div class="row">
				<div class="col-sm-1"></div>

				<div class="clearfix main-content no-gutters col-sm-10">
				{{-- <div class="clearfix main-content no-gutters col-sm-12"> --}}
					<div class="col-lg-12 col-12">
						<div class="form-wrapper theme-form-one form-validation">
							{!! Form::open(array('route' => 'preguntas.store', 'data-parsley-validate' => 'parsley')) !!}

							{{ csrf_field()}}
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-12"></div>									
								</div>
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-12"><label for="">{{$empresas[0]->Sector}}</label></div>
								</div>
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-12"><label for="">{{$preguntas[0]->Fase}}</label></div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-12"><label for="">{{$preguntas[0]->Categoria}}</label></div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-12"><label for="">{{$preguntas[0]->Estandar}}</label></div>
								</div>
								@foreach ($preguntas as $pregunta)
								<hr>
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-6">
										<label for="">{{$pregunta->Pregunta}}</label>
										@if($pregunta->urlVideo != null)
										<button type="button" class="btn btn-primary" onclick="window.open('{{$pregunta->urlVideo}}', '_blank');">
										  Ayuda
										</button>
										@endif
									</div>
									

									<div class="col-xl-6 col-lg-6 col-6">

										@foreach ($pregunta->respuestas as $respuesta)

											@if($respuesta->IdTipoRespuesta == 1)
											    <div class="form-check">
												  
												    <select name="select_{{$respuesta->IdRespuestaPregunta}}" required>
												    	@foreach($respuesta->items as $item)
												    	<option value="{{$item->IdItem}}">{{$item->Item}}</option>
												    	@endforeach
												    </select>
												  
												</div>
											@endif
											@if($respuesta->IdTipoRespuesta == 2)
												@foreach($respuesta->items as $item)
											    <div class="form-check">
												  <label class="form-check-label">
												    <input type="checkbox" class="form-check-input" name="optcheckbox_{{$item->IdItem}}" value="{{$item->IdItem}}">{{$item->Item}}
												  </label>
												</div>
												@endforeach
											@endif
											@if($respuesta->IdTipoRespuesta == 3)
												@foreach($respuesta->items as $item)
													<div class="row">
														<div class="col-xl-12 col-lg-12 col-12">
														    <div class="form-check">
															  <label class="form-check-label">
															    <input type="radio" class="form-check-input" name="optradio_{{$item->IdRespuestaPregunta}}" value="{{$item->IdItem}}" required>{{$item->Item}}
															  </label>
															</div>
														</div>
													</div>
												@endforeach
												<div class="row">
													<div class="col-xl-10 col-lg-10 col-12">
														<div class="form-group">
														  <input type="text" class="form-control encuesta" id="usr" placeholder="Observaciones">
														</div>
													</div>
												</div>
											@endif
											@if($respuesta->IdTipoRespuesta == 4)
											    <div class="form-check">
												  <label class="form-check-label">
												    <input type="text" class="form-check-input" name="opttext_{{$respuesta->IdRespuestaPregunta}}" required="">
												  </label>
												</div>
											@endif
											
										@endforeach
									</div>

								</div>
								@endforeach
								<input type="hidden" id="IdCategoria" name="IdCategoria" value="{{$pregunta->IdCategoria}}">
								<input type="hidden" id="IdEncuestaEmpresa" name="IdEncuestaEmpresa" value="{{$encuestasEmpresa->IdEncuestaEmpresa}}">
								<input type="hidden" id="IdEmpresa" name="IdEmpresa" value="{{$encuestasEmpresa->IdEmpresa}}">
								<input type="hidden" id="IdEncuesta" name="IdEncuesta" value="{{$encuestasEmpresa->IdEncuesta}}">
								<br>
								<br>
								{{-- Botone --}}
								<div class="row">
									<div class="col-sm-6 col-12">
										<button class="theme-button-one btn-block" onclick="window.location='{{ route("empresas.index") }}'">Cancelar</button>
										
									</div>
									<div class="col-sm-6 col-12" style="padding: 0 auto;">
										
										<button type="submit" class="theme-button-one btn-block">Guardar</button>
										{{-- <button type="submit" style="" class="btn btn-info btn-block">Crear</button> --}}
									</div>
								</div>

							{!! Form::close() !!}
						</div> <!-- /.form-wrapper -->
					</div> <!-- /.col- -->
				{{-- </div> --}} <!-- /.main-content -->
					
				</div> <!-- /.main-content -->

				<div class="col-sm-1"></div>
			</div>
		</div> <!-- /.container -->

		
	</div> <!-- /.contact-us-section -->
@endsection