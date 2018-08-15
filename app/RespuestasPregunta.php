<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RespuestasPregunta extends Model
{
    protected $table = 'tb_RespuestasPreguntas';

	public $timestamps = false;

	public function getKeyName(){
    	return "IdRespuestaPregunta";
	}

	public static function GetByIdPregunta($idPregunta)
	{
		return RespuestasPregunta::where('IdPregunta','=',$idPregunta)
							->get();
	}
}
