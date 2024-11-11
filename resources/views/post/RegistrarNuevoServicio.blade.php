<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Servicio</title>
</head>
<body>
    <center> <h1>Registrar Nuevo Servicio</h1> </center>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('servicios.store') }}" method="POST">
        @csrf
       <p> <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
</p> </div>

       <p> <div>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"></textarea>
</p> </div>

        <p> <div>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" required>
</p></div>
        <button type="submit">Registrar Servicio</button>
    </form>
</body>
</html>

<center><p>&copy; Sistema Central Taxis 'Grito' 2024</p> </center>


