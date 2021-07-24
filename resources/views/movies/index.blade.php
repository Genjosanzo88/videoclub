@extends('layout')

@section('title', 'Peliculas')

@section('content')
<div class="container">
	<p class="lead text-secondary">Películas</p>
	<ul class="list-group">
		@forelse ($movies as $movie)
			<li class="list-group-item border-0 mb-3 shadow-sm">
				<a
					class="d-flex text-secondary justify-content-between align-items-center"
					href="{{ route('movies.show', $movie) }}"
				>
					<span class="font-weight-bold">
						{{ $movie->name }}
					</span>
					<span class="text-black-50">
						{{ $movie->release_date }}
					</span>
					<span class="text-black-50">
						{{ $movie->quantity }}
					</span>
				</a>
			</li>
		@empty
			<li class="list-group-item border-0 mb-3 shadow-sm">
				No hay peliculas para mostrar
			</li>
		@endforelse

		{{ $movies->links() }}
	</ul>
</div>
@endsection