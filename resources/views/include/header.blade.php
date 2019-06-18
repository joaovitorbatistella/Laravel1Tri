<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="/">Gerenciador de Atividades</a>
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="/home"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
			</li>
			

			<li class="nav-item">
				<a class="nav-link" href="/atividades" id="help" aria-haspopup="true" aria-expanded="false">Listar Atividades</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/atividades/create" id="help" aria-haspopup="true" aria-expanded="false">Criar Atividades</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/mensagens" id="help" aria-haspopup="true" aria-expanded="false">Listar Mensagens</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/mensagens/create" id="help" aria-haspopup="true" aria-expanded="false">Criar Mensagens</a>
			</li>
		</ul>

		<!-- Right Side Of Navbar -->
		<ul class="navbar-nav ml-auto">
			<!-- Authentication Links -->
			@guest
			<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
			<!-- <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li> -->
			@else
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>

				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ route('logout') }}"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</div>
		</li>
		@endguest
		</ul>
	</div>
</nav>