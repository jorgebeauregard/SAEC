@extends('layouts.sidebar')

@section('title')
    <div>
        <i class= ""></i> Actividad colaborativa de Integración por Partes

    </div>
@endsection

@section('description', 'Has ingresado exitosamente')

@section('content')

			<div class="content">
				<div class="col-lg-12 col-md-12">
					<div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">¿Tuvo buena disposición?</h4>
                            <p class="category">Mostró interés por el trabajo y tuvo disponibilidad de tiempo para realizar la actividad.</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                	<th>Name</th>
                                	<th>Sí</th>
                                	<th>No</th>
                                	<th>No puedo responder</th>
                                </thead>
                                <tbody>
                                    <tr>
                                    	<td>Guillerno Jimenez</td>
                                    	<td><input type="radio" name="nota" value="si"></td>
  										<td><input type="radio" name="nota" value="no"> </td>
  										<td><input type="radio" name="nota" value="null"> </td>
                                    </tr>
                                    <tr>
                                    	<td>María Gómez</td>
                                    	  <td><input type="radio" name="nota2" value="si"></td>
  										  <td><input type="radio" name="nota2" value="no"> </td>
  										  <td><input type="radio" name="nota2" value="null"> </td>
                                    </tr>
                                    <tr>
                                    	<td>Alejandra Delgado</td>
                                    	  <td><input type="radio" name="nota3" value="si"></td>
  										  <td><input type="radio" name="nota3" value="no"> </td>
  										  <td><input type="radio" name="nota3" value="null"> </td>
                                    </tr>
                                    <tr>
                                    	<td>Jorge Pérez</td>
                                    	  <td><input type="radio" name="nota4" value="si"></td>
  										  <td><input type="radio" name="nota4" value="no"> </td>
  										  <td><input type="radio" name="nota4" value="null"> </td>
                                    </tr>                                         
                                </tbody>
                            </table>
                        </div>
                    </div>
				</div>

				<div class="col-lg-12 col-md-12">
					<div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">¿Su actitud contribuyó a la correcta realización de la actividad?</h4>
                            <p class="category">Sus comportamientos fomentaron una buena colaboración entre compañeros.</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                	<th>Name</th>
                                	<th>Sí</th>
                                	<th>No</th>
                                	<th>No puedo responder</th>
                                </thead>
                                <tbody>
                                    <tr>
                                    	<td>Guillerno Jimenez</td>
                                    	<td><input type="radio" name="nota5" value="si"></td>
  										<td><input type="radio" name="nota5" value="no"> </td>
  										<td><input type="radio" name="nota5" value="null"> </td>
                                    </tr>
                                    <tr>
                                    	<td>María Gómez</td>
                                    	  <td><input type="radio" name="nota6" value="si"></td>
  										  <td><input type="radio" name="nota6" value="no"> </td>
  										  <td><input type="radio" name="nota6" value="null"> </td>
                                    </tr>
                                    <tr>
                                    	<td>Alejandra Delgado</td>
                                    	  <td><input type="radio" name="nota7" value="si"></td>
  										  <td><input type="radio" name="nota7" value="no"> </td>
  										  <td><input type="radio" name="nota7" value="null"> </td>
                                    </tr>
                                    <tr>
                                    	<td>Jorge Pérez</td>
                                    	  <td><input type="radio" name="nota8" value="si"></td>
  										  <td><input type="radio" name="nota8" value="no"> </td>
  										  <td><input type="radio" name="nota8" value="null"> </td>
                                    </tr>                                         
                                </tbody>
                            </table>
                        </div>
                    </div>
				</div>

				<div class="col-lg-12 col-md-12">
					<div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">¿Aportó ideas, perspectivas u opiniones útiles?</h4>
                            <p class="category">Sus aportaciones fueron significativas.</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                	<th>Name</th>
                                	<th>Sí</th>
                                	<th>No</th>
                                	<th>No puedo responder</th>
                                </thead>
                                <tbody>
                                    <tr>
                                    	<td>Guillerno Jimenez</td>
                                    	<td><input type="radio" name="nota9" value="si"></td>
  										<td><input type="radio" name="nota9" value="no"> </td>
  										<td><input type="radio" name="nota9" value="null"> </td>
                                    </tr>
                                    <tr>
                                    	<td>María Gómez</td>
                                    	  <td><input type="radio" name="nota10" value="si"></td>
  										  <td><input type="radio" name="nota10" value="no"> </td>
  										  <td><input type="radio" name="nota10" value="null"> </td>
                                    </tr>
                                    <tr>
                                    	<td>Alejandra Delgado</td>
                                    	  <td><input type="radio" name="nota11" value="si"></td>
  										  <td><input type="radio" name="nota11" value="no"> </td>
  										  <td><input type="radio" name="nota11" value="null"> </td>
                                    </tr>
                                    <tr>
                                    	<td>Jorge Pérez</td>
                                    	  <td><input type="radio" name="nota12" value="si"></td>
  										  <td><input type="radio" name="nota12" value="no"> </td>
  										  <td><input type="radio" name="nota12" value="null"> </td>
                                    </tr>                                         
                                </tbody>
                            </table>
                        </div>
                    </div>
				</div>

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">¿Fomentó el pensamiento crítico en torno a la actividad?</h4>
                            <p class="category">Sus opiniones y puntos de vista estaban fundados en conocimiento obtenido de fuentes fiables.</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                    <th>Name</th>
                                    <th>Sí</th>
                                    <th>No</th>
                                    <th>No puedo responder</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Guillerno Jimenez</td>
                                        <td><input type="radio" name="nota13" value="si"></td>
                                        <td><input type="radio" name="nota13" value="no"> </td>
                                        <td><input type="radio" name="nota13" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td>María Gómez</td>
                                          <td><input type="radio" name="nota14" value="si"></td>
                                          <td><input type="radio" name="nota14" value="no"> </td>
                                          <td><input type="radio" name="nota14" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td>Alejandra Delgado</td>
                                          <td><input type="radio" name="nota15" value="si"></td>
                                          <td><input type="radio" name="nota15" value="no"> </td>
                                          <td><input type="radio" name="nota15" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td>Jorge Pérez</td>
                                          <td><input type="radio" name="nota16" value="si"></td>
                                          <td><input type="radio" name="nota16" value="no"> </td>
                                          <td><input type="radio" name="nota16" value="null"> </td>
                                    </tr>                                         
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>  

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">¿Mostró respeto a sus compañeros en todo momento?</h4>
                            <p class="category">Es decir, no se excluyó o denigró de ninguna forma a alguno de sus compañeros.</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                    <th>Name</th>
                                    <th>Sí</th>
                                    <th>No</th>
                                    <th>No puedo responder</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Guillerno Jimenez</td>
                                        <td><input type="radio" name="nota17" value="si"></td>
                                        <td><input type="radio" name="nota17" value="no"> </td>
                                        <td><input type="radio" name="nota17" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td>María Gómez</td>
                                          <td><input type="radio" name="nota18" value="si"></td>
                                          <td><input type="radio" name="nota18" value="no"> </td>
                                          <td><input type="radio" name="nota18" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td>Alejandra Delgado</td>
                                          <td><input type="radio" name="nota19" value="si"></td>
                                          <td><input type="radio" name="nota19" value="no"> </td>
                                          <td><input type="radio" name="nota19" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td>Jorge Pérez</td>
                                          <td><input type="radio" name="nota20" value="si"></td>
                                          <td><input type="radio" name="nota20" value="no"> </td>
                                          <td><input type="radio" name="nota20" value="null"> </td>
                                    </tr>                                         
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>  

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">¿Fue cordial con sus compañeros?</h4>
                            <p class="category">Fue amable con sus compañeros y buscó crear un ambiente agradable.</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                    <th>Name</th>
                                    <th>Sí</th>
                                    <th>No</th>
                                    <th>No puedo responder</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Guillerno Jimenez</td>
                                        <td><input type="radio" name="nota21" value="si"></td>
                                        <td><input type="radio" name="nota21" value="no"> </td>
                                        <td><input type="radio" name="nota21" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td>María Gómez</td>
                                          <td><input type="radio" name="nota22" value="si"></td>
                                          <td><input type="radio" name="nota22" value="no"> </td>
                                          <td><input type="radio" name="nota22" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td>Alejandra Delgado</td>
                                          <td><input type="radio" name="nota23" value="si"></td>
                                          <td><input type="radio" name="nota23" value="no"> </td>
                                          <td><input type="radio" name="nota23" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td>Jorge Pérez</td>
                                          <td><input type="radio" name="nota24" value="si"></td>
                                          <td><input type="radio" name="nota24" value="no"> </td>
                                          <td><input type="radio" name="nota24" value="null"> </td>
                                    </tr>                                         
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a class = "btn btn-primary pull-right" href="{{ route('actividades.index') }}">Terminar</a>
                </div>  

			</div>

@endsection