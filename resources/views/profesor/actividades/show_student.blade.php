@extends('layouts.sidebar')

@section('title')
    <div>
        <i class= "">{{$actividad->nombre}}</i>

    </div>
@endsection

@section('description', 'Has ingresado exitosamente')

@section('content')

<script>
    function clicked(comportamiento_id, alumno_id){
        var checkbox = document.getElementById("check_" + comportamiento_id + "_" + alumno_id);
        var sf = document.getElementById("frecuencia_" + comportamiento_id + "_" + alumno_id).disabled = checkbox.checked;
        var sc = document.getElementById("calidad_" + comportamiento_id + "_" + alumno_id).disabled = checkbox.checked;
    }
</script>

<div class="content">
    <form method="POST" action="/actividades/{{$actividad->id}}">
    {{ csrf_field() }}
    @foreach($alumnos as $alumno)
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="blue">
                    <h4 class="title">{{$alumno->nombre}} {{$alumno->apellido_paterno}}</h4>
                </div>
                <div>
                    <table class="table table-hover">
                        <thead class="text-warning">
                            <th>Pregunta</th>
                            <th>Lo lograste</th>
                            <th>Vas bien</th>
                            <th>Échale ganas</th>
                            <th>En el hoyo</th>
                            <th>No puedo responder</th>
                        </thead>
                        <tbody>
                            @foreach($competencias as $competencia)
                                @foreach($competencia->comportamientos as $comportamiento)
                                <tr>
                                    <td>{{$comportamiento->pregunta}}</td>
                                        <td><input type="radio" name="{{$comportamiento->id}}_{{$alumno->id}}" value=4></td>
                                        <td><input type="radio" name="{{$comportamiento->id}}_{{$alumno->id}}" value=3></td>
                                        <td><input type="radio" name="{{$comportamiento->id}}_{{$alumno->id}}" value=2></td>
                                        <td><input type="radio" name="{{$comportamiento->id}}_{{$alumno->id}}" value=1></td>
                                        <td><input type="radio" name="{{$comportamiento->id}}_{{$alumno->id}}" value=0></td>

                                </tr>
                                @endforeach
                            @endforeach                                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endforeach
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Terminar</button>
    </div>
    </form>
</div>

@endsection