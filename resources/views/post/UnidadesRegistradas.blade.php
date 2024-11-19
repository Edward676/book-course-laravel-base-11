<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post/Lista de Taxis</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <center><b><h1>Lista de Taxis Registrados</h1></b></center>

        <!-- Formulario para registrar un nuevo taxi -->
        <form action="{{ route('taxis.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="placa">Placa:</label>
                <input type="text" name="placa" id="placa" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" id="modelo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" name="color" id="color" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="conductor">Conductor:</label>
                <input type="text" name="conductor" id="conductor" class="form-control" required>
            </div>
            
        </form>

        <!-- Tabla para mostrar los taxis registrados -->
        <table class="table mt-3">
            <thead>
                
            </thead>
            <tbody>
                @if(session('no_orden'))
                    <input type="text" name="Unidad " value="{{session('Taxi')}}" class="Unidades">
                    <tr>
                        <td>{{ $taxi->id }}</td>
                        <td>{{ $taxi->placa }}</td>
                        <td>{{ $taxi->modelo }}</td>
                        <td>{{ $taxi->color }}</td>
                        <td>{{ $taxi->conductor }}</td>
                    </tr>
                    @endif
            </tbody>
        </table>
    </div>
</body>
</html>

<center><p>&copy; Sistema Central Taxis 'Grito' 2024</p> </center>

