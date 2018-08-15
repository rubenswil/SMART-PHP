
@extends('layouts.app')

@section('content')
	<div class="contact-us-section section-spacing">
		<div class="container">
			<div class="theme-title-one">
				<h2>Crear Empresas</h2>
				<!-- <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p> -->
			</div> <!-- /.theme-title-one -->
			<div class="row">
				<div class="col-sm-1"></div>

				<div class="clearfix main-content no-gutters col-sm-10">
				{{-- <div class="clearfix main-content no-gutters col-sm-12"> --}}
					<div class="col-lg-12 col-12">
						<div class="form-wrapper theme-form-one form-validation">
							{!! Form::open(array('route' => 'empresas.store', 'data-parsley-validate' => 'parsley')) !!}

							{{ csrf_field()}}
								<div class="row">
									<div class="col-sm-6 col-12">
										<label for="Nombre">Nombre *</label>
										<input type="text"  name="Nombre" required>
									</div>									
								</div> <!-- /.row -->
								<div class="row">
									<div class="col-sm-6 col-12">
										<label for="Identificacion">Identificacion *</label>
										<input type="text"  name="Identificacion" required>
									</div>
									<div class="col-sm-6 col-12">
										<label for="Identificacion">Tipo Empresa *</label>
										{{ Form::select('IdTipoEmpresa', $tipoEmpresa->pluck('TipoEmpresa', 'IdTipoEmpresa'), null, ['class' => 'form-control', 'id' => 'IdTipoEmpresa']) }}
									</div>
								</div> <!-- /.row -->
								<div class="row">
									<div class="col-sm-6 col-12">
										<label for="Descripcion">Descripción *</label>
										<input type="text"  name="Descripcion">
									</div>
									<div class="col-sm-6 col-12">
										<label for="Sector">Sector *</label>
										{{ Form::select('IdSector', $sector->pluck('Sector', 'IdSector'), null, ['class' => 'form-control', 'id' => 'IdSector']) }}
									</div>
								</div>								
								<div class="row">
									<div class="col-sm-6 col-12">
										<label for="Contacto">Contacto *</label>
										<input type="text"  name="Contacto" required>
									</div>
									<div class="col-sm-6 col-12">
										<label for="Email">Email *</label>
										<input type="email"  name="Email" required>
									</div>
								</div> <!-- /.row -->
								<div class="row">
									<div class="col-sm-4 col-12">
										<label for="NoEmpleados">Número Empleados *</label>
										<input type="number"  name="NoEmpleados" required>
									</div>
									<div class="col-sm-4 col-12">
										<label for="TipoRiesgo">TipoRiesgo *</label>
										<input type="number"  name="TipoRiesgo" required>
									</div>
									<div class="col-sm-4 col-12">
										<label for="ARL">ARL *</label>
										<input type="text"  name="ARL" required>
									</div>

								</div> <!-- /.row -->
								<div class="row">
									
									<div class="col-sm-6 col-12" style="padding: 0 auto;">
										
										<button type="submit" class="theme-button-one btn-block">Guardar</button>
										{{-- <button type="submit" style="" class="btn btn-info btn-block">Crear</button> --}}
									</div>
									<div class="col-sm-6 col-12">
										<button class="theme-button-one btn-block" onclick="window.location='{{ route("empresas.index") }}'">Cancelar</button>
										
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