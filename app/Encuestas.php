<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuestas extends Model
{
    protected $table = 'tb_Encuestas';

	public $timestamps = false;

	public function getKeyName(){
    	return "IdEncuesta";
	}
}
