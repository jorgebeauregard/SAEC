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
					<div class = "card">
						<div class="card-header" data-background-color="green">
							<h4 class="title">Crear grupo</h4>
							<p>Aquí se pueden crear a los grupos que usted tiene para añadirlos en futuras actividades</p>
						</div>
						<div class = "card-content">
							<form>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group label-floating">
											<label class="control-label">Nombre de la materia</label><br>
											<select name="cars" class="form-control">
											@foreach($materias as $materia)
												  <option value="{{$materia->id}}">{{$materia->nombre}}</option>
											@endforeach	  
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group label-floating">
											<label class="control-label">Grupo</label>
											<input type="radio" name="grupo" value=1> 1<br>
											<input type="radio" name="grupo" value=2> 2<br>
											<input type="radio" name="grupo" value=3> 3<br> 
											<input type="radio" name="grupo" value=4> 4<br>
											<input type="radio" name="grupo" value=5> 5<br>
											<input type="radio" name="grupo" value=6> 6<br>
										</div>
									</div>
								</div>
						</div>
					</div>
				</div>
		</div><!--end row -->

		<div class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Crear grupo</button>
				</form>
			</div>
		</div>
    </div><!--end container-fluid -->
</div><!--end content -->




@endsection