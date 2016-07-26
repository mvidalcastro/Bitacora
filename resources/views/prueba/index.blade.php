<!DOCTYPE html>
    <head>
      <html lang="es">
      <meta =charset="URF-8">
      <title>{{$aux_article->title}}</title>
      <link rel="stylesheet" type ="text/css" href="{{ asset('/css/general.css')}}" >
    </head>
    <body>
      <h1> {{ $aux_article->title }} </h1>
     <hr>
     {{ $aux_article->content }}
     <hr>
     {{ $aux_article->user->name }} | {{ $aux_article->category->name }}


     @foreach ($aux_article->tags as $tag)
     {{ $tag->name }}
     @endforeach

    </body>
</html>
