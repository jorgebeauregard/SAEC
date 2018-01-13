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

		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">
					<a type="button" class="btn btn-info" href="/actividades/editar/{{$actividad->id}}">Regresar</a>
				</div>
				<div class="card" style="background-color: #ff9800; color:white;">
					<div class="col-md-4">
						<h4>Equipo: {{$equipo->numero_equipo}}</h4>
					</div>
					<div class="col-md-4">
						<h4>Actividad: {{$actividad->nombre}}</h4>
					</div>
				</div>
			</div>
		</div><!--end row -->
		<div class="row">
			<div class="col-md-4">
				
			</div>
		</div>

		<div id="tables">
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="card-header" data-background-color="green">
							<h4 class="title">Alumnos en el equipo</h4>
						</div>

						<div class="content table-responsive" style="padding: 10px">
							<table id="add-table" class="table table-striped">
								<thead class="text-primary">
									<th>Apellido Paterno</th>
									<th>Nombre</th>
									<th>Matrícula</th>
									<th>Plan</th>
									<th>Eliminar</th>
								</thead>
									@foreach($alumnos as $alumno)
										<tr id="team_{{$alumno->id}}">
											<td>{{$alumno->apellido_paterno}}</td>
											<td>{{$alumno->nombre}}</td>
											<td>{{$alumno->matricula}}</td>
											<td>{{$alumno->plan->nombre}}</td>
											<td><a type="button" class="btn btn-danger" onclick="deleteStudent({{$alumno->id}}, {{$equipo->id}}, {{$actividad->id}})"><i class="fa fa-times"></i></a></td>
										</tr>
									@endforeach
							</table>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="card">
						<div class="card-header" data-background-color="purple">
							<h4 class="title">Agregar alumno al equipo</h4>
						</div>

						<div class="content table-responsive" style="padding: 10px">
							<table id="delete-table" class="table table-striped">
								<thead class="text-primary">
									<th>Apellido Paterno</th>
									<th>Nombre</th>
									<th>Matr&iacute;cula</th>
									<th>Plan</th>
									<th>Agregar</th>
								</thead>
								@foreach($todos as $todo)
									<tr id="pool_{{$todo->id}}">
										<td>{{$todo->apellido_paterno}}</td>
										<td>{{$todo->nombre}}</td>
										<td>{{$todo->matricula}}</td>
										<td>{{$todo->plan->nombre}}</td>
										<td><a type="button" class="btn btn-success" onclick="addStudent({{$todo->id}}, {{$equipo->id}}, {{$actividad->id}})"><i class="fa fa-check"></i></a></td>
									</tr>
								@endforeach

							</table>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div><!--end contaner fluid -->
</div><!--end content-->
@endsection

@section('scripts')
<script>
	var add_tab;
	var del_tab;
	$(document).ready(function() {
		add_tab = $('#add-table').DataTable();
		del_tab = $('#delete-table').DataTable();
	});

	function deleteStudent(alumno_id, equipo_id, actividad_id){
		$.get( ("/actividades/equipos/" + equipo_id + "/eliminarAlumno?" + "alumno_id=" + alumno_id + "&equipo_id=" + equipo_id + "&actividad_id=" + actividad_id),
			function(data, status){
				$('#team_' + alumno_id).remove();
				$('#delete-table').append('<tr id=\"pool_' + alumno_id + '\"><td>' + data.apellido_paterno + '</td><td>' + data.nombre + '</td><td>' + data.matricula + '</td><td>' + data.plan.nombre + '</td><td><a type=\"button\" class=\"btn btn-success\" onclick=\"addStudent(' + alumno_id + ',' + equipo_id + ')\"><i class=\"fa fa-check\"></i></a></td></tr>');
			}
		);
	}

	function addStudent(alumno_id, equipo_id, actividad_id){
		$.get( ("/actividades/equipos/" + equipo_id + "/agregarAlumno?" + "alumno_id=" + alumno_id + "&equipo_id=" + equipo_id + "&actividad_id=" + actividad_id),
			function(data, status){
				$('#pool_' + alumno_id).remove();
				$('#add-table').append('<tr id=\"pool_' + alumno_id + '\"><td>' + data.apellido_paterno + '</td><td>' + data.nombre + '</td><td>' + data.matricula + '</td><td>' + data.plan.nombre + '</td><td><a type=\"button\" class=\"btn btn-danger\" onclick=\"deleteStudent('+ alumno_id + ',' + equipo_id + ')\"><i class=\"fa fa-times\"></i></a></td></tr>');
			}
		);
	}
</script>
@endsection