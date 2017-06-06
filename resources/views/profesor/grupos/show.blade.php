@extends('layouts.sidebar')

@section('title')
    <div>
        <i class= ""></i> Grupos
    </div>
@endsection

@section('description', 'Has ingresado exitosamente')

@section('content')
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
@endsection