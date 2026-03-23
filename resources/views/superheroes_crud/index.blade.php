<!DOCTYPE html>
<html>
<head><title>Superhéroes</title></head>
<body>
    <h1>Lista de Superhéroes</h1>
    <a href="{{ route('superheroes_crud.create') }}"><button>Crear Nuevo Superhéroe</button></a>
    <br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Universo</th>
            <th>Acciones</th>
        </tr>
        @foreach ($superheroes as $heroe)
        <tr>
            <td>{{ $heroe->id }}</td>
            <td>{{ $heroe->name }}</td>
            <td>{{ $heroe->universe->name }}</td>
            <td>
                <a href="{{ route('superheroes_crud.show', $heroe->id) }}">Ver</a> |
                <a href="{{ route('superheroes_crud.edit', $heroe->id) }}">Editar</a> |
                <form action="{{ route('superheroes_crud.destroy', $heroe->id) }}" method="POST" style="display:inline;">
                    @csrf 
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="{{ route('universes_crud.index') }}">Ir a ver los Universos</a>
</body>
</html>