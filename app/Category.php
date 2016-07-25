<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  // nombre de la tabla asociada al modelo
  protected $table = 'categories';
  // Campos que se traen y muestran objetos JSON
  protected $fillable =['name'];
    //
  // Establece la relacion con Articulos
   public function articles() {
    // 1 a muchos (una categoria tiene muchos articulos)  NOMBRE PLURAL
      return $this->hasMany('\App\Article');

   }

}
