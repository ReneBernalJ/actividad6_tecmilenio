<h1>Lista de Personajes</h1>
<table border="1">
    @foreach ($superheroes as $s)
    <tr><td>{{ $s->name }}</td></tr> @endforeach
</table>