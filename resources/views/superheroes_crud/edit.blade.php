<!DOCTYPE html>
<html>
<head><title>Editar Superhéroe</title></head>
<body>
    <h1>Editar Superhéroe</h1>
    <form action="{{ route('superheroes_crud.update', $superhero->id) }}" method="POST">
        @csrf 
        @method('PUT')
        
        <label>Nombre del Héroe:</label>
        <input type="text" name="name" value="{{ $superhero->name }}" required>
        <br><br>

        <label>Universo:</label>
        <select name="universe_id" required>
            @foreach ($universes as $universo)
                <option value="{{ $universo->id }}" {{ $universo->id == $superhero->universe_id ? 'selected' : '' }}>
                    {{ $universo->name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <button type="submit">Actualizar Cambios</button>
    </form>
    <br>
    <a href="{{ route('superheroes_crud.index') }}">Regresar a la lista</a>
</body>
</html>