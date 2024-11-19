<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Taxis</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista de Taxis Registrados</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Placa</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Conductor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($taxis as $taxi)
                <tr>
                    <td>{{ $taxi->id }}</td>
                    <td>{{ $taxi->placa }}</td>
                    <td>{{ $taxi->modelo }}</td>
                    <td>{{ $taxi->color }}</td>
                    <td>{{ $taxi->conductor }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
