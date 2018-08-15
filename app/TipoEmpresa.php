<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEmpresa extends Model
{
     protected $table = 'tb_adm_TipoEmpresa';

	public $timestamps = false;

	public function getKeyName(){
    	return "IdTipoEmpresa";
	}
}
