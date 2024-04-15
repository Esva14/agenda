@extends('layouts.principal')

@section('hijos')

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
                <a href="/telefono/{{$persona->id}}" class="btn btn-info">Telefonos</a>               
                <a href="/correo/{{$persona->id}}" class="btn btn-info">Correos</a>     
            </th>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection