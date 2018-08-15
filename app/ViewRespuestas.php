<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewRespuestas extends Model
{
    protected $table = 'View_Respuestas';

	public $timestamps = false;

	public static function GetByIdPregunta($idPregunta)
	{
		return ViewRespuestas::where('IdPregunta','=',$idPregunta)
							->get();
	}
}
