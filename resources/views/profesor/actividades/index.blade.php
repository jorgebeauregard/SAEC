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
			<div class="col-md-4">
				<a type="button" class="btn btn-success" href="/crear/actividad">Crear actividad</a>
			</div>
		</div>

		<br>
		@if(count($actividades2))
		<div class="row">
			@foreach($actividades2 as $actividad)
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
						<div class="card-header" data-background-color="blue">
							<i class="material-icons">insert_chart</i>
						</div>
						<div class="card-content">
							<p class="category">Actividad</p>
							<br>
							<br>
							<h3 class="title"> {{$actividad['nombre']}} </h3>
						</div>
						<div class="card-footer">
							<div class="stats">
							@if( $logged->actividades->find($actividad['id'])->pivot->completada == 0)
								<i class="material-icons text-danger">warning</i> <a href="/actividades/{{$actividad['id']}}">Coevaluaci&oacuten pendiente</a>
							@else
								<i class="material-icons text-success">check_circle</i> Coevaluaciones completas
							@endif
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div> <!--end row -->
		@endif

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
								<th>Ver Detalles</th>
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
									<td><a href="/actividades/editar/{{$actividad->id}}" type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
	                            </tr>
	                        @endforeach
	                        </tbody>
	                    </table>

	                </div>
	            </div>
			</div>
		</div> <!--end row -->

	</div><!--end contaner fluid -->
</div><!--end content-->

@endsection