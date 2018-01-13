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
					<div class = "card">
						<div class="card-header" data-background-color="green">
							<h4 class="title">Editar actividad</h4>
						</div>
						<div class = "card-content">
							<form>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group label-floating">
											<label class="control-label">Nombre de la actividad</label>
											<input type="text" class="form-control" name="nombre" value="{{$actividad->nombre}}" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group label-floating">
											<label class="control-label">Descripción</label>
											<input type="text" class="form-control" name="descripcion" value="{{$actividad->descripcion}}" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group label-floating">
											<label class="control-label">Fecha finalización</label>
											<input type="date" class="form-control" name="fecha_limite" value="{{$actividad->fecha_limite->toDateString()}}" required>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group label-floating">
											<label class="control-label">Número de equipos</label>
											<input type="number" name="num_equipos" min="1" max="15" value="{{count($actividad->equipos)}}" required>
										</div>
									</div>
								</div>

								
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

		@include('profesor.equipos.index')

		<div class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Actualizar actividad</button>
				</form>
			</div>
		</div>
		</form>
    </div><!--end container-fluid -->
</div><!--end content -->
@endsection