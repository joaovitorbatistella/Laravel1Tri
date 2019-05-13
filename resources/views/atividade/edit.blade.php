
<h1>Formulário de Cadastro de Atividades</h1>
<hr>
@if ($errors->any())
	<div class="row">
	  <div class="alert alert-danger">
	    <ul>
	      @foreach ($errors->all() as $error)
	      <li>{{ $error }}</li>
	      @endforeach
	    </ul>
	  </div>
	</div>
 @endif
<form action="/atividades/{{$atividade->id}}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    Título:            <input type="text" name="title" value="{{$atividade->title}}"> <br>
    Descrição:         <input type="text" name="description" value="{{$atividade->description}}"> <br>
    Agendado para:     <input type="datetime-local" name="scheduledto" value="{{Carbon\Carbon::parse($atividade->scheduledto)->format('Y-m-d\TH:i:s')}}"> <br>
    <input type="submit" value="Salvar">
</form>
