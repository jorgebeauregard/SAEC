@extends('layouts.sideBar')

@section('title')
    <div>
        <i class= ""></i> Calificaciones
    </div>

@endsection

@section('description', 'Esta es la pagina de compras')
@section('content')
	<div class="content">

		<div class = "chart">
				<div id="chartContainer" style="height: 400px; width: 100%;"></div>
				<script type="text/javascript">
					window.onload = function () {
						var chart = new CanvasJS.Chart("chartContainer",
						{
							title: {
								text: "Tu desempeno"
							},
							axisX: {
								title: "Eje X",
								maximum: 100,
								minimum: 0
							},
							axisY: {
								title: "Eje Y",
								maximum: 100,
								minimum: 0
								
								
							},

							legend: {
								verticalAlign: "bottom",
								horizontalAlign: "left"
							},
							data: [
							{
								type: "bubble",
								legendText: " ",
								showInLegend: true,
								legendMarkerType: "circle",
								toolTipContent: "<strong>{name}</strong> <br/> Hardcodea Eje X: {x}<br/> Hardcodea Eje Y: {y}<br/> Hardcodea Eje Z: {z}",
								dataPoints: [
									{ x: 78.1, y: 70.00, z: 306.77, name: "Liderazgo" },
									{ x: 15.5, y: 82.15, z: 237.414, name: "Honestidad" },
									{ x: 72.5, y: 90.86, z: 500.24, name: "Sex appeal" },
								
								]
							}
							]
						});

						chart.render();
					}
				</script>
				<script src="../js/canvasjs.min.js"></script>	
			</div>




		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="card card-nav-tabs">
					<div class="card-header" data-background-color="tecblue">
						<div class="nav-tabs-navigation">
							<div class="nav-tabs-wrapper">
								<span class="nav-tabs-title">Materias</span>
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active">
										<a href="#matematicas" data-toggle="tab">
											<i class="material-icons">insert_chart</i>
											Matemáticas 2
										<div class="ripple-container"></div></a>
									</li>
									<li class="">
										<a href="#algebralineal" data-toggle="tab">
											<i class="material-icons">border_all</i>
											Álgebra Lineal
										<div class="ripple-container"></div></a>
									</li>
									<li class="">
										<a href="#basesdedatos" data-toggle="tab">
											<i class="material-icons">developer_board</i>
											Bases de Datos
										<div class="ripple-container"></div></a>
									</li>
									<li class="">
										<a href="#dinamica" data-toggle="tab">
											<i class="material-icons">cached</i>
											Dinámica
										<div class="ripple-container"></div></a>
									</li>									
								</ul>
							</div>
						</div>
					</div>

					<div class="card-content">
						<div class="tab-content">
							<div class="tab-pane active" id="matematicas">
								<table class="table">
									<th>Actividad</th>
									<th>Calificacion
									<tbody>
										<tr>
											<td>Actividad colaborativa de Integraci&oacuten por Partes</td>
											<td>Pendiente</td>
										</tr>
										<tr>
											<td>Actividad colaborativa de Sumas de Riemann</td>
											<td>87</td>
										</tr>
										<tr>
											<td>Actividad colaborativa de Series de Taylor</td>
											<td>92</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="tab-pane" id="algebralineal">
								<table class="table">
									<th>Actividad</th>
									<th>Calificacion
									<tbody>
										<tr>
											<td>Actividad 1 (Encriptaci&oacuten por medio de matrices)</td>
											<td>Pendiente</td>
										</tr>
										<tr>
											<td>Actividad 2 (Gauss Jordan)</td>
											<td>71</td>
										</tr>
										<tr>
											<td>Actividad 3 (Matrices de adyacencia)</td>
											<td>93</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="tab-pane" id="basesdedatos">
								<table class="table">
									<th>Actividad</th>
									<th>Calificacion
									<tbody>
										<tr>
											<td>Tarea 1 - Normalizaci&oacuten</td>
											<td>85</td>
										</tr>
										<tr>
											<td>Tarea 2 - Base del hospital</td>
											<td>91</td>
										</tr>
										<tr>
											<td>Tarea 3 - Proyecto integrador</td>
											<td>79</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="tab-pane" id="dinamica">
								<table class="table">
									<th>Actividad</th>
									<th>Calificacion
									<tbody>
										<tr>
											<td>Cuerpos r&iacutegidos en movimiento (Actividad colaborativa)</td>
											<td>81</td>
										</tr>
										<tr>
											<td>Resolver el problema 4 estableciendo sus condiciones cinem&aacuteticas y cin&eacuteticas (Problema retador)</td>
											<td>80</td>
										</tr>
										<tr>
											<td>Rotaci&oacute y traslaci&oacutenpura (Actividad colaborativa)</td>
											<td>94</td>
										</tr>
									</tbody>
								</table>
							</div>							
						</div>
					</div>
				</div>
			</div>
			</div>

		</div>
@endsection