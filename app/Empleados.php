<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table = 'tb_Empleados';

	public $timestamps = false;

	public function getKeyName(){
    	return "IdEmpleados";
	}

	public static function getByEmpresa($idEmpresa)
	{
		return Empleados::where('IdEmpresa', '=', $idEmpresa)->get();
	}
}
