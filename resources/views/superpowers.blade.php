<h1>Lista de Poderes</h1>
<table border="1">
    @foreach ($superpowers as $p)
    <tr><td>{{ $p->name }}</td></tr> @endforeach
</table>