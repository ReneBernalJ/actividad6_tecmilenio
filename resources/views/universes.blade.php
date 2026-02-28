<h1>Lista de Universos</h1>
<table border="1">
    @foreach ($universes as $u)
    <tr><td>{{ $u->name }}</td></tr> @endforeach
</table>