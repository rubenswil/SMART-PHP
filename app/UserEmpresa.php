<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEmpresa extends Model
{
    protected $table = 'tb_UserEmprsa';

	public $timestamps = false;	

	public static function getByIds($idEmpresa, $idUser){
		return UserEmpresa::where('IdEmpresa', '=',$idEmpresa )
							->where('IdUser', '=', $idUser)
							->get();
	}
}
