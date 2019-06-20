@extends('layouts.app')

@section('content')
<h1>Mensagem {{$mensagens->id}} </h1>
<hr>
<h3><b>Ref. Ativ.:</b> {{$mensagens->atividade_id}} </h3>
<br>
<h3><b>ID:</b>{{$mensagens->id}}</h3>
<h3><b>Autor:</b>{{$mensagens->autor}}</h3>
<h3><b>Título:</b>{{$mensagens->titulo}}
<h3><b>Mensagens:</b>{{$mensagens->mensagem}}</h3>
<h3><b>Criada em:</b>{{$mensagens->created_at}}</h3>
<h3><b>Atualizada em:</b>{{$mensagens->update_at}}</h3>
<br>
<a href="/mensagens/{{$mensagens->id}}/edit">editar</a>

<br>
<a href="/mensagens">Mostar Mensagem</a>
<br>
<a href="/mensagens/{{$mensagens->id}}/delete">Deletar Mensagem</a>
