@extends('layouts.app')

@section('content')
<h1>Formulário de Exclusão de Mensagens</h1>
<hr>
<form action="/atividades/{{$atividade->id}}" method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <p>Deseja mesmo excluir {{$atividade->title}} ?</p>
    <input type="submit" value="Deletar">
</form>
<br>
<br>
<br>
<a href="/atividades/">Mostar Mensagem</a>
@endsection