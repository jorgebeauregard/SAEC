@extends('layouts.sidebar')

@section('title')
    <div>
        <i class= ""></i> Grupos
    </div>
@endsection

@section('description', 'Has ingresado exitosamente')

@section('content')
<span id="grupo_id" style="display: none;">{{$grupo->id}}</span>
<div class="content">
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
				<div class="card" style="background-color: #ff9800; color:white;">
					<div class="col-md-4">
						<h3>Grupo: {{$grupo->nombre}}</h3>
					</div>
					<div class="col-md-4">
						<h3>Periodo: {{$grupo->periodo->nombre}}</h3>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
	            <div class="card">
	                <div class="card-header" data-background-color="blue">
	                    <h4 class="title">Actividades</h4>
	                     <p class="category">Aquí se muestra el estado de las actividades realizadas</p>
	                </div>
	                <div class="card-content table-responsive">
	                    <table class="table" id="data-table">
	                        <thead class="text-primary">
	                            <th>Actividad</th>
	                            <th>Finalizada</th>
	                            <th>Contestada</th>
								<th>Editar</th>
	                        </thead>
	                        <tbody>
	                        @foreach($actividades as $actividad)
	                            <tr>
	                            	<td>{{$actividad->nombre}}</td>
	                            	@if($actividad->fecha_limite->isPast())
		                                <td style = "color:red;">
		                                {{$actividad->fecha_limite->toDayDateTimeString()}}</td>
		                               	</td>
		                            @else
		                                <td style = "color:green;">
		                                {{$actividad->fecha_limite->toDayDateTimeString()}}</td>
		                               	</td>		                            
	                               	@endif
	                               	<td>
	                               		@if($actividad->pivot->completada)
	                               			<a type="button" class="btn btn-success" disabled><i class="fa fa-check"></i></a>
	                               		@else
	                               			<a href="/actividades/{{$actividad->id}}" type="button" class="btn btn-danger" ><i class="fa fa-times"></i></a>
	                               		@endif
	                               	</td>
									<td><a href="/actividades/editar/{{$actividad->id}}" type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
	                            </tr>
	                        @endforeach
	                        </tbody>
	                    </table>
	                </div>
	            </div>
			</div>
		</div> <!--end row -->

		<div id="tables">
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="card-header" data-background-color="green">
							<h4 class="title">Alumnos en el grupo</h4>
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
										<tr>
											<td>{{$alumno->apellido_paterno}}</td>
											<td>{{$alumno->nombre}}</td>
											<td>{{$alumno->matricula}}</td>
											<td>{{$alumno->plan->nombre}}</td>
											<td><a type="button" class="btn btn-danger" onclick="deleteStudent({{$alumno->id}}, {{$grupo->id}})"><i class="fa fa-times"></i></a></td>
										</tr>
									@endforeach
							</table>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="card">
						<div class="card-header" data-background-color="purple">
							<h4 class="title">Agregar alumnos al grupo</h4>
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
									<tr>
										<td>{{$todo->apellido_paterno}}</td>
										<td>{{$todo->nombre}}</td>
										<td>{{$todo->matricula}}</td>
										<td>{{$todo->plan->nombre}}</td>
										<td><a type="button" class="btn btn-success" onclick="addStudent({{$todo->id}}, {{$grupo->id}})"><i class="fa fa-check"></i></a></td>
									</tr>
								@endforeach

							</table>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')
<script>
	var add_tab;
	var del_tab;
	$(document).ready(function() {
		add_tab = $('#add-table').DataTable();
		del_tab = $('#delete-table').DataTable();
	} );

	function deleteStudent(alumno_id, grupo_id){
		$.get( ("/eliminarAlumno?" + "alumno_id=" + alumno_id + "&grupo_id=" + grupo_id),
			function(data, status){
				$('#tables').empty();
				$('#tables').html(data);
				add_tab = $('#add-table').DataTable();
				del_tab = $('#delete-table').DataTable();
			}
		);
	}

	function addStudent(alumno_id, grupo_id){
		$.get( ("/agregarAlumno?" + "alumno_id=" + alumno_id + "&grupo_id=" + grupo_id),
			function(data, status){
				$('#tables').empty();
				$('#tables').html(data);
				add_tab = $('#add-table').DataTable();
				del_tab = $('#delete-table').DataTable();
			}
		);
	}
</script>
@endsection