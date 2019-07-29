@extends('layouts.app')

@section('content')

<form action="\teste" method="GET">
<label>TEXTO</label>
<input type="text" value="" name="texto">

<input type=submit value="GERAR PDF">
</form>


@endsection