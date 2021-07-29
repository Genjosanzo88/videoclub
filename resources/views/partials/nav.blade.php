<nav class="navbar navbar-light navbar-expand-sm bg-whitem shadow-sm">
	<div class="container">
		<a class="navbar-brand" href="{{ route('home') }}">
			Databele
		</a>
		<button class="navbar-toggler" type="button"
			data-toggle="collapse"
			data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent"
			aria-expanded="false"
			aria-label="{{ __('Toggle navigation') }}">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav nav-pills">
				<li class="nav-item">
					<a class="nav-link"
						href="{{ route('home') }}">@lang('Home')
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link"
						href="{{ route('movies.index') }}">@lang('Movies')
					</a>
				</li>
				@guest
					<li class="nav-item">
						<a class="nav-link"
							href="{{ route('login') }}">Login
						</a>
					</li>
				@else
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarDropdown" role="button">
							{{ auth()->user()->name }}<b class="caret"></b>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item"
							href="#" onclick="event.preventDefault();
								document.getElementById('logout-form').submit();"
							>Cerrar sesión
							</a>
						</div>
					</li>
				@endguest
			</ul>
		</div>
	</div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
