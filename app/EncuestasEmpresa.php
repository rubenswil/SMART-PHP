<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EncuestasEmpresa extends Model
{
    protected $table = 'tb_EncuestasEmpresa';

	public $timestamps = false;

	public function getKeyName(){
    	return "IdEncuestaEmpresa";
	}

	public static function getByEmpresa($idEmpresa)
	{
		return EncuestasEmpresa::where('IdEmpresa', '=', $idEmpresa)->get();
	}
}
