<h1>Mensagem{{$mensagens->id}}</h1>
<hr>
<p><b>Título:</b>{{$mensagens->titulo}}</p>
<p><b>Autor:</b>{{$mensagens->autor}}</p>
<p><b>Mensagens:</b>{{$mensagens->mensagem}}</p>
<br>
<a href="/mensagens/{{$mensagens->id}}/edit">editar</a>

<br>
<a href="/mensagens">Mostar Mensagem</a>
<br>
<a href="/mensagens/{{$mensagens->id}}/delete">Deletar Mensagem</a>
