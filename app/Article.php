<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  // nombre de la tabla asociada al modelo
  protected $table = 'articles';
  // Campos que se traen y muestran objetos JSON
  protected $fillable =['title', 'content', 'category_id', 'user_id'];

  ////////////////////////////////////////////////////
  // Establece la relacion con Categoria
   public function category() {
      // 1 articulo pertence a solo 1 categoria  NOMBRE SINGULAR
      return $this->belongsTo('\App\Category');

   }

   ////////////////////////////////////////////////////
   // Establece la relacion con Usuario
    public function user() {
       // 1 articulo pertence a solo 1 Usuario  NOMBRE SINGULAR
       return $this->belongsTo('\App\User');

    }

    ////////////////////////////////////////////////////
    // Establece la relacion con Image
     public function images() {
        // 1 articulo tiene muchas imagenes  NOMBRE PLURAL
        return $this->hasMany('\App\Image');

     }

     ////////////////////////////////////////////////////
     // Establece la relacion con TAG
      public function tags() {
         // 1 tag esta presente en  muchos articulos  NOMBRE PLURAL
         return $this->belongsToMany('\App\Tag');

      }


}
