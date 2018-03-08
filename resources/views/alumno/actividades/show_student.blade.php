@extends('layouts.sidebar')

@section('title')
    <div>
        {{$actividad->nombre}}

    </div>
@endsection

@section('description', 'Has ingresado exitosamente')

@section('content')
    
<div class="content">
    <form method="POST" action="/actividades/{{$actividad->id}}">
    {{ csrf_field() }}
        @foreach($alumnos as $alumno)
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">{{$alumno -> nombre}} {{$alumno->apellido_paterno}}</h4>
                    </div>
                    <div>
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <th>Pregunta</th>
                                <th>Muy Bien</th>
                                <th>Bien</th>
                                <th>Regular</th>
                                <th>Necesita desarrollo</th>
                                <th>No puedo responder</th>
                            </thead>
                            <tbody>
                                @foreach($competencias as $competencia)
                                    @foreach($competencia->comportamientos as $comportamiento)
                                    <tr>
                                        <td data-toggle="tooltip" title="{{$comportamiento->descripcion}}">{{$comportamiento->pregunta}}</td>
                                            <td><input type="radio" name="{{$comportamiento->id}}_{{$alumno->id}}" value=4 required></td>
                                            <td><input type="radio" name="{{$comportamiento->id}}_{{$alumno->id}}" value=3 required></td>
                                            <td><input type="radio" name="{{$comportamiento->id}}_{{$alumno->id}}" value=2 required></td>
                                            <td><input type="radio" name="{{$comportamiento->id}}_{{$alumno->id}}" value=1 required></td>
                                            <td><input type="radio" name="{{$comportamiento->id}}_{{$alumno->id}}" value=0 required></td>
                                    </tr>
                                    @endforeach
                                @endforeach                                         
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Terminar</button>     
    </form>               
</div>

@endsection