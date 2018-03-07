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
					<div class="card card-nav-tabs">
						<div class="card-header" data-background-color="blue">
							<div class="nav-tabs-navigation">
								<div class="nav-tabs-wrapper">
									<span class="nav-tabs-title">Competencias:</span>
									<ul class="nav nav-tabs" data-tabs="tabs">
										<li>
											<a href="1">
												<i class="material-icons">bug_report</i> {{$competencias[0]->nombre}}
												<div class="ripple-container"></div>
											</a>
										</li>
										<li>
											<a href="2">
												<i class="material-icons">bug_report</i> {{$competencias[1]->nombre}}
												<div class="ripple-container"></div>
											</a>
										</li>
										<li>
											<a href="3">
												<i class="material-icons">bug_report</i> {{$competencias[2]->nombre}}
												<div class="ripple-container"></div>
											</a>
										</li>
										<li>
											<a href="4">
												<i class="material-icons">bug_report</i> {{$competencias[3]->nombre}}
												<div class="ripple-container"></div>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card-content">
							<div class="tab-content">
								<div class="tab-pane active" id="profile">
									<table class="table">
										<tbody>
											<h4 class="title">{{$competencia->nombre}}</h4>
											<p class="category">{{$competencia->descripcion}}</p>
											<hr>
											<div id='myChart'></div>
										</tbody>
									</table>
								</div>
							</div>
						</div>
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
						"text":"",
						"font-family":"Arial",
						"background-color":"none",
						"font-color":"#A4A4A4",
						"font-size":"18px"
					},
					"labels":[
						{
							"text":"Evaluador",
							"font-size":"12px",
							"font-color":"#9d9d9d",
							"x":"13%",
							"y":"10%"
						},
						{
							"text":"Calificación",
							"font-size":"12px",
							"font-color":"#9d9d9d",
							"x":"30%",
							"y":"10%"
						},
					],
					"arrows":[
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
						"margin":"60px 50px 50px 200px"
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
								"font-size":"18px",
								"alpha":0.8
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