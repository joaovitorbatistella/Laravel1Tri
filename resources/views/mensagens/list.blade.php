<h1>Lista de Mensagens<h1>
<hr>
@foreach($mensagens as $m)
    <h3>{{$m->scheduledto}}</h3>
    <p><a href="/mensagens/{{$m->id}}">{{$m->title}}</a></p>
    <p>{{$m->autor}}</p>
    <p>{{$m->Created_at}}</p>
    <p>{{$m->Updated_at}}</p>
    <br>
@endforeach