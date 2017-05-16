@extends('layouts.sidebar')

@section('title')
    <div>
        <i class= ""></i> Actividad
    </div>
@endsection

@section('description', 'Has ingresado exitosamente')

@section('content')

<div class="content">
	<div class="container-fluid">

		<div class="row">
				<div class="col-md-12">
					<div class="card card-stats">
						<div class="card-header" data-background-color="blue">
							<i class="material-icons">bubble_chart</i>
						</div>
						<div class="card-content">
							<p class="category">Actividad</p>
							<br>
							<br>
							<h3 class="title"> Nombre</h3>
						</div>
						<div class="card-footer">
							<div class="stats">
								<p class="category">Fecha de finalización</p>
							</div>
						</div>
					</div>
				</div>
		</div> <!--end row -->

		<div class="row">
			<div class="col-md-12">
	            <div class="card">
	                <div class="card-header" data-background-color="blue">
	                    <h4 class="title">Alumnos</h4>
	                     <p class="category">Aquí se muestra el estado de respuesta de los alumnos en la actividad</p>
	                </div>
	                <div class="card-content table-responsive">
	                    <table class="table">
	                        <thead class="text-primary">
	                            <th>Nombre</th>
								<th>Apellidos</th>
	                            <th>Completada</th>
	                        </thead>
	                        <tbody>
	                            <tr>
	                            	<td>Dakota Rice</td>
	                                <td>Niger</td>
									<td>$36,738</td>
	                            </tr>
	                        </tbody>
	                    </table>

	                </div>
	            </div>
			</div>
		</div> <!--end row -->

	</div><!--end contaner fluid -->
</div><!--end content-->

@endsection