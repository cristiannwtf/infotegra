<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Personajes</title>
</head>
<body>
    <h1>Lista de Personajes desde la API</h1>
    <a href="{{ route('characters.save') }}">Guardar en la Base de Datos</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Especie</th>
            <th>Detalles</th>
        </tr>
        @foreach ($characters as $character)
            <tr>
                <td>{{ $character['id'] }}</td>
                <td>{{ $character['name'] }}</td>
                <td>{{ $character['status'] }}</td>
                <td>{{ $character['species'] }}</td>
                <td>
                    <a href="#" onclick="alert('Tipo: {{ $character['type'] ?? 'N/A' }}\nGénero: {{ $character['gender'] }}\nOrigen: {{ $character['origin']['name'] }}');">Ver Detalles</a>
                </td>
            </tr>
        @endforeach
    </table>
    <br>
    <a href="{{ route('characters.list') }}">Ver Personajes Guardados</a>
</body>
</html>
