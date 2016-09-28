@extends('admin.template.main')

@section('title', 'categoria')

@section('content')
<a href="{{ route("admin.categories.create") }}" class="btn btn-info"> Registrar Nueva Categoria </a> <hr>
<table class="table table-striped">
  <thead>
    <th> Id</th>
    <th> Nombre</th>
    <th> Acción</th>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
       <td>{{ $category->id}} </td>
       <td>{{ $category->name}} </td>
        <td> <a href="#" class="btn btn-warning">  <span class ="glyphicon glyphicon-wrench" aria-hidden ="true" > </span>  </a>
             <a href="#"  onClick =" return confirm('¿Seguro que desea eliminar el usuario?')"  class="btn btn-danger"> <span class ="glyphicon glyphicon-remove-circle" aria-hidden ="true" > </span> </a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
