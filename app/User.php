<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // Establece la relacion con Articulos
     public function articles() {
      // 1 a muchos (un usuario tiene muchos articulos)  NOMBRE PLURAL
        return $this->hasMany('\App\Article');

     }

}
