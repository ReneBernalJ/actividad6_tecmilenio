<!DOCTYPE html>
<html>
<head>
    <title>Mis Superhéroes</title>
</head>
<body>
    <h1>Lista de Superhéroes</h1>
    
    <a href="{{ route('superheroes.create') }}"><button>Crear Nuevo Superhéroe</button></a>
    <br><br>

    <table border="1">
        <tr>
            <th>Nombre del Héroe</th>
            <th>Universo</th>
        </tr>
        @foreach ($superheroes as $heroe)
        <tr>
            <td>{{ $heroe->name }}</td>
            <td>{{ $heroe->universe->name }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>