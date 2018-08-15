
@extends('layouts.app')

@section('content')
	<div class="contact-us-section section-spacing">
		<div class="container">
			<div class="theme-title-one">
				<h2>Encuesta</h2>
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
									<div class="col-xl-6 col-lg-6 col-12"><h6>Empresa: </h6><label for="">{{$empresas[0]->Nombre}}</label></div>
									<div class="col-xl-6 col-lg-6 col-12"><h6>Sector: </h6><label for="">{{$empresas[0]->Sector}}</label></div>								
								</div>
								<div class="row">
									
								</div>
								
								<hr>
								<div class="row">
									<div class="col-xl-4 col-lg-4 col-12">
									</div>
									<div class="col-xl-4 col-lg-4 col-12" style="text-align: center;">
										<h3>Total: {{$puntaje}}</h3>
									</div>
									<div class="col-xl-4 col-lg-4 col-12">
									</div>
								</div>
								
								<br>
								<br>
								{{-- Botone --}}
								<div class="row">
									<div class="col-xl-4 col-lg-4 col-12">
									</div>
									<div class="col-sm-4 col-lg-4 col-12">
										<button class="theme-button-one btn-block" onclick="window.location='{{ route("empresas.index") }}'">Aceptar</button>
										
									</div>
									<div class="col-xl-4 col-lg-4 col-12">
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