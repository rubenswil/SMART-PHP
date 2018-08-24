<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\TipoEmpresa;
use App\Sector;
use App\UserEmpresa;
use App\Empleados;

use DB;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::getAll();
        return view ('empresa.verEmpresas')->with('empresas', $empresas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*Set Dropdown tipo Empresas*/
        $tipoEmpresa = TipoEmpresa::all();
        $tipoEmpresa->prepend('None');

        /*Set Dropdown Sector*/
        $sector = Sector::all();
        $sector->prepend('None');


        return view('empresa.crearEmpresas')
            ->with('sector', $sector)
            ->with('tipoEmpresa', $tipoEmpresa);
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
            $empresas = new Empresa;
            $empresas->Nombre = $request->input('Nombre');
            $empresas->Identificacion = $request->input('Identificacion');
            $empresas->IdTipoEmpresa = $request->input('IdTipoEmpresa');
            $empresas->Descripcion = $request->input('Descripcion');
            $empresas->IdSector = $request->input('IdSector');
            $empresas->Contacto = $request->input('Contacto');
            $empresas->Email = $request->input('Email');
            $empresas->NoEmpleados = $request->input('NoEmpleados');
            $empresas->TipoRiesgo = $request->input('TipoRiesgo');
            $empresas->Email = $request->input('Email');
            $empresas->ARL = $request->input('ARL');
            $empresas->DateCreate = date('Y-m-d H:i:s');

            $empresas->save();

            // $userEmpresa = new UserEmpresa;

            // $userEmpresa->IdEmpresa =$empresas->IdEmpresa;
            // // $userEmpresa->IdUser = $IdUser;
            // $userEmpresa->IdUser = 1;
            // $userEmpresa->save();


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
        
        return redirect()->route('empresas.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idEmpresa)
    {
        $empleados = Empleados::getByEmpresa($idEmpresa);
        return view ('empresa.verEmpleados')
                    ->with('empleados', $empleados)
                    ->with('idEmpresa', $idEmpresa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function destroy($idEmpresa)
    {
        $existEmpleados = DB::table('tb_Empleados')->where('IdEmpresa', $idEmpresa)->first();
        $existsEncuestas = DB::table('tb_EncuestasEmpresa')->where('IdEmpresa', $idEmpresa)->first();

        // dd($exists);
        if(!$existEmpleados && !$existsEncuestas){
            // USING MODELS
            $empresas = Empresa::find($idEmpresa);
            $empresas->delete();

            $notification = array(
                  'message' => 'Datos eliminados correctamente',
                  'alert-type' => 'success'
            );
        }
        else
        {
            $notification = array(
            'message' => 'No se puede eliminar esta Empresa ya que tiene datos asociados en Encuestas o Empleados.', 
            'alert-type' => 'warning'
          );
        }

        return redirect()->route('empresas.index')->with($notification);
    }
}
