@extends('layouts.sidebar')

@section('title')
    <div>
        {{$actividad->nombre}}

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
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header" data-background-color="blue">
                                            <h4 class="title">{{$alumno -> nombre}}</h4>
                                        </div>
                                        <div class="card-content table-responsive">
                                            <table class="table">
                                                <thead class="text-primary">
                                                    <th>Name</th>
                                                    <th>Calidad</th>
                                                    <th>Frecuencia</th>
                                                    <th hidden>Salary</th>
                                                    <th>No puedo responder</th>
                                                </thead>
                                                <tbody>
                                                    @foreach($competencias as $competencia)
                                                        @foreach($competencia->comportamientos as $comportamiento)
                                                        <tr>
                                                            <td>{{$comportamiento->pregunta}}</td>
                                                            <td><input id="calidad_{{$comportamiento->id}}_{{$alumno->id}}" type="range" name="calidad_{{$comportamiento->id}}_{{$alumno->id}}" min="1" max="5"></td>
                                                            <td><input id="frecuencia_{{$comportamiento->id}}_{{$alumno->id}}" type="range" name="frecuencia_{{$comportamiento->id}}_{{$alumno->id}}" min="1" max="5"></td>
                                                            <td hidden><input type="hidden" name="{{$comportamiento->id}}_{{$alumno->id}}" value="-1"></td>
                                                            <td><input id="check_{{$comportamiento->id}}_{{$alumno->id}}" type="checkbox" name="{{$comportamiento->id}}_{{$alumno->id}}" value="0" onclick="clicked({{$comportamiento->id}}, {{$alumno->id}});"></td>
                                                        </tr>
                                                        @endforeach
                                                    @endforeach  
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <button type="submit" class="btn btn-primary">Terminar</button>     
                </form>               
            </div>

@endsection