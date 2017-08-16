@extends('layouts.sidebar')

@section('title')
    <div>
        <i class= "">{{$actividad->nombre}}</i> 

    </div>
@endsection

@section('description', 'Has ingresado exitosamente')

@section('content')

<div class="content">
    <script>
    function clicked(comportamiento_id, alumno_id){
        var checkbox = document.getElementById("check_" + comportamiento_id + "_" + alumno_id);
        var sf = document.getElementById("frecuencia_" + comportamiento_id + "_" + alumno_id).disabled = checkbox.checked;
        var sc = document.getElementById("calidad_" + comportamiento_id + "_" + alumno_id).disabled = checkbox.checked;
    }
    </script>
    <form method="POST" action="/actividades/{{$actividad->id}}">
        {{ csrf_field() }}
        @foreach($competencias as $competencia)
            @foreach($competencia->comportamientos as $comportamiento)
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">{{$comportamiento->pregunta}}</h4>
                            <p class="category">{{$comportamiento->descripcion}}</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                    <th>Name</th>
                                    <th>Calidad</th>
                                    <th>Frecuencia</th>
                                    <th>No puedo responder</th>
                                </thead>
                                <tbody>
                                    @foreach($alumnos as $alumno)
                                    <tr>
                                        <td>{{$alumno->nombre}}</td>
                                        <td><input id="calidad_{{$comportamiento->id}}_{{$alumno->id}}" type="range" name="calidad_{{$comportamiento->id}}_{{$alumno->id}}" min="1" max="5"></td>
                                        <td><input id="frecuencia_{{$comportamiento->id}}_{{$alumno->id}}" type="range" name="frecuencia_{{$comportamiento->id}}_{{$alumno->id}}" min="1" max="5"></td>
                                        <td><input type="hidden" name="{{$comportamiento->id}}_{{$alumno->id}}" value="-1"></td>
                                        <td><input id="check_{{$comportamiento->id}}_{{$alumno->id}}" type="checkbox" name="{{$comportamiento->id}}_{{$alumno->id}}" value="0" onclick="clicked({{$comportamiento->id}}, {{$alumno->id}});"></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Terminar</button>
        </div>
    </form>
</div>

@endsection