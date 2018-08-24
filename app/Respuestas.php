<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    protected $table = 'tb_Respuestas';

	public $timestamps = false;

	public function getKeyName(){
    	return "IdRespuesta";
	}

	public static function countCategoryByEncuestaEmpresa($idEncuestaEmpresa)
	{
		return Respuestas::where('IdEncuestaEmpresa','=',$idEncuestaEmpresa)->get()->count();
	}

	public static function getByEncuestaEmpresaForCategory($idEncuestaEmpresa)
	{
		return Respuestas::where('IdEncuestaEmpresa','=',$idEncuestaEmpresa)->get();
	}

	public static function calificacion($idEncuestaEmpresa)
	{
		return Respuestas::where('IdEncuestaEmpresa','=',$idEncuestaEmpresa)
						   ->sum('Calificacion');
	}
}
