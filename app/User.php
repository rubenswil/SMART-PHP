<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    public $table = 'tb_adm_Users';

    protected $primaryKey = 'IdUser';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'IdUser',
        'IdRol',
        'Name',
        'UserName',
        'Gender',
        'Email',
        'Password',
        'Birthday',
        'ImgProfile',
        'DateCreate',
        'DateModify',
        'Active',
        'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Password', 'remember_token',
    ];
}
