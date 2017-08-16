@extends('layouts.sidebar')

@section('title')
    <div>
        {{$actividad->nombre}}

    </div>
@endsection

@section('description', 'Has ingresado exitosamente')

@section('content')
<div class="content">
	<div class="container-fluid">
		@if($flash = session('message'))
			<div class="row">
				<div class="alert alert-danger">
					<span>{{ $flash }}</span>
				</div>
			</div>
		@endif

		<div class="row">
			<div class="col-md-12">
				<div class = "card">
					<div class = "card-content">
						<form method="POST" action="/actividades/unirse/{{$actividad->id}}">
						{{ csrf_field() }}
							<div class="col-md-6">
								<div class="form-group label-floating">
									<label class="control-label">Clave del equipo</label>
									<input type="text" class="form-control" name="clave" required>
								</div>
							</div>
							<div class="col-md-4">
								<button type="submit" class="btn btn-success">Unirse al equipo</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection