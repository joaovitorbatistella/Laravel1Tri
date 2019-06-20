@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="container">
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    </div>
    @endif
      @if (\Session::has('success'))
    <div class="container">
      <div class="alert alert-success">
         {{\Session::get('success')}}
      </div>
    </div>
    @endif

<h1>Formulário de Update de Mensagens</h1>
<hr>
<form action="/mensagens/{{$mensagens->id}}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    Título:            <input type="text" name="titulo" value="{{$mensagens->titulo}}"> <br>
    Autor:         <input type="text" name="autor" value="{{$mensagens->autor}}"> <br>
    Mensagem:         <input type="text" name="mensagem" value="{{$mensagens->mensagem}}"> <br>
    <input type="submit" value="Salvar">
</form>
<br>
<br>
<br>
<a href="/mensagens/">Mostar Mensagem</a>
@endsection