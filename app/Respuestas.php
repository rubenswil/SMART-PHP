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

	public static function countCategoryByEncuesta($idEncuesta)
	{
		return Respuestas::where('IdEncuesta','=',$idEncuesta)->get()->count();
	}

	public static function getByEmpresaForCategory($idEmpresa)
	{
		return Respuestas::where('IdEmpresa','=',$idEmpresa)->get();
	}

	public static function calificacion($idEmpresa)
	{
		return Respuestas::where('IdEmpresa','=',$idEmpresa)
						   ->where('Respuesta','<>', 0)
						   ->sum('Calificacion');
	}
}
