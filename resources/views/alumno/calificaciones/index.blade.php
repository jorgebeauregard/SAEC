@extends('layouts.sideBar')

@section('title')
    <div>
        <i class= ""></i> Calificaciones
    </div>

@endsection

@section('description', 'Esta es la pagina de compras')
@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
				<!-- Chart -->
					<div class="card">
						<div class="card-header" data-background-color="blue">
							<h4 class="title">Desempeño</h4>
							<p class="category">Aquí se muestra el estado del desempeño del alumno</p>
						</div>
				
					<hr>
						<div id='myChart'></div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

	<script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
		<script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
		ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script>
	<script type="text/javascript">
		var myConfig =         {
					"type":"hbar",
					"font-family":"Arial",
					"title":{
						"text":"Customer Survey Response",
						"font-family":"Arial",
						"background-color":"none",
						"font-color":"#A4A4A4",
						"font-size":"18px"
					},
					"labels":[
						{
							"text":"DAYS",
							"font-size":"12px",
							"font-color":"#9d9d9d",
							"x":"11.5%",
							"y":"10%"
						},
						{
							"text":"CUSTOMERS",
							"font-size":"12px",
							"font-color":"#9d9d9d",
							"x":"20%",
							"y":"10%"
						},
						{
							"text":"GOAL",
							"font-size":"12px",
							"font-color":"#9d9d9d",
							"x":"4%",
							"y":"10%"
						}
					],
					"arrows":[
					{
						"backgroundColor":"#CCCCCC",
						"direction":"bottom",
						"borderWidth": 0,
						"to":{
						"x": "6%",
						"y": "27%"
						},
						"from":{
						"x": "6%",
						"y": "79%"
						}
					}
					],
					"shapes":[
					{
						"type":"circle",
						"x": 45,
						"y": 99,
						"backgroundColor": "white",
						"borderColor":"#6FA6DF",
						"borderWidth":3,
						"size": 14
					},
					{
						"type":"circle",
						"x": 40,
						"y": 95,
						"backgroundColor": "#6FA6DF",
						"size": 2
					},
					{
						"type":"circle",
						"x": 50,
						"y": 95,
						"backgroundColor": "#6FA6DF",
						"size": 2
					},
					{
						"type":"pie",
						"background-color":"#5297b6",
						"size":8,
						"x":45,
						"y":100,
						"angle-start":0,
						"angle-end":180,
					},
					{
						"type":"pie",
						"background-color":"#fff",
						"size":6,
						"x":45,
						"y":100,
						"angle-start":0,
						"angle-end":180,
					},
					{
						"type":"circle",
						"x": 45,
						"y": 433,
						"backgroundColor": "white",
						"borderColor":"#FA8452",
						"borderWidth":3,
						"size": 14
					},
					{
						"type":"circle",
						"x": 40,
						"y": 429,
						"backgroundColor": "#FA8452",
						"size": 2
					},
					{
						"type":"circle",
						"x": 50,
						"y": 429,
						"backgroundColor": "#FA8452",
						"size": 2
					},
					{
						"type":"pie",
						"background-color":"#FA8452",
						"size":8,
						"x":45,
						"y":439,
						"angle-start":170,
						"angle-end":10,
					},
					{
						"type":"pie",
						"background-color":"#fff",
						"size":5,
						"x":45,
						"y":440,
						"angle-start":170,
						"angle-end":10,
					}
					],
					"plot":{
						"bars-overlap":"100%",
						"borderRadius":8,
						"hover-state":{
							"visible":false
						},
						"animation": {
							"delay": 300,
							"effect": 3,
							"speed": "500",
							"method": "0",
							"sequence": "3"
						}
					},
					"plotarea":{
						"margin":"60px 20px 20px 140px"
					},
					"scale-x":{
						"line-color":"none",
						"values":data.names,
						"tick":{
							"visible":false
						},
						"guide":{
							"visible":false
						},
						"item":{
							"font-size":"14px",
							"padding-right":"20px",
							"auto-align":true,
							"rules":[
								{
									"rule":"%i==0",
									"font-color":"#FA8452"
								},
								{
									"rule":"%i==1",
									"font-color":"#FCAE48"
								},
								{
									"rule":"%i==2",
									"font-color":"#FCCC65"
								},
								{
									"rule":"%i==3",
									"font-color":"#A0BE4A"
								},
								{
									"rule":"%i==4",
									"font-color":"#6FA6DF"
								}
							]
						}
					},
					"scale-y":{
						"visible":false,
						"guide":{
							"visible":false
						}
					},
					"series":[
						{
							"values":[100,100,100,100,100],
							"bar-width":"40px",
							"background-color":"#f2f2f2",
							"border-color": "#e8e3e3",
							"border-width":2,
							"fill-angle":90,
							"tooltip":{
								"visible":false
							}
						},
						{
							"values": data.grades,
							"bar-width":"32px",
							"max-trackers":0,
							"value-box":{
								"placement":"top-out",
								"text":"%v",
								"decimals":0,
								"font-color":"#A4A4A4",
								"font-size":"14px",
								"alpha":0.6
							},
							"rules":[
								{
									"rule":"%i==0",
									"background-color":"#FA8452"
								},
								{
									"rule":"%i==1",
									"background-color":"#FCAE48"
								},
								{
									"rule":"%i==2",
									"background-color":"#FCCC65"
								},
								{
									"rule":"%i==3",
									"background-color":"#A0BE4A"
								},
								{
									"rule":"%i==4",
									"background-color":"#6FA6DF"
								}
							]
						}
					]
				};
     
		zingchart.render({ 
			id : 'myChart', 
			data : myConfig, 
			height: 500, 
			width: 725 
		});
	</script>
	
@endsection