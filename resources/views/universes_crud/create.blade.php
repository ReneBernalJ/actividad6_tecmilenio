<!DOCTYPE html>
<html>
<head><title>Crear Universo</title></head>
<body>
    <h1>Crear Nuevo Universo</h1>
    <form action="{{ route('universes_crud.store') }}" method="POST">
        @csrf
        <label>Nombre del Universo:</label>
        <input type="text" name="name" required>
        <button type="submit">Guardar</button>
    </form>
    <br>
    <a href="{{ route('universes_crud.index') }}">Regresar a la lista</a>
</body>
</html>