<h1>Lista de Mensagens<h1>
<hr>
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

@foreach($mensagens as $m)
    <p><a href="/mensagens/{{$m->id}}">{{$m->titulo}}</a></p>
    <p>{{$m->autor}}</p>
    <p>{{$m->mensagem}}</p>
    <br>
@endforeach

@if(\Session::has('sucess'))
	<div class="container">
		<div class="alert alert-sucess">
			{{\Session::get('sucess')}}
		</div>
	</div>
@endif
<br>
<br>
<br>
<a href="/mensagens/create">Criar Mensagem</a>
<br>
<a href="/mensagens/">Mostar Mensagem</a>