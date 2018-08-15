<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Empresa;
use App\TipoEmpresa;
use App\Sector;
use App\UserEmpresa;
use App\ViewPreguntas;
use App\ViewRespuestas;
use App\Respuestas;
use App\Preguntas;
use App\EncuestasEmpresa;
use App\Encuestas;
use App\RespuestasPregunta;
use App\ItemRespuestaPregunta;

class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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

            // Obtiene la empresa encuestada
            $empresa = $request->input('idEmpresa');
            $categoti =  $request->input('idCategoria');

            $preguntas = ViewPreguntas::GetByCategory($categoti);

            foreach ($preguntas as $pregunta) {
                $respuesta = new Respuestas();

                $respuesta->IdEmpresa = $empresa;
                $respuesta->IdCategoria = $categoti;
                $respuesta->IdPregunta = $pregunta->IdPregunta;

                $result = Input::get('optradio_'.$pregunta->IdPregunta)== 'true' ? 1 : 0;    
                $respuesta->Respuesta = $request->input('idCategoria');
                $respuesta->Respuesta = $request->input('idCategoria');
                $respuesta->Calificacion = $pregunta->Calificacion;

                $respuesta->save();
            }

            $notification = array(
                    'message' => 'Datos guardado correctamente',
                    'alert-type' => 'success'
                );
        } catch (Exception $e) {
            $notification = array(
                'message' => 'Se ha producido un error: '.$e, 
                'alert-type' => 'error'
              );
        }


        return redirect()->route('preguntas.show',$empresa)->with($notification);
        // $respuestas = new Respuestas();$preguntas = ViewPreguntas::GetByCategory(1);



        // $seguimiento->IdPrograma = $request->input('IdPrograma');
        // $seguimiento->IdPrograma = $request->input('IdPrograma');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idEncuestaEmpresa)
    {
        $encuestasEmpresa = EncuestasEmpresa::find($idEncuestaEmpresa);
        // Obtiene la encusta a responder
        $encuesta = Encuestas::find($encuestasEmpresa->IdEncuesta);

        // Obtiene la empresa encuestada
        $empresas = Empresa::getById($encuestasEmpresa->IdEmpresa);

        // Cuenta la cantidad de preguntas respondidads
        $count = Respuestas::countCategoryByEncuesta($encuesta->IdEncuesta);

        // Maxima Categoria
        $maxCategoria = Preguntas::getLastCategoria($encuesta->IdEncuesta);

        //Si es 0 es porque no ha constestado nada, si no obtiene la ultima categoria de preguntas muestra a siguiente
        if ($count == 0)
        {
            $preguntas = ViewPreguntas::GetByCategoryByEncuesta(1, $encuesta->IdEncuesta);

            foreach ($preguntas as $pregunta) {
                // $pregunta->respuestas = ViewRespuestas::GetByIdPregunta($pregunta->IdPregunta);
                $pregunta->respuestas = RespuestasPregunta::GetByIdPregunta($pregunta->IdPregunta);
                foreach ($pregunta->respuestas as $respuesta) {
                    $respuesta->items = ItemRespuestaPregunta::GetByIdRespuesta($respuesta->IdRespuestaPregunta);
                }
            }
            // dd($preguntas);

            return view ('preguntas.preguntas')
                ->with('empresas', $empresas)
                ->with('preguntas', $preguntas)
                ->with('encuestasEmpresa', $encuestasEmpresa);
        }
        else
        {
            $respuesta = Respuestas::getByEmpresaForCategory($encuestasEmpresa->$idEmpresa);


            if ($maxCategoria != $respuesta[$count-1]->IdCategoria)
            {
                $preguntas = ViewPreguntas::GetByCategoryByEncuesta($respuesta[$count-1]->IdCategoria + 1, $encuesta->IdEncuesta);

                foreach ($preguntas as $pregunta) {
                    $pregunta->respuestas = ViewRespuestas::GetByIdPregunta($pregunta->IdPregunta);
                }

                return view ('preguntas.preguntas')
                    ->with('empresas', $empresas)
                    ->with('preguntas', $preguntas)
                    ->with('encuestasEmpresa', $encuestasEmpresa);  
            }
            else
            {
                $puntaje = Respuestas::calificacion($empresas[0]->IdEmpresa);
                return view ('preguntas.puntaje')
                    ->with('empresas', $empresas)
                    ->with('puntaje', $puntaje);
            }
        }
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
    public function destroy($id)
    {
        //
    }
}
