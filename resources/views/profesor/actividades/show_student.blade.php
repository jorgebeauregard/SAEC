@extends('layouts.sidebar')

@section('title')
    <div>
        <i class= "">{{$actividad->nombre}}</i>

    </div>
@endsection

@section('description', 'Has ingresado exitosamente')

@section('content')

<div class="content">
    <form method="POST" action="/actividades/{{$actividad->id}}/alumnos/{{$alumno->id}}">
    {{ csrf_field() }}
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
                                    <td><input type="radio" name="comportamiento_{{$comportamiento->id}}" value=4 required></td>
                                    <td><input type="radio" name="comportamiento_{{$comportamiento->id}}" value=3 required></td>
                                    <td><input type="radio" name="comportamiento_{{$comportamiento->id}}" value=2 required></td>
                                    <td><input type="radio" name="comportamiento_{{$comportamiento->id}}" value=1 required></td>
                                    <td><input type="radio" name="comportamiento_{{$comportamiento->id}}" value=0 required></td>

                                </tr>
                                @endforeach
                            @endforeach                                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
        <button type="submit" class="btn btn-primary">Terminar</button>
    
    </form>
</div>

@endsection