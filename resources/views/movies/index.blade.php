@extends('layout')

@section('title', 'Peliculas')

@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4 mb-0">Películas</h1>
	</div>
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Nombre</th>
	      <th scope="col">Año</th>
	      <th scope="col">Cantidad</th>
	      @auth
	      <th scope="col">Acciones</th>
	      @endauth
	    </tr>
	  </thead>
	  <tbody>
	  		@foreach($movies as $movie)
	  			<tr>
	  				<td><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->name }}</a></td>
	  				<td>{{ $movie->release_date }}</td>
	  				<td>{{ $movie->quantity }}</td>
	  				@auth
	  				@if($movie->quantity === 0)
	  				<td>
	  					<span class="btn btn-danger">No disponible</span>
  					</td>
	  				@else
	  				<td>
	  					<a class="btn btn-primary"
							href="{{ route('movies.edit', $movie->id) }}"
						>Alquilar</a>
					</td>
					@endif
					@endauth
	  			</tr>
	  		@endforeach
	  </tbody>
	</table>
</div>
@endsection
