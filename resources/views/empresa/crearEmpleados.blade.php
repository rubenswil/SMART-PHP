
@extends('layouts.app')

@section('content')
	<div class="contact-us-section section-spacing">
		<div class="container">
			<div class="theme-title-one">
				<h2>Crear Empleado</h2>
				<!-- <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p> -->
			</div> <!-- /.theme-title-one -->
			<div class="row">
				<div class="col-sm-1"></div>

				<div class="clearfix main-content no-gutters col-sm-10">
				{{-- <div class="clearfix main-content no-gutters col-sm-12"> --}}
					<div class="col-lg-12 col-12">
						<div class="form-wrapper theme-form-one form-validation">
							{!! Form::open(array('route' => 'empleados.store', 'data-parsley-validate' => 'parsley')) !!}

							{{ csrf_field()}}
								<div class="row">
									<div class="col-sm-6 col-12">
										<label for="Nombre">Nombre *</label>
										<input type="text"  name="Nombre" required>
									</div>
									<div class="col-sm-6 col-12">
										<label for="Identificacion">Identificacion *</label>
										<input type="text"  name="Identificacion" required>
									</div>
								</div> <!-- /.row -->

								<div class="row">
									<div class="col-sm-6 col-12">
										<label for="Email">Email *</label>
										<input type="email"  name="Email" required>
									</div>
									<div class="col-sm-6 col-12">
										<label for="Cargo">Cargo *</label>
										<input type="text"  name="Cargo" required>
									</div>
								</div> <!-- /.row -->
								<input type="hidden" name="IdEmpresa" value="{{$idEmpresa}}">
								<div class="row">
									
									<div class="col-sm-6 col-12" style="padding: 0 auto;">
										
										<button type="submit" class="theme-button-one btn-block">Guardar</button>
										{{-- <button type="submit" style="" class="btn btn-info btn-block">Crear</button> --}}
									</div>
									<div class="col-sm-6 col-12">
										<button class="theme-button-one btn-block" onclick="window.location='{{ route("empleados.index") }}'">Cancelar</button>
										
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