<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemRespuestaPregunta extends Model
{
    protected $table = 'tb_ItemRespuestaPregunta';

	public $timestamps = false;

	public function getKeyName(){
    	return "IdItem";
	}

	public static function GetByIdRespuesta($IdRespuestaPregunta)
	{
		return ItemRespuestaPregunta::where('IdRespuestaPregunta','=',$IdRespuestaPregunta)
							->get();
	}
}
