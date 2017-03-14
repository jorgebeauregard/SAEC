@extends('layouts.sidebar')

@section('title')
    <div>
        <i class= ""></i> Materias
    </div>
@endsection

@section('description', 'Has ingresado exitosamente')

@section('content')

<div class="content">
	<div class="container-fluid">

		<div class="row">
			@foreach($actividades as $actividad)
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="card card-stats">
						<div class="card-header" data-background-color="blue">
							<i class="material-icons">insert_chart</i>
						</div>
						<div class="card-content">
							<p class="category">Actividad</p>
							<br>
							<br>
							<h3 class="title">{{ $actividad->nombre }}</h3>
						</div>
						<div class="card-footer">
							<div class="stats">
								<i class="material-icons text-danger">warning</i> <a href="{{ route('actividades.index') }}">Coevaluaci&oacuten pendiente</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header" data-background-color="blue">
						<i class="material-icons">developer_board</i>
					</div>
					<div class="card-content">
						<p class="category">Materia</p>
						<br>
						<br>
						<h3 class="title">Bases de Datos</h3>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons text-success">check_circle</i> Coevaluaciones completas
						</div>
					</div>
				</div>
			</div>

		</div> <!--end row -->

		<div class="row">
			<div class="col-md-6">

				<div class="card">
					<div class="card-content" data-background-color="blue">
						<h3 class="title">Coevaluaciones completadas</h4>
					</div>
				</div>

				<div class="col-md-12">
					<div class="card">
						<div class="card-content">
							<h4 class="title">Actividad colaborativa de Integraci&oacute;n por Partes</h4>
							<p class="category"><span class="text-danger"><i class="fa fa-times"></i></span><a href="{{ route('actividades/mate') }}"> Por completar.</a></p>
						</div>
						<div class="card-footer">
							<div class="stats">
								<i class="material-icons">access_time</i> Acaba en 2 d&iacute;as
							</div>
						</div>
					</div>
				</div> <!--end col md 12 -->

				<div class="col-md-12">
					<div class="card">
						<div class="card-content">
							<h4 class="title">Actividad colaborativa de Sumas de Riemann</h4>
							<p class="category"><span class="text-success"><i class="fa fa-check"></i>   </span> Actividad completada.</p>
						</div>
						<div class="card-footer">
							<div class="stats">
								<i class="material-icons">alarm_on</i> No hay l&iacute;mite
							</div>
						</div>
					</div>
				</div> <!--end col md 12 -->

			</div><!--end col md 6 -->

			
			<div class="col-md-6">

				<div class="card">
					<div class="card-content" data-background-color="tecorange">
						<h3 class="title">Coevaluaciones pendientes</h4>
					</div>
				</div>

				<div class="col-md-12">
					<div class="card">
						<div class="card-content">
							<h4 class="title">Actividad colaborativa de Integraci&oacute;n por Partes</h4>
							<p class="category"><span class="text-danger"><i class="fa fa-times"></i></span><a href="{{ route('actividades/mate') }}"> Por completar.</a></p>
						</div>
						<div class="card-footer">
							<div class="stats">
								<i class="material-icons">access_time</i> Acaba en 2 d&iacute;as
							</div>
						</div>
					</div>
				</div> <!--end col md 12 -->

				<div class="col-md-12">
					<div class="card">
						<div class="card-content">
							<h4 class="title">Actividad colaborativa de Sumas de Riemann</h4>
							<p class="category"><span class="text-success"><i class="fa fa-check"></i>   </span> Actividad completada.</p>
						</div>
						<div class="card-footer">
							<div class="stats">
								<i class="material-icons">alarm_on</i> No hay l&iacute;mite
							</div>
						</div>
					</div>
				</div> <!--end col md 12 -->

			</div><!--end col md 6 -->

		</div> <!--end row -->

			

		

	</div><!--end contaner fluid -->
</div><!--end content-->

@endsection