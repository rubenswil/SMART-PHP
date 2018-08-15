<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Preguntas extends Model
{
    protected $table = 'tb_Preguntas';

	public $timestamps = false;

	public function getKeyName(){
    	return "IdPregunta";
	}

	public static function getLastCategoria($idEncuesta)
	{
		return Preguntas::where('IdEncuesta','=', $idEncuesta)->max('IdCategoria')
						;
	}
}
