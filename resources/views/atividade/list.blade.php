<h1>Lista de Atividades</h1>
<hr>
@foreach($atividades as $a)
	<h3>{{$a->scheduledto}}</h3>
	<p>{{$a->title}}</p>
	<p>{{$a->description}}</p>
	<br>
@endforeach


<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->