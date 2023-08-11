@extends('layouts.plantillabase');

@section('contenido')
<h2><i class="bi bi-pencil-square"></i> EDITAR LIBROS</h2>
<hr>
<form action="/libreria/{{$libreria->id}}" method="POST" class="text-center">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="titulo" class="form-label fw">Titulo</label>
        <input type="text" id="titulo" name="titulo" class="form-control rounded-pill border-primary text-center" value="{{$libreria->titulo}}">
    </div>
    <div class="mb-3">
        <label for="autor" class="form-label fw">Autor</label>
        <input type="text" id="autor" name="autor" class="form-control rounded-pill border-primary text-center" value="{{$libreria->autor}}">
    </div>
    <div class="mb-3">
        <label for="genero" class="form-label fw">Genero</label>
        <input type="text" id="genero" name="genero" class="form-control rounded-pill border-primary text-center" value="{{$libreria->genero}}">
    </div>
    <div class="mb-3">
        <label for="año" class="form-label fw">Año</label>
        <input type="text" id="año" name="año" class="form-control rounded-pill border-primary text-center" value="{{$libreria->año}}">
    </div>
    <hr>
    <a href="/libreria" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection