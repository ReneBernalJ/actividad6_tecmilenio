<!DOCTYPE html>
<html>
<head><title>Crear Superhéroe</title></head>
<body>
    <h1>Crear Nuevo Superhéroe</h1>
    <form action="{{ route('superheroes_crud.store') }}" method="POST">
        @csrf
        <label>Nombre del Héroe:</label>
        <input type="text" name="name" required>
        <br><br>

        <label>Universo:</label>
        <select name="universe_id" required>
            <option value="">-- Selecciona uno --</option>
            @foreach ($universes as $universo)
                <option value="{{ $universo->id }}">{{ $universo->name }}</option>
            @endforeach
        </select>
        <br><br>

        <button type="submit">Guardar</button>
    </form>
    <br>
    <a href="{{ route('superheroes_crud.index') }}">Regresar a la lista</a>
</body>
</html>