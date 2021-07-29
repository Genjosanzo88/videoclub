@extends('layout')

@section('title', 'Peliculas | '. $movie->name)

@section('content')
<div class="container">
	<div class="bg-white p-5 shadow rounded">
		<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4 mb-0">{{ $movie->name }}</h1>
		<a class="btn btn-primary"
			href="#"
		>Alquilar</a>
	</div>

		<p class="text-secondary">
			{{ $movie->description }}
		</p>
		<p class="text-black-50">
			{{ $movie->release_date }}
		</p>
		<div class="d-flex justify-content-between align-items-center">
			<a href="{{ route('movies.index') }}">
				Volver
			</a>
		</div>
	</div>
</div>
@endsection