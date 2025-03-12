<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Personaje</title>
</head>
<body>
    <h1>Editar Personaje</h1>
    <form action="{{ route('characters.update', $character->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{ $character->name }}">

        <label for="status">Estado:</label>
        <input type="text" name="status" value="{{ $character->status }}">

        <label for="species">Especie:</label>
        <input type="text" name="species" value="{{ $character->species }}">

        <button type="submit">Guardar Cambios</button>
    </form>

    <br>
    <a href="{{ route('characters.list') }}">Volver a la Lista</a>
</body>
</html>
