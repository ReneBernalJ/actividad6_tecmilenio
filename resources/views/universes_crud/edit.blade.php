<!DOCTYPE html>
<html>
<head><title>Editar Universo</title></head>
<body>
    <h1>Editar Universo</h1>
    <form action="{{ route('universes_crud.update', $universe->id) }}" method="POST">
        @csrf 
        @method('PUT')
        <label>Nombre del Universo:</label>
        <input type="text" name="name" value="{{ $universe->name }}" required>
        <button type="submit">Actualizar Cambios</button>
    </form>
    <br>
    <a href="{{ route('universes_crud.index') }}">Regresar a la lista</a>
</body>
</html>