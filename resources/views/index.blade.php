@extends('layout.layout')
@section('title', 'Inicio')
@section('content')    
      @foreach ($post as $item)
      <div class="card mt-5">
        <div class="card-header">
          Postagem
        </div>
        <div class="card-body">
          <h5 class="card-title" name="titulo">{{$item->titulo}}</h5>
          <p class="card-text" name="conteudo">{{$item->conteudo}}</p>
          <a href="{{route('post.edit', $item->id)}}" class="btn btn-primary">Editar</a>
        </div>
      </div>
      @endforeach
@endsection