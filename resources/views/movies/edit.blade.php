@extends('layout')

@section('title', 'Alquilar pelicula')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			<form class="bg-white py-3 px-4 shadow rounded"
				method="POST"
				action="{{ route('movies.update', $movie->id) }}">
				@method('PATCH')
				<h1 class="display-4">
					Alquilar {{ $movie->name }}
				</h1>
				@if(session()->has('info'))
					<div class="alert alert-success">{{ session('info') }}</div>
				@endif
				<hr>
				@csrf
				<div class="form-group">
					<label for="nombre">Id</label>
					<input class="form-control bg-light shadow-sm @error('id') is-invalid @else border-0 @enderror"
						id="id"
						type="text"
						name="id"
						value="{{ old('id', $movie->id) }}"
					>
				</div>
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
						id="name"
						type="text"
						name="name"
						value="{{ old('name', $movie->name) }}"
					>
				</div>
				<div class="form-group">
					<label for="email">Año de publicación</label>
					<input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
						id="email"
						type="text"
						name="email"
						value="{{ old('email', $movie->release_date) }}"
					>
				</div>
				<div class="form-group">
					<label for="email">Cantidad disponible</label>
					<input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
						id="email"
						type="text"
						name="email"
						value="{{ old('email', $movie->quantity) }}"
					>
				</div>
				<button class="brn btn-primary btn-lg btn-block">Alquilar</button>
				<a class="btn btn-link btn-block" href="{{ route('movies.index') }}">
					Cancelar
				</a>
			</form>
		</div>
	</div>
</div>
@endsection