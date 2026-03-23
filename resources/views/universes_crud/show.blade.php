<!DOCTYPE html>
<html>
<head><title>Ver Universo</title></head>
<body>
    <h1>Detalles del Universo</h1>
    <p><strong>ID:</strong> {{ $universe->id }}</p>
    <p><strong>Nombre:</strong> {{ $universe->name }}</p>
    <br>
    <a href="{{ route('universes_crud.index') }}">Regresar a la lista</a>
</body>
</html>