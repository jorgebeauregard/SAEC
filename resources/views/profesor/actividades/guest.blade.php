@extends('layouts.sidebar')

@section('title')
    <div>
        <i class= ""></i> Actividades
    </div>
@endsection

@section('description', 'Has ingresado exitosamente')

@section('content')
<div class="content">
	<div class="container-fluid">
	<form method="POST" action="/actividades/actualizar/{{$actividad->id}}">
        {{ csrf_field() }}
		<div class="row">
			<div class="col-md-12">
				<div class="card" style="background-color: #ff9800; color:white;">
					<div class="col-md-4">
						<h4>Grupo: {{$actividad->crn->nombre}}</h4>
					</div>
					<div class="col-md-4">
						<h4>Periodo: {{$actividad->crn->periodo->nombre}}</h4>
					</div>
				</div>
			</div>
		</div><!--end row -->

		<div class="row">
			<div class="col-md-12">
				<div class="card" style="background-color: #ff9800; color:white;">
					<div class="col-md-12">
						<h4>Equipos de la actividad</h4> 
					</div>
				</div>
			</div>
		</div><!--end row -->

        <div id="equipos">
            @foreach($actividad->equipos as $equipo)
                @if($equipo->profesor_id == Auth::user()->profesor[0]->id)
                <div class="col-md-4">
                        <div class="card">
                            <div class="card-header" data-background-color="blue">
                                <h4 class="title"><a href="/actividades/{{$actividad->id}}/equipos/{{$equipo->id}}">Equipo {{ $equipo->numero_equipo }}</a></h4>
                                <p class="category">Contraseña: {{$equipo->contrasena}}</p>
                            </div>
                            <div class="card-content table-responsive">
                            @if(count($equipo->alumnos) > 0)
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>Matrícula</th>
                                        <th>Nombre</th>
                                        <th>Evaluar</th>
                                    </thead>
                                    <tbody>
                                    @foreach($equipo->alumnos as $alumno)
                                        <tr>
                                            <td>{{$alumno->matricula}}</td>
                                            <td>{{$alumno->nombre.' '.$alumno->apellido_paterno}}</td></td>
                                            @if($actividad->profesor_respuestas->where('evaluado_id', $alumno->id)->count() > 0)
                                                <td><button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a></td>
                                            @else
                                                <td><a href="/actividades/{{$actividad->id}}/alumnos/{{$alumno->id}}" type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                            @endif
                                            
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="col-md-12">
                                    <h5>Aún no hay alumnos en este equipo</h5>
                                </div>
                            @endif

                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    </div><!--end container-fluid -->
</div><!--end content -->
@endsection