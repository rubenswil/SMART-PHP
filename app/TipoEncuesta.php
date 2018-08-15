<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEncuesta extends Model
{
     protected $table = 'tb_adm_TipoEncuensta';

	public $timestamps = false;

	public function getKeyName(){
    	return "IdTipoEncuesta";
	}
}
