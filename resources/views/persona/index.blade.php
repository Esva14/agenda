@extends('layouts.principal')

@section('hijos')
<h1>Lista de Personas</h1>
<a href="persona/create" class="btn btn-primary">Crear nueva persona</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>CodPersona</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Ciudad</th>
            <th>Cumpleaños</th>
            <th>Medio para comunicarse</th>
        </tr>
    </thead>

    <tbody>
        @foreach($personas as $persona)
            <tr></tr>
            <th>{{$persona->id}}</th>
            <th>{{$persona->codPersona}}</th>
            <th>{{$persona->Nombre}}</th>
            <th>{{$persona->Apellido}}</th>
            <th>{{$persona->ciudad}}</th>
            <th>{{$persona->cumpleaños}}</th>
            <th>
                <a href="persona/{{$persona->id}}/edit" class="btn btn-info">Editar</a>
                <a href="/persona/{{$persona->id}}" class="btn btn-success">Medios</a>
                
                
                
            </th>
            <td>
                <form action="/persona/{{$persona->id}}" method="POST">
                @csrf
                @method('Delete')
                <button type="submit" class="btn btn-warning">Eliminar</button>
                </form>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection