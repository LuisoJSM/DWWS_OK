@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Posts</h1>
@stop

@section('content')
<h2>Agregar Película</h2>
{{-- <form action="{{ route('agregarPelicula') }}" method="POST"> --}}
    @csrf
    <div>
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
    </div>
    <div>
        <label for="nombre_director">Nombre del Director:</label>
        <input type="text" id="nombre_director" name="nombre_director" required>
    </div>
    <div>
        <label for="apellido_director">Apellido del Director:</label>
        <input type="text" id="apellido_director" name="apellido_director" required>
    </div>
    <div>
        <label for="anio_estreno">Año de estreno:</label>
        <input type="number" id="anio_estreno" name="anio_estreno" required>
    </div>

    <div>
        <label for="isrc">Isrc:</label>
        <input type="text" id="isrc" name="isrc" required>
    </div>

    <div>
        <label for="tipo">Tipo:</label>
        <select id="tipo" name="tipo" required>
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="pelicula">Película</option>
            <option value="cortometraje">Cortometraje</option>
            <option value="documental">Documental</option>
            <option value="serie">Serie</option>
        </select>
    </div>
    


    <button type="submit">Agregar Película</button>
</form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop