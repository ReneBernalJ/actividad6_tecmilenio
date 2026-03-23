<!DOCTYPE html>
<html>
<head><title>Universos</title></head>
<body>
    <h1>Lista de Universos</h1>
    <a href="{{ route('universes_crud.create') }}"><button>Crear Nuevo Universo</button></a>
    <br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        @foreach ($universes as $universo)
        <tr>
            <td>{{ $universo->id }}</td>
            <td>{{ $universo->name }}</td>
            <td>
                <a href="{{ route('universes_crud.show', $universo->id) }}">Ver</a> |
                <a href="{{ route('universes_crud.edit', $universo->id) }}">Editar</a> |
                <form action="{{ route('universes_crud.destroy', $universo->id) }}" method="POST" style="display:inline;">
                    @csrf 
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>