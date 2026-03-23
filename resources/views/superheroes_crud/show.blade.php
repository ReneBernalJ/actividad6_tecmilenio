<!DOCTYPE html>
<html>
<head><title>Ver Superhéroe</title></head>
<body>
    <h1>Detalles del Superhéroe</h1>
    <p><strong>ID:</strong> {{ $superhero->id }}</p>
    <p><strong>Nombre:</strong> {{ $superhero->name }}</p>
    <p><strong>Universo:</strong> {{ $superhero->universe->name }}</p>
    <br>
    <a href="{{ route('superheroes_crud.index') }}">Regresar a la lista</a>
</body>
</html>