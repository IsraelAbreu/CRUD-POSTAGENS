@extends('layout.layout')
@section('content')
  <form action="{{route('post.store')}}" method="POST">
    @csrf
    <div class="mb-3 mt-5">
      <label for="exampleFormControlInput1" class="form-label">Titulo</label>
      <input type="text" class="form-control" name="titulo" placeholder="Meu Primeiro Post">
    </div>
    <div class="mb-3">
      <label class="form-label">Conteúdo</label>
      <textarea class="form-control" rows="3" name="conteudo"></textarea>
    </div>
    <button class="btn btn-primary" type="submit">Enviar Post</button>
  </form>
@endsection