@extends('layouts.sidebar')

@section('title')
    <div>
        <i class= ""></i> Grupos
    </div>
@endsection

@section('description', 'Has ingresado exitosamente')

@section('content')

	<div class="content">
		<div class="container-fluid">
		
		<div class="row">
			<div class="col-md-4">
				<a type="button" class="btn btn-success" href="/crear/grupo">Crear grupo</a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
	            <div class="card">
	                <div class="card-header" data-background-color="orange">
	                    <h4 class="title">Grupos</h4>
	                     <p class="category">Aquí se muestran todos los grupos </p>
	                </div>
	                <div class="card-content table-responsive">
	                    <table class="table">
	                        <thead class="text-primary">
	                            <th>Nombre</th>
	                            <th>Periodo</th>
								<th>Más información</th>
	                        </thead>
	                        <tbody>
	                        @foreach($grupos as $grupo)
	                            <tr>
	                            	<td>{{$grupo->nombre}}</td>
									<td>{{$grupo->periodo->nombre}}</td>
									<td><a href="/grupos/{{$grupo->id}}" type="button" class="btn btn-primary">Ver</a></td>
	                            </tr>
	                        @endforeach
	                        </tbody>
	                    </table>

	                </div>
	            </div>
			</div>
		</div> <!--end row -->

		</div>
	</div>

@endsection