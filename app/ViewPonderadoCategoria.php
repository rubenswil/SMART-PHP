<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewPonderadoCategoria extends Model
{
    protected $table = 'View_PonderadoCategoria';

	public $timestamps = false;

	public static function GetCategoriesByEncuestaEmpresa($idEncuestaEmpresa)
	{
		return ViewPonderadoCategoria::where('IdEncuestaEmpresa','=',$idEncuestaEmpresa)
							->get();
	}
}
