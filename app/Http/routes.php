<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
  Tipos GET, POST, PUT, DELETE
*/
Route::get('/', function () {
    return view('welcome');
//    return view('prueba.index');
//    return view('prueba/index');
});

/*  ejemplo de propiedades de las rutas
Route::get('/articles}', [
 'as'   => 'articles',
 'uses' => 'userControllervie'
]
});
*/

Route::group (['prefix' => 'articles'], function() {

  Route::get('/view/{id}', [
    'uses' => 'TestController@view',
    'as'    => 'articlesView'
  ]);

});


Route::group (['prefix' => 'admin'] , function() {
  Route::resource('users','UsersController');

});

/*
// Grupos de rutas
Route::group (['prefix' => 'articles'], function() {

  Route::get('/view/{article?}', function ($article = "vacio") {
  //
   echo $article;
 });

});
*/
/*
Route::get('/articles/{nombre?}', function ($nombre="Sin Nombre") {
    echo "El valor de la variable nombre es ". $nombre;
});
*/
