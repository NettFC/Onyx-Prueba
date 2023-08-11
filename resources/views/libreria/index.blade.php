@extends('layouts.plantillabase');

@section('contenido')
<div class="d-flex justify-content-between align-items-center">
    <a href="libreria/create" class="btn btn-primary d-none d-sm-inline"><i class="bi bi-plus-circle"></i> Agregar Libros</a>
    <a href="libreria/create" class="btn btn-primary d-inline d-sm-none"><i class="bi bi-plus-circle"></i></a>

</div>
<hr>
<h1><i class="bi bi-list-stars"></i> Listado de Libros</h1>
<div class="table-responsive">
    <table class="table table-bordered table-striped mt-4">
        <thead class="table-primary text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Genero</th>
                <th scope="col">Año</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($librerias as $libreria)
            <tr>
                <td>{{$libreria->id}}</td>
                <td>{{$libreria->titulo}}</td>
                <td>{{$libreria->autor}}</td>
                <td>{{$libreria->genero}}</td>
                <td>{{$libreria->año}}</td>
                <td>
                    <form action="{{route ('libreria.destroy', $libreria->id)}}" method="POST" class="text-center">
                        @csrf
                        @method('DELETE')
                        <a href="/libreria/{{$libreria->id}}/edit" class="btn btn-info"><i class="bi bi-pencil-square"></i> Editar</a>
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i> Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection