@extends('layouts.sidebar')

@section('title')
    <div>
        <i class= ""></i> Grupos
    </div>
@endsection

@section('description', 'Has ingresado exitosamente')

@section('content')
<div class="content">
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
				<div class="card" style="background-color: #ff9800; color:white;">
					<div class="col-md-3">
						<h3>Materia: {{$grupo->materia->nombre}}</h3>
					</div>	
					<div class="col-md-3">
						<h3>Clave: {{$grupo->materia->clave}}</h3>
					</div>
					<div class="col-md-3">
						<h3>Periodo: {{$grupo->periodo->nombre}}</h3>
					</div>
					<div class="col-md-3">
						<h3>Grupo: {{$grupo->grupo}}</h3>
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
	                    <table class="table">
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

		@include('profesor.grupos.student_tables');

	</div>
</div>

    <script>
        function myFunction() {
          var input, filter, table, tr, td, i;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");

          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
              if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            } 
          }
        }
</script>

<script>
    function showhide(id) {
        var e = document.getElementById(id);
        e.style.display = (e.style.display == 'block') ? 'none' : 'block';
    }

    function deleteStudent(grupo_id, alumno_id){
        $.get( ("/eliminarAlumno?" + "grupo=" + grupo_id + "&alumno_id=" + alumno_id,
            function(data, status){
                console.log("/eliminarAlumno?" + "grupo=" + grupo_id + "&alumno_id=" + alumno_id);
                console.log(data);
                $('#tables').empty();
                $('#tables').html(data);
            }
        );
    }
</script>



@endsection