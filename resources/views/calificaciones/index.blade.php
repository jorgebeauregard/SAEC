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
				<!-- Styles -->
				<style>
				#chartdiv {
					width	: 100%;
					height	: 500px;
				}									
				</style>

				<!-- Resources -->
				<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
				<script src="https://www.amcharts.com/lib/3/xy.js"></script>
				<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
				<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
				<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

				<!-- Chart code -->
				<script>
				var chart = AmCharts.makeChart( "chartdiv", {
				"type": "xy",
				"theme": "light",
				"balloon":{
				"fixedPosition":true,
				},
				"dataProvider": [ {
					"y": 10,
					"x": 14,
					"value": 59,
					"y2": -5,
					"x2": -3,
					"value2": 44
				}, {
					"y": 5,
					"x": 3,
					"value": 50,
					"y2": -15,
					"x2": -8,
					"value2": 12
				}, {
					"y": -10,
					"x": 8,
					"value": 19,
					"y2": -4,
					"x2": 6,
					"value2": 35
				}, {
					"y": -6,
					"x": 5,
					"value": 65,
					"y2": -5,
					"x2": -6,
					"value2": 168
				}, {
					"y": 15,
					"x": -4,
					"value": 92,
					"y2": -10,
					"x2": -8,
					"value2": 102
				}, {
					"y": 13,
					"x": 1,
					"value": 8,
					"y2": -2,
					"x2": 0,
					"value2": 41
				}, {
					"y": 1,
					"x": 6,
					"value": 35,
					"y2": 0,
					"x2": -3,
					"value2": 16
				} ],
				"valueAxes": [ {
					"position": "bottom",
					"axisAlpha": 0
				}, {
					"minMaxMultiplier": 1.2,
					"axisAlpha": 0,
					"position": "left"
				} ],
				"startDuration": 1.5,
				"graphs": [ {
					"balloonText": "x:<b>[[x]]</b> y:<b>[[y]]</b><br>value:<b>[[value]]</b>",
					"bullet": "circle",
					"bulletBorderAlpha": 0.2,
					"bulletAlpha": 0.8,
					"lineAlpha": 0,
					"fillAlphas": 0,
					"valueField": "value",
					"xField": "x",
					"yField": "y",
					"maxBulletSize": 100
				}, {
					"balloonText": "x:<b>[[x]]</b> y:<b>[[y]]</b><br>value:<b>[[value]]</b>",
					"bullet": "diamond",
					"bulletBorderAlpha": 0.2,
					"bulletAlpha": 0.8,
					"lineAlpha": 0,
					"fillAlphas": 0,
					"valueField": "value2",
					"xField": "x2",
					"yField": "y2",
					"maxBulletSize": 100
				} ],
				"marginLeft": 46,
				"marginBottom": 35,
				"export": {
					"enabled": true
				}
				} );
				</script>

				<!-- HTML -->
				<div id="chartdiv"></div>




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