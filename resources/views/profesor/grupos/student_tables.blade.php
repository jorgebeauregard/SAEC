<div id="tables">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" data-background-color="green">
                    <h4 class="title">Alumnos en el grupo</h4>
                    <br>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar alumnos por apellido">
                </div>

                <div class="content table-responsive">
                    <table id="myTable" class="table table-striped">
                        <tr class="header">
                            <th>Apellido Paterno</th>
                            <th>Nombre</th>
                            <th>Matr&iacute;cula</th>
                            <th>Plan</th>
                            <th>Eliminar</th>
                        </tr>
                            @foreach($alumnos as $alumno)
                                <tr>
                                    <td>{{$alumno->apellido_paterno}}</td>
                                    <td>{{$alumno->nombre}}</td>
                                    <td>{{$alumno->matricula}}</td>
                                    <td>{{$alumno->plan->nombre}}</td>
                                    <td><a type="button" class="btn btn-danger" onclick="deleteStudent({{$alumno->id}}, {{$grupo->id}})"><i class="fa fa-times"></i></a></td>
                                </tr>
                            @endforeach
                    </table>
                </div>

            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">Agregar alumnos al grupo</h4>
                    <br>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar alumnos por matrícula">
                </div>

                <div class="content table-responsive">
                    <table id="myTable" class="table table-striped">
                        <tr class="header">
                            <th>Apellido Paterno</th>
                            <th>Nombre</th>
                            <th>Matr&iacute;cula</th>
                            <th>Plan</th>
                            <th>Agregar</th>
                        </tr>

                        @foreach($todos as $todo)
                            <tr>
                                <td>{{$todo->apellido_paterno}}</td>
                                <td>{{$todo->nombre}}</td>
                                <td>{{$todo->matricula}}</td>
                                <td>{{$todo->plan->nombre}}</td>
                                <td><a type="button" class="btn btn-success" onclick="addStudent({{$todo->id}}, {{$grupo->id}})"><i class="fa fa-check"></i></a></td>
                            </tr>
                        @endforeach

                    </table>
                </div>

            </div>
        </div>
    </div>
</div>