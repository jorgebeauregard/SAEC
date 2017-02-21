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
							<div class="card">
								<div class="card-content" data-background-color="blue">
									<h3 class="title">Matem&aacuteticas</h4>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="card">
								<div class="card-content">
									<h4 class="title">Actividad colaborativa de Integraci&oacuten por Partes</h4>
									<p class="category"><span class="text-danger"><i class="fa fa-times"></i></span><a href="{{ route('actividades/mate') }}"> Por completar.</a></p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">access_time</i> Acaba en 2 d&iacuteas
									</div>
								</div>

							</div>
						</div>			

						<div class="col-md-12">
							<div class="card">
								<div class="card-content">
									<h4 class="title">Actividad colaborativa de Sumas de Riemann</h4>
									<p class="category"><span class="text-success"><i class="fa fa-check"></i>   </span> Actividad completada.</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">alarm_on</i> No hay l&iacutemite
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="card">
								<div class="card-content">
									<h4 class="title">Actividad colaborativa de Series de Taylor</h4>
									<p class="category"><span class="text-success"><i class="fa fa-check"></i>   </span> Actividad completada.</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">alarm_on</i> No hay l&iacutemite
									</div>
								</div>
							</div>
						</div>


						<div class="col-md-12">
							<div class="card">
								<div class="card-content" data-background-color="orange">
									<h3 class="title">&Aacutelgebra lineal</h4>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="card">
								<div class="card-content">
									<h4 class="title">Actividad 1 (Encriptaci&oacuten por medio de matrices)</h4>
									<p class="category"><span class="text-danger"><i class="fa fa-times"></i></span><a href="{{ route('actividades/algebra') }}"> Por completar.</a></p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">access_time</i> Acaba en 2 d&iacuteas
									</div>
								</div>
							</div>
						</div>	
						<div class="col-md-12">
							<div class="card">
								<div class="card-content">
									<h4 class="title">Actividad 2 (Gauss Jordan)</h4>
									<p class="category"><span class="text-success"><i class="fa fa-check"></i>   </span> Actividad completada.</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">alarm_on</i> No hay l&iacutemite
									</div>
								</div>
							</div>
						</div>	
						<div class="col-md-12">
							<div class="card">
								<div class="card-content">
									<h4 class="title">Actividad 3 (Matrices de adyacencia)</h4>
									<p class="category"><span class="text-success"><i class="fa fa-check"></i>   </span> Actividad completada.</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">alarm_on</i> No hay l&iacutemite
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="card">
								<div class="card-content" data-background-color="blue">
									<h3 class="title">Bases de datos</h4>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="card">
								<div class="card-content">
									<h4 class="title">Tarea 1 - Normalizaci&oacuten</h4>
									<p class="category"><span class="text-danger"><i class="fa fa-times"></i></span><a href="{{ route('/home') }}"> Por completar.</a></p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">access_time</i> Acaba en 2 d&iacuteas
									</div>
								</div>
							</div>
						</div>	
						<div class="col-md-12">
							<div class="card">
								<div class="card-content">
									<h4 class="title">Tarea 2 - Base del hospital</h4>
									<p class="category"><span class="text-success"><i class="fa fa-check"></i>   </span> Actividad completada.</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">alarm_on</i> No hay l&iacutemite
									</div>
								</div>
							</div>
						</div>	
						<div class="col-md-12">
							<div class="card">
								<div class="card-content">
									<h4 class="title">Tarea 3 - Proyecto integrador</h4>
									<p class="category"><span class="text-success"><i class="fa fa-check"></i>   </span> Actividad completada.</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">alarm_on</i> No hay l&iacutemite
									</div>
								</div>
							</div>
						</div>	

						<div class="col-md-12">
							<div class="card">
								<div class="card-content" data-background-color="orange">
									<h3 class="title">Din&aacutemica</h4>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="card">
								<div class="card-content">
									<h4 class="title">Cuerpos r&iacutegidos en movimiento (Actividad colaborativa)</h4>
									<p class="category"><span class="text-danger"><i class="fa fa-times"></i></span><a href="{{ route('/home') }}"> Por completar.</a></p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">access_time</i> Acaba en 2 d&iacuteas
									</div>
								</div>
							</div>
						</div>	
						<div class="col-md-12">
							<div class="card">
								<div class="card-content">
									<h4 class="title">Resolver el problema 4 estableciendo sus condiciones cinem&aacuteticas y cin&eacuteticas (Problema retador)</h4>
									<p class="category"><span class="text-success"><i class="fa fa-check"></i>   </span> Actividad completada.</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">alarm_on</i> No hay l&iacutemite
									</div>
								</div>
							</div>
						</div>	
						<div class="col-md-12">
							<div class="card">
								<div class="card-content">
									<h4 class="title">Rotaci&oacute y traslaci&oacutenpura (Actividad colaborativa)</h4>
									<p class="category"><span class="text-success"><i class="fa fa-check"></i>   </span> Actividad completada.</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">alarm_on</i> No hay l&iacutemite
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>

@endsection