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
	<form method="POST" action="/crear/actividad">
        {{ csrf_field() }}
		<div class="row">
			<div class="col-md-12">
				<div class = "card">
					<div class="card-header" data-background-color="green">
						<h4 class="title">Crear actividad</h4>
					</div>
					<div class = "card-content">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label">Nombre de la actividad</label>
										<input type="text" class="form-control" name="nombre" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label">Descripción</label>
										<input type="text" class="form-control" name="descripcion" required>
									</div>
								</div>
							</div>
							<br>
							<span>Fecha de finalizacion</span>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label"></label>
										<input type="date" class="form-control" name="fecha_limite" required>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label">Grupo</label>
										@if(count($grupos))
										 <select name="grupo_id" class="form-control">
										 	@foreach($grupos as $grupo)
												<option value="{{$grupo->id}}">{{$grupo->nombre}}</option>
											@endforeach
										</select>
										@else
											<h5>Primero <a href="/grupos">crea</a> un grupo.</h5>
										@endif
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating">
										<label class="control-label">Número de equipos</label>
										<input type="number" class="form-control" name="num_equipos" min="1" max="15" value="1">
									</div>
								</div>
							</div>

							<div class="row">
								<h4>Competencias</h4>
								@foreach($competencias as $competencia)
									<div class="col-md-4">
										<div class="form-group label-floating">
											<label class="control-label">{{$competencia->nombre}}</label>
											<input type="checkbox" class="form-control" name="competencia_{{$competencia->id}}" value="1">
										</div>
									</div>
								@endforeach
							</div>
							

							

					</div>
				</div>
			</div>
		</div><!--end row -->

		<div class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Crear actividad</button>
				</form>
			</div>
		</div>
		</form>
    </div><!--end container-fluid -->
</div><!--end content -->




@endsection