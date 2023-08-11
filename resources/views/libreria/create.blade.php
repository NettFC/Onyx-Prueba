@extends('layouts.plantillabase');

@section('contenido')
<h2><i class="bi bi-plus-circle"></i> AGREGAR LIBROS</h2>
<hr>

<form action="/libreria" method="POST" class="text-center">
    @csrf
    <div class="mb-3">
        <label for="titulo" class="form-label fw-bold">Titulo</label>
        <input type="text" id="titulo" name="titulo" class="form-control rounded-pill border-primary text-center" tabindex="1" required>
    </div>
    <div class="mb-3">
        <label for="autor" class="form-label fw-bold">Autor</label>
        <input type="text" id="autor" name="autor" class="form-control rounded-pill border-primary text-center" tabindex="2" required>
    </div>
    <div class="mb-3">
        <label for="genero" class="form-label fw-bold">Genero</label>
        <input type="text" id="genero" name="genero" class="form-control rounded-pill border-primary text-center" tabindex="3" required>
    </div>
    <div class="mb-3">
        <label for="año" class="form-label fw-bold">Año</label>
        <input type="text" id="año" name="año" class="form-control rounded-pill border-primary text-center" tabindex="4" required>
    </div>
    <hr>
    <a href="/libreria" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection