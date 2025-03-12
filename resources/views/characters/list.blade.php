<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes Guardados</title>
</head>
<body>
    <h1>Personajes Guardados en la Base de Datos</h1>
    <a href="{{ route('characters.fetch') }}">Volver a la API</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Especie</th>
            <th>Acciones</th>
        </tr>
        @foreach ($characters as $character)
            <tr>
                <td>{{ $character->id }}</td>
                <td>{{ $character->name }}</td>
                <td>{{ $character->status }}</td>
                <td>{{ $character->species }}</td>
                <td>
                    <a href="{{ route('characters.edit', $character->id) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
