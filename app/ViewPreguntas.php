<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewPreguntas extends Model
{
    protected $table = 'View_Pregutas';

	public $timestamps = false;

	public static function GetByCategoryByEncuesta($idCategoria, $idEncuesta)
	{
		return ViewPreguntas::where('IdCategoria','=',$idCategoria)
							->where('IdEncuesta','=',$idEncuesta)
							->get();
	}
	
}
