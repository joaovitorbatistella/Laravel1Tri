<h1>Formulário de Exclusão de Mensagens</h1>
<hr>
<form action="/mensagens/{{$mensagens->id}}" method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <h1>Deseja mesmo excluir {{$mensagens->titulo}} ?</h1>
    <input type="submit" value="Deletar">
</form>
<br>
<br>
<br>
<a href="/mensagens/">Mostar Mensagem</a>
