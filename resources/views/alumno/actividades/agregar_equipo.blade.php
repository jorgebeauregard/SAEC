@extends('layouts.sidebar')

@section('title')
    <div>
        {{$actividad->nombre}}

    </div>
@endsection

@section('description', 'Has ingresado exitosamente')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class = "card">
				<div class = "card-content">
					<form method="POST" action="/crear/grupo">
					{{ csrf_field() }}
						<div class="col-md-6">
							<div class="form-group label-floating">
								<label class="control-label">Nombre del grupo</label>
								<input type="text" class="form-control" name="nombre" required>
							</div>
						</div>
						<div class="col-md-4">
							<button type="submit" class="btn btn-success">Crear grupo</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection