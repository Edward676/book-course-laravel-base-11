<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Unidad de Taxi</title>
</head>
<body>
   <center> <h1>Registrar Unidad de Taxi</h1> </center>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('unidad_taxi.store') }}" method="POST">
        @csrf
        <p><label for="placa">Placa:</label>
        <input type="text" name="placa" id="placa" required>
        @error('placa')
            <p>{{ $message }}</p>
        @enderror
</p>

        <p><label for="modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo" required>
        @error('modelo')
            <p>{{ $message }}</p>
        @enderror
</p>

        <p><label for="anio">Año:</label>
        <input type="number" name="anio" id="anio" required>
        @error('anio')
            <p>{{ $message }}</p>
        @enderror
</p>

     <p>   <label for="capacidad">Capacidad:</label>
        <input type="number" name="capacidad" id="capacidad" required>
        @error('capacidad')
            <p>{{ $message }}</p>
        @enderror
</P>

        <button type="submit">Registrar</button>
    </form>
</body>
<center><p>&copy; Sistema Central Taxis 'Grito' 2024</p> </center>
</html>
