<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empleados;
class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd($idEmpresa);
        // /*Set Dropdown tipo Empresas*/
        // $tipoEmpresa = TipoEmpresa::all();
        // $tipoEmpresa->prepend('None');

        // /*Set Dropdown Sector*/
        // $sector = Sector::all();
        // $sector->prepend('None');


        return view('empresa.crearEmpleados');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $empleado = new Empleados();

            $empleado->IdEmpresa = $request->input('IdEmpresa');
            $empleado->Nombre = $request->input('Nombre');
            $empleado->Identificacion = $request->input('Identificacion');
            $empleado->Email = $request->input('Email');
            $empleado->Cargo = $request->input('Cargo');
            $empleado->Active = 1;

            $empleado->save();

             $notification = array(
                'message' => 'Datos agregado correctamente',
                'alert-type' => 'success'
            );
            
        } catch (Exception $e) {
            $notification = array(
                'message' => 'Se ha producido un error: '.$e, 
                'alert-type' => 'error'
              );
        }

        return redirect()->route('empresas.show', $empleado->IdEmpresa)->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idEmpresa)
    {
        return view('empresa.crearEmpleados')
                ->with('idEmpresa', $idEmpresa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idEmpresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idEmpleados)
    {
        $existEncuestaEmple = DB::table('tb_Empleados')->where('IdEmpleado', $idEmpleados)->first();
        $existUsuario = DB::table('tb_Empleados')->where('IdEmpleado', $idEmpleados)->first();

        $empleado = Empleados::find($idEmpleados);
        $empleado->delete();

        $notification = array(
              'message' => 'Datos eliminados correctamente',
              'alert-type' => 'success'
        );

        return redirect()->route('empresas.show', $empleado->IdEmpresa)->with($notification);
    }
}
