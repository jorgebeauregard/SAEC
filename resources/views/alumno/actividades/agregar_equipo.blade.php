@extends('layouts.sidebar')

@section('title')
    <div>
        {{$actividad->nombre}}

    </div>
@endsection

@section('description', 'Has ingresado exitosamente')

@section('content')
<div class="content">
	<div class="container-fluid">
		@if($flash = session('message'))
			<div class="row">
				<div class="alert alert-danger">
					<span>{{ $flash }}</span>
				</div>
			</div>
		@endif

		<div class="row">
			@foreach($actividad->equipos as $equipo)
			<div class="col-md-3">
				<div class = "card">
					<div class="card-header" data-background-color="blue">
						<h4 class="title">Equipo {{$equipo->numero_equipo}}</h4>
					</div>
					<div class = "card-content">
						<h3>Integrantes:</h3>
						@foreach($equipo->alumnos as $alumno)
							<p>{{$alumno->nombre}} {{$alumno->apellido_paterno}}</p>
						@endforeach
						<form method="POST" action="/actividades/unirse/{{$actividad->id}}/{{$equipo->id}}">
						{{ csrf_field() }}
							<button type="submit" class="btn btn-success">Unirse al equipo</button>
						</form>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection