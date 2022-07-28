@extends('layout.layout')
@section('content')
  <form action="{{route('post.update', $post->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3 mt-5">
      <label class="form-label">Titulo</label>
      <input type="text" class="form-control" name="titulo" placeholder="Meu Primeiro Post" value="{{$post->titulo}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Conteúdo</label>
      <textarea class="form-control" rows="3" name="conteudo">{{$post->conteudo}}</textarea>
    </div>
    <button class="btn btn-primary" type="submit" style="width: 130px">Atualizar Post</button>
  </form>
  <form class="mt-1" action="{{route('post.destroy', $post->id)}}" method="POST">
    @csrf
    @method('delete')
    <button class="btn btn-danger" type="submit" style="width: 130px">Deletar Post</button>
  </form>
  
@endsection