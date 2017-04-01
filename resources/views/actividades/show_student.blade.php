@extends('layouts.sidebar')

@section('title')
    <div>
        <i class= "">{{$actividad->nombre}}</i>

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
                <h4 class="title">{{$alumno->nombre}}</h4>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead class="text-warning">
                        <th>Pregunta</th>
                        <th>Sí</th>
                        <th>No</th>
                        <th>No puedo responder</th>
                    </thead>
                    <tbody>
                        @foreach($competencias as $competencia)
                            @foreach($competencia->comportamientos as $comportamiento)
                            <tr>
                                <td title="{{$comportamiento->descipcion}}" > {{$comportamiento->pregunta}} </td>
                                <td><input type="radio" name="{{$comportamiento->id}}_{{$alumno->id}}" value="si"></td>
                                <td><input type="radio" name="{{$comportamiento->id}}_{{$alumno->id}}" value="no"> </td>
                                <td><input type="radio" name="{{$comportamiento->id}}_{{$alumno->id}}" value="null"> </td>
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
               <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>

@endsection