@extends('layouts.app')

@section('content')

<h1>Lista de Atividades</h1>
<hr>
<!-- EXIBE MENSAGENS DE ERROS -->
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

@foreach($atividades as $a)
	<h3>{{$a->scheduledto}}</h3>
	<p><a href="/atividades/{{$a->id}}">{{$a->title}}</a></p>
	<p>{{$a->description}}</p>
	<br>
@endforeach

{{ $atividades->links() }}

@if(\Session::has('sucess'))
	<div class="container">
		<div class="alert alert-sucess">
			{{\Session::get('sucess')}}
		</div>
	</div>
@endif
@if(Auth::check())
<a href="/atividades/create">Criar Mensagem</a>
@endif


@endsection


<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->
