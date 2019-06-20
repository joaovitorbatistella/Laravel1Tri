@extends('layouts.app')

@section('content')
<h1>Formulário de Cadastro de Mensagens</h1>
<hr>
<form action="/mensagens" method="post">
    {{ csrf_field() }}
    Título:            <input type="text" name="titulo"> <br>
    Autor:         <input type="text" name="autor"> <br>
    Mensagem:            <input type="text" name="mensagem"> <br>

    Atividade:  <select name="atividade_id">
                @foreach($listaAtividades as $atividade)
                    <option value="{{$atividade->id}}">{{$atividade->title}}</option>
                @endforeach
                </select>
    <input type="submit" value="Salvar">
</form>
<br>
<br>
<br>
<a href="/mensagens/">Mostar Mensagem</a>
@endsection