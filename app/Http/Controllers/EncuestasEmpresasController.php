<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EncuestasEmpresa;
use App\Encuestas;
use App\Empresa;

class EncuestasEmpresasController extends Controller
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
        //
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
            $encuesta = new EncuestasEmpresa;

            $encuesta->IdEmpresa = $request->input('IdEmpresa');
            $encuesta->IdEncuesta = $request->input('IdEncuesta');
            $encuesta->TituloEncuesta = $request->input('Titulo');
            $encuesta->Active = 1;

            $encuesta->save();

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
        
        return redirect()->route('encuestaEmpresa.show', $encuesta->IdEmpresa)->with($notification);
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idEmpresa)
    {
        $empresa = Empresa::find($idEmpresa);
        $encuestas = EncuestasEmpresa::getByEmpresa($idEmpresa);

        return view('empresa.verEncuestasEmpresa')
                ->with('idEmpresa', $idEmpresa)
                ->with('encuestas', $encuestas)
                ->with('empresa', $empresa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idEmpresa)
    {
        $encuestas = Encuestas::all();
        $encuestas->prepend('None');

        $empresa = Empresa::find($idEmpresa);

        return view('empresa.crearEncuestasEmpresa')
                ->with('empresa', $empresa)
                ->with('encuestas', $encuestas);
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
    public function destroy($idEncuestaEmpresa)
    {
         
        //FALTA VALIDAR QUE NO TENGA DATOS ASOCIADOS
         try {
             $encuesta = EncuestasEmpresa::find($idEncuestaEmpresa);
             $encuesta->delete();

             $notification = array(
              'message' => 'Datos eliminados correctamente',
              'alert-type' => 'success'
            );
             
         } catch (Exception $e) {
             $notification = array(
                'message' => 'Se ha producido un error: '.$e, 
                'alert-type' => 'error'
              );
         }

         return redirect()->route('encuestaEmpresa.show', $encuesta->IdEmpresa)->with($notification);
    }
}
