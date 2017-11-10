@extends('layouts.sideBar')

@section('title')
    <div>
        <i class= ""></i> Perfil
    </div>

@endsection

@section('description', 'Esta es la pagina de compras')
@section('content')
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
									<i class="material-icons">face</i>
								</div>
								<div class="card-content">
									<br>
									<br>
									<br>
									<br>
									<p class="category" >Usuario</p>
									<h3 class="title">{{$logged->nombre.' '.$logged->apellido_paterno}}</h3>
									<br>
									<p class="category">Matr&iacutecula</p>
									<h3 class="title">{{$logged->matricula}}</h3>
									<br>
									<p class="category">Campus</p>
									<h3 class="title">{{$logged->campus->nombre}}</h3>
									<br>
									<p class="category">Programa</p>
									<h3 class="title">{{$logged->plan->nombre}}</h3>																												
								</div>
								<div class="card-footer">

								</div>
							</div>
						</div>
					</div>

					</div>
				</div>
			</div>

@endsection