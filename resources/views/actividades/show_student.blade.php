@extends('layouts.sidebar')

@section('title')
    <div>
        <i class= ""></i> Actividad 1 (Encriptación por medio de matrices)

    </div>
@endsection

@section('description', 'Has ingresado exitosamente')

@section('content')

			<div class="content">
				<div class="col-lg-12 col-md-12">
					<div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">Guillerno Jimenez</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                	<th>Question</th>
                                	<th>Sí</th>
                                	<th>No</th>
                                	<th>No puedo responder</th>
                                </thead>
                                <tbody>
                                    <tr>
                                    	<td title="Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda" >¿Ayudó a compañeros con dificultades?</td>
                                    	<td><input type="radio" name="nota" value="si"></td>
  										<td><input type="radio" name="nota" value="no"> </td>
  										<td><input type="radio" name="nota" value="null"> </td>
                                    </tr>
                                    <tr>
                                    	<td title="Buscó y localizó información que amplió el conocimiento que se tenía para la realización de la actividad">¿Investigó información necesaria?</td>
                                    	  <td><input type="radio" name="nota2" value="si"></td>
  										  <td><input type="radio" name="nota2" value="no"> </td>
  										  <td><input type="radio" name="nota2" value="null"> </td>
                                    </tr>
                                    <tr>
                                    	<td title="Realizó lo que le correspondía y asumió responsabilidad de los errores que pudiera tener su trabajo">¿Fue responsable con su trabajo?</td>
                                    	  <td><input type="radio" name="nota3" value="si"></td>
  										  <td><input type="radio" name="nota3" value="no"> </td>
  										  <td><input type="radio" name="nota3" value="null"> </td>
                                    </tr>
                                    <tr>
                                    	<td title="Buscó y localizó información que amplió el conocimiento que se tenía para la realización de la actividad">¿El alumno fue ordenado con su trabajo?</td>
                                    	  <td><input type="radio" name="nota4" value="si"></td>
  										  <td><input type="radio" name="nota4" value="no"> </td>
  										  <td><input type="radio" name="nota4" value="null"> </td>
                                    </tr>  
                                    <tr>
                                        <td title="Fue amable con sus compañeros y buscó crear un ambiente agradable">¿Fue cordial con sus compañeros?</td>
                                          <td><input type="radio" name="nota4" value="si"></td>
                                          <td><input type="radio" name="nota4" value="no"> </td>
                                          <td><input type="radio" name="nota4" value="null"> </td>
                                    </tr>  
                                    <tr>
                                        <td title="Es decir, no se excluyó o denigró de ninguna forma a alguno de sus compañeros.">¿Mostró respeto a sus compañeros en todo momento?</td>
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
                            <h4 class="title">María Gómez</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                    <th>Question</th>
                                    <th>Sí</th>
                                    <th>No</th>
                                    <th>No puedo responder</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td title="Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda" >¿Ayudó a compañeros con dificultades?</td>
                                        <td><input type="radio" name="nota" value="si"></td>
                                        <td><input type="radio" name="nota" value="no"> </td>
                                        <td><input type="radio" name="nota" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td title="Buscó y localizó información que amplió el conocimiento que se tenía para la realización de la actividad">¿Investigó información necesaria?</td>
                                          <td><input type="radio" name="nota2" value="si"></td>
                                          <td><input type="radio" name="nota2" value="no"> </td>
                                          <td><input type="radio" name="nota2" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td title="Realizó lo que le correspondía y asumió responsabilidad de los errores que pudiera tener su trabajo">¿Fue responsable con su trabajo?</td>
                                          <td><input type="radio" name="nota3" value="si"></td>
                                          <td><input type="radio" name="nota3" value="no"> </td>
                                          <td><input type="radio" name="nota3" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td title="Buscó y localizó información que amplió el conocimiento que se tenía para la realización de la actividad">¿El alumno fue ordenado con su trabajo?</td>
                                          <td><input type="radio" name="nota4" value="si"></td>
                                          <td><input type="radio" name="nota4" value="no"> </td>
                                          <td><input type="radio" name="nota4" value="null"> </td>
                                    </tr>  
                                    <tr>
                                        <td title="Fue amable con sus compañeros y buscó crear un ambiente agradable">¿Fue cordial con sus compañeros?</td>
                                          <td><input type="radio" name="nota4" value="si"></td>
                                          <td><input type="radio" name="nota4" value="no"> </td>
                                          <td><input type="radio" name="nota4" value="null"> </td>
                                    </tr>  
                                    <tr>
                                        <td title="Es decir, no se excluyó o denigró de ninguna forma a alguno de sus compañeros.">¿Mostró respeto a sus compañeros en todo momento?</td>
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
                            <h4 class="title">Alejandra Delgado</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                    <th>Question</th>
                                    <th>Sí</th>
                                    <th>No</th>
                                    <th>No puedo responder</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td title="Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda" >¿Ayudó a compañeros con dificultades?</td>
                                        <td><input type="radio" name="nota" value="si"></td>
                                        <td><input type="radio" name="nota" value="no"> </td>
                                        <td><input type="radio" name="nota" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td title="Buscó y localizó información que amplió el conocimiento que se tenía para la realización de la actividad">¿Investigó información necesaria?</td>
                                          <td><input type="radio" name="nota2" value="si"></td>
                                          <td><input type="radio" name="nota2" value="no"> </td>
                                          <td><input type="radio" name="nota2" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td title="Realizó lo que le correspondía y asumió responsabilidad de los errores que pudiera tener su trabajo">¿Fue responsable con su trabajo?</td>
                                          <td><input type="radio" name="nota3" value="si"></td>
                                          <td><input type="radio" name="nota3" value="no"> </td>
                                          <td><input type="radio" name="nota3" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td title="Buscó y localizó información que amplió el conocimiento que se tenía para la realización de la actividad">¿El alumno fue ordenado con su trabajo?</td>
                                          <td><input type="radio" name="nota4" value="si"></td>
                                          <td><input type="radio" name="nota4" value="no"> </td>
                                          <td><input type="radio" name="nota4" value="null"> </td>
                                    </tr>  
                                    <tr>
                                        <td title="Fue amable con sus compañeros y buscó crear un ambiente agradable">¿Fue cordial con sus compañeros?</td>
                                          <td><input type="radio" name="nota4" value="si"></td>
                                          <td><input type="radio" name="nota4" value="no"> </td>
                                          <td><input type="radio" name="nota4" value="null"> </td>
                                    </tr>  
                                    <tr>
                                        <td title="Es decir, no se excluyó o denigró de ninguna forma a alguno de sus compañeros.">¿Mostró respeto a sus compañeros en todo momento?</td>
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
                            <h4 class="title">Jorge Pérez</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                    <th>Question</th>
                                    <th>Sí</th>
                                    <th>No</th>
                                    <th>No puedo responder</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td title="Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda" >¿Ayudó a compañeros con dificultades?</td>
                                        <td><input type="radio" name="nota" value="si"></td>
                                        <td><input type="radio" name="nota" value="no"> </td>
                                        <td><input type="radio" name="nota" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td title="Buscó y localizó información que amplió el conocimiento que se tenía para la realización de la actividad">¿Investigó información necesaria?</td>
                                          <td><input type="radio" name="nota2" value="si"></td>
                                          <td><input type="radio" name="nota2" value="no"> </td>
                                          <td><input type="radio" name="nota2" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td title="Realizó lo que le correspondía y asumió responsabilidad de los errores que pudiera tener su trabajo">¿Fue responsable con su trabajo?</td>
                                          <td><input type="radio" name="nota3" value="si"></td>
                                          <td><input type="radio" name="nota3" value="no"> </td>
                                          <td><input type="radio" name="nota3" value="null"> </td>
                                    </tr>
                                    <tr>
                                        <td title="Buscó y localizó información que amplió el conocimiento que se tenía para la realización de la actividad">¿El alumno fue ordenado con su trabajo?</td>
                                          <td><input type="radio" name="nota4" value="si"></td>
                                          <td><input type="radio" name="nota4" value="no"> </td>
                                          <td><input type="radio" name="nota4" value="null"> </td>
                                    </tr>  
                                    <tr>
                                        <td title="Fue amable con sus compañeros y buscó crear un ambiente agradable">¿Fue cordial con sus compañeros?</td>
                                          <td><input type="radio" name="nota4" value="si"></td>
                                          <td><input type="radio" name="nota4" value="no"> </td>
                                          <td><input type="radio" name="nota4" value="null"> </td>
                                    </tr>  
                                    <tr>
                                        <td title="Es decir, no se excluyó o denigró de ninguna forma a alguno de sus compañeros.">¿Mostró respeto a sus compañeros en todo momento?</td>
                                          <td><input type="radio" name="nota4" value="si"></td>
                                          <td><input type="radio" name="nota4" value="no"> </td>
                                          <td><input type="radio" name="nota4" value="null"> </td>
                                    </tr>                                         
                                </tbody>
                            </table>
                        </div>
                         
                    </div>
                    <a class = "btn btn-primary pull-right" href="{{ route('actividades.index') }}">Terminar</a>
                </div>

@endsection