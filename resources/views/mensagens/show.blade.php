<h1>Mensagem{{$mensagens->id}}</h1>
<hr>
<h3><b>Título:</b>{{$mensagens->titulo}}</h3>
<h3><b>Autor:</b>{{$mensagens->autor}}</h3>
<h3><b>Mensagens:</b>{{$mensagens->mensagem}}</h3>
<br>
<a href="/mensagens/{{$mensagens->id}}/edit">editar</a>