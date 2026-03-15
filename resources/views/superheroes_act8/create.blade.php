<!DOCTYPE html>
<html>
<head>
    <title>Crear Superhéroe</title>
</head>
<body>
    <h1>Agregar un Nuevo Superhéroe</h1>
    
    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf 
        
        <label>Nombre del Superhéroe:</label>
        <input type="text" name="name" required>
        <br><br>

        <label>Elige su Universo:</label>
        <select name="universe_id" required>
            <option value="">-- Selecciona uno --</option>
            @foreach ($universes as $universo)
                <option value="{{ $universo->id }}">{{ $universo->name }}</option>
            @endforeach
        </select>
        <br><br>

        <button type="submit">Guardar Superhéroe</button>
    </form>
    <br>
    <a href="{{ route('superheroes.index') }}">Cancelar y regresar</a>
</body>
</html>