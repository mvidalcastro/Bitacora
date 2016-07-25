<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  // nombre de la tabla asociada al modelo
  protected $table = 'tags';
  // Campos que se traen y muestran objetos JSON
  protected $fillable =['name'];
    //

    ////////////////////////////////////////////////////
    // Establece la relacion con ARTICLE
     public function articles() {
        // 1 articulo tiene muchos tag  NOMBRE PLURAL
        return $this->belongsToMany('\App\Article')->withTimestamps();

     }



}
