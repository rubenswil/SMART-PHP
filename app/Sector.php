<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
     protected $table = 'tb_adm_Sector';

	public $timestamps = false;

	public function getKeyName(){
    	return "IdSector";
	}
}
