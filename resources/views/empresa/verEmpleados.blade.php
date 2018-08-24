
@extends('layouts.app')

@section('content')
	<div class="contact-us-section section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Empleados</h2>
						<!-- <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p> -->
					</div> <!-- /.theme-title-one -->
					<div class="row">
						<div class="col-sm-1"></div>
						<div class="clearfix main-content no-gutters col-sm-10">
							<div class="col-xl-12 col-lg-12 col-12" style="padding: 15px; background-color: #9ba3bb; margin-bottom: 10px;">
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-12"><h5>Agregar Empleados</h5></div>
	                            	<div class="col-xl-6 col-lg-6 col-12" style="text-align: right;">
	                            		<a href="{{ route("empleados.show", $idEmpresa) }}" class="button-table theme-button-one"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>

							<div class="col-lg-12 col-12">
								
								<table id="empresas">
		                            <thead>
		                                <tr>
		                                    <th style="text-align: center;">Nombre</th>
		                                    <th style="text-align: center;">Email</th>
		                                    <th style="text-align: center;">Cargo</th>
		                                    <th style="text-align: center;">Eliminar</th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                            	@foreach ($empleados as $empleado)
										<tr>
											<td style="text-align: center;">{{$empleado->Nombre}}</td>
		                                    <td style="text-align: center;">{{$empleado->Email}}</td>
		                                    <td style="text-align: center;">{{$empleado->Cargo}}</td>

		                                    <td style="text-align: center;">
		                                    	<div class="row">
			                                    	{{-- <div class="col-xl-6 col-lg-6 col-6">
			                                    		<a href="#" class="button-table theme-button-one"><i class="fa fa-pencil" aria-hidden="true"></i></a>
													</div> --}}
													<div class="col-xl-6 col-lg-6 col-6">
			                                    		{{-- <a href="{{route('auditoria.edit', $audioria->IdAuditoria) }}" class="button-table theme-button-one"><i class="fa fa-minus-circle" aria-hidden="true"></i></a> --}}

			                                    		{!! Form::open(['route' => ['empleados.destroy', $empleado->IdEmpleados], 'method' => 'DELETE']) !!}

															<a href="javascript:;" onclick="parentNode.submit();" class="button-table theme-button-one"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>

														{!! Form::close() !!}
													</div>
												</div>
		                                    </td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div> <!-- /.col- -->
						</div> <!-- /.main-content -->
						<div class="col-sm-1"></div>
					</div>
				</div> <!-- /.container -->

				
			</div> <!-- /.contact-us-section -->
			<script src="{{ asset('vendor/jquery.2.2.3.min.js') }}"></script>
			<script>
				$(document).ready( function () {
				    $('#empresas').DataTable({});
				} );
			</script>
@endsection