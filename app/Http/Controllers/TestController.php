<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

use App\Http\Requests;

class TestController extends Controller
{
 public function view($id) {

    $article = Article::find($id){
/*
    $article->category;
    $article->user;
    $article->tags//;
//   dd($id);
*/
  //     dd($article);
dd($id);
 }

}
