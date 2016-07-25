<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  // nombre de la tabla asociada al modelo
  protected $table = 'images';
  // Campos que se traen y muestran objetos JSON
  protected $fillable =['name', 'article_id'];
    //

    ////////////////////////////////////////////////////
    // Establece la relacion con Article
     public function article() {
        // 1 imagen pertence a solo 1 articulo  NOMBRE SINGULAR
        return $this->belongsTo('\App\Article');

     }


}
