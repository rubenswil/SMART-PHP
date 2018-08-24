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
use App\ViewPonderadoCategoria;
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
            $idEncuestaEmpresa = $request->input('IdEncuestaEmpresa');
            $idCategoria = $request->input('IdCategoria');
            $idEmpresa = $request->input('IdEmpresa');
            $idEncuesta = $request->input('IdEncuesta');

            $preguntas = ViewPreguntas::GetByCategoryByEncuesta($idCategoria, $idEncuesta);

            foreach ($preguntas as $pregunta) {
                
                $pregunta->respuestas = RespuestasPregunta::GetByIdPregunta($pregunta->IdPregunta);

                foreach ($pregunta->respuestas as $respuesta) {

                    // $respuesta->items = ItemRespuestaPregunta::GetByIdRespuesta($respuesta->IdRespuestaPregunta);

                    if($respuesta->IdTipoRespuesta == 1){
                        $selec = Input::get('select_'.$respuesta->IdRespuestaPregunta);
                        $item = ItemRespuestaPregunta::find($selec);
                        $result = $item->Item;
                        $score =  $item->Calificacion;

                        $respuesta = new Respuestas();

                        $respuesta->IdEmpresa = $idEmpresa;
                        $respuesta->IdEncuestaEmpresa = $idEncuestaEmpresa;
                        $respuesta->IdCategoria = $idCategoria;
                        $respuesta->IdRespuestaPregunta = $respuesta->IdRespuestaPregunta;
                        $respuesta->Respuesta = $result;
                        $respuesta->Calificacion = $score;
                        $respuesta->Observaciones = '';
                        
                        $respuesta->save();
                    }

                    if($respuesta->IdTipoRespuesta == 2){
                        $respuesta->items = ItemRespuestaPregunta::GetByIdRespuesta($respuesta->IdRespuestaPregunta);
                        foreach ($respuesta->items as $item) {
                            $selec = Input::get('optradio_'.$item->IdItem);
                            $item = ItemRespuestaPregunta::find($selec);
                            $result = $item->Item;
                            $score =  $item->Calificacion;

                            $respuesta = new Respuestas();

                            $respuesta->IdEmpresa = $idEmpresa;
                            $respuesta->IdEncuestaEmpresa = $idEncuestaEmpresa;
                            $respuesta->IdCategoria = $idCategoria;
                            $respuesta->IdRespuestaPregunta = $respuesta->IdRespuestaPregunta;
                            $respuesta->Respuesta = $result;
                            $respuesta->Calificacion = $score;
                            $respuesta->Observaciones = '';
                            
                            $respuesta->save();
                        }
                    }

                    if($respuesta->IdTipoRespuesta == 3){
                        $selec = Input::get('optradio_'.$respuesta->IdRespuestaPregunta);
                        $item = ItemRespuestaPregunta::find($selec);
                        $result = $item->Item;
                        $score =  $item->Calificacion;

                        $respuesta = new Respuestas();

                        $respuesta->IdEmpresa = $idEmpresa;
                        $respuesta->IdEncuestaEmpresa = $idEncuestaEmpresa;
                        $respuesta->IdCategoria = $idCategoria;
                        $respuesta->IdRespuestaPregunta = $respuesta->IdRespuestaPregunta;
                        $respuesta->Respuesta = $result;
                        $respuesta->Calificacion = $score;
                        $respuesta->Observaciones = '';
                        
                        $respuesta->save();
                    }

                    if($respuesta->IdTipoRespuesta == 4){
                        $result = Input::get('opttext_'.$respuesta->IdRespuestaPregunta);
                        $score = 0;

                        $respuesta = new Respuestas();

                        $respuesta->IdEmpresa = $idEmpresa;
                        $respuesta->IdEncuestaEmpresa = $idEncuestaEmpresa;
                        $respuesta->IdCategoria = $idCategoria;
                        $respuesta->IdRespuestaPregunta = $respuesta->IdRespuestaPregunta;
                        $respuesta->Respuesta = $result;
                        $respuesta->Calificacion = $score;
                        $respuesta->Observaciones = '';
                        
                        $respuesta->save();
                    }

                }
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


        return redirect()->route('preguntas.show',$idEncuestaEmpresa)->with($notification);
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
        $count = Respuestas::countCategoryByEncuestaEmpresa($idEncuestaEmpresa);

        // Maxima Categoria
        $maxCategoria = Preguntas::getLastCategoria($encuestasEmpresa->IdEncuesta);

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
            $respuesta = Respuestas::getByEncuestaEmpresaForCategory($idEncuestaEmpresa);


            if ($maxCategoria != $respuesta[$count-1]->IdCategoria)
            {
                $preguntas = ViewPreguntas::GetByCategoryByEncuesta($respuesta[$count-1]->IdCategoria + 1, $encuesta->IdEncuesta);

                foreach ($preguntas as $pregunta) {
                    // $pregunta->respuestas = ViewRespuestas::GetByIdPregunta($pregunta->IdPregunta);
                    $pregunta->respuestas = RespuestasPregunta::GetByIdPregunta($pregunta->IdPregunta);
                    foreach ($pregunta->respuestas as $respuesta) {
                        $respuesta->items = ItemRespuestaPregunta::GetByIdRespuesta($respuesta->IdRespuestaPregunta);
                    }
                }

                return view ('preguntas.preguntas')
                    ->with('empresas', $empresas)
                    ->with('preguntas', $preguntas)
                    ->with('encuestasEmpresa', $encuestasEmpresa);  
            }
            else
            {
                $puntaje = number_format(Respuestas::calificacion($idEncuestaEmpresa), 2, '.', ',');
                $categorias = ViewPonderadoCategoria::GetCategoriesByEncuestaEmpresa($idEncuestaEmpresa);
                // $respuesta = Respuestas::getByEncuestaEmpresaForCategory($idEncuestaEmpresa);

                /*AL FINALIZA PONER UN ESTADO EN LA TABLA DE ENCUETAS-EMPRESAS Y AL FINALIZAR CAMBIAR ESTADO*/

                return view ('preguntas.puntaje')
                    ->with('empresas', $empresas)
                    ->with('puntaje', $puntaje)
                    ->with('categorias', $categorias)
                    ->with('encuesta', $encuesta);
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
