@extends('layout')

@section('title', 'Peliculas | '. $movie->name)

@section('content')
<div class="container">
	<div class="bg-white p-5 shadow rounded">
		<h1>{{ $movie->name }}</h1>
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