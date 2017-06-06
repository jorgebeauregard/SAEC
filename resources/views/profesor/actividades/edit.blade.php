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
				<div class="card" style="background-color: #ff9800; color:white;">
					<div class="col-md-3">
						<h4>Materia: {{$actividad->crn->materia->nombre}}</h4>
					</div>	
					<div class="col-md-3">
						<h4>Clave: {{$actividad->crn->materia->clave}}</h4>
					</div>
					<div class="col-md-3">
						<h4>Periodo: {{$actividad->crn->periodo->nombre}}</h4>
					</div>
					<div class="col-md-3">
						<h4>Grupo: {{$actividad->crn->grupo}}</h4>
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
											<input type="text" class="form-control" text="hola">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group label-floating">
											<label class="control-label">Descripción</label>
											<input type="text" class="form-control" >
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group label-floating">
											<label class="control-label">Fecha de finalización</label>
											<input type="date" class="form-control" >
										</div>
									</div>
								</div>
						</div>
					</div>
				</div>
		</div><!--end row -->
		<div class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Actualizar actividad</button>
				</form>
			</div>
		</div>
    </div><!--end container-fluid -->
</div><!--end content -->




@endsection