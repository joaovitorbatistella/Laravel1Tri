<h1>Lista de Mensagens<h1>
<hr>
@foreach($mensagens as $m)
    <p><a href="/mensagens/{{$m->id}}">{{$m->titulo}}</a></p>
    <p>{{$m->titulo}}</p>
    <p>{{$m->autor}}</p>
    <p>{{$m->mensagem}}</p>
    <br>
@endforeach