<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    
    protected $table = 'tb_his_Empresas';

	public $timestamps = false;

	public function getKeyName(){
    	return "IdEmpresa";
	}

	public static function getAll(){
		return Empresa::join('tb_adm_TipoEmpresa','tb_adm_TipoEmpresa.IdTipoEmpresa','=','tb_his_Empresas.IdTipoEmpresa')
						->join('tb_adm_Sector','tb_adm_Sector.IdSector','=','tb_his_Empresas.IdSector')
						->get();
	}

	public static function getById($idEmpresa){
		return Empresa::join('tb_adm_TipoEmpresa','tb_adm_TipoEmpresa.IdTipoEmpresa','=','tb_his_Empresas.IdTipoEmpresa')
						->join('tb_adm_Sector','tb_adm_Sector.IdSector','=','tb_his_Empresas.IdSector')
						->where('IdEmpresa','=',$idEmpresa)
						->get();
	}
}
