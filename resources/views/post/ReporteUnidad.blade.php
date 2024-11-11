<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Unidad</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #FFD700;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header input {
            padding: 5px;
            margin: 0 5px;
        }
        .header button {
            padding: 5px 10px;
            margin-left: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .footer {
            text-align: center;
            margin-top: 10px;
        }
        .footer button {
            padding: 5px 10px;
        }
    </style>
</head>
<body>

<div class="container">
<center><h5>Reporte Unidad</h5></center>
    <div class="header">
        <label for="fechaInicio">Fecha Inicio: </label>
        <input type="date" id="fechaInicio" name="fecha_inicio">
        
        <label for="fechaTermino">Fecha Termino: </label>
        <input type="date" id="fechaTermino" name="fecha_termino">
        
        <label for="numUnidad">Num. Unidad:</label>
        <input type="text" id="numUnidad" name="num_unidad">
        
        <button onclick="consultar()">Consultar</button>
        <button onclick="imprimir()">Imprimir</button>
        <button onclick="guardar()">Guardar</button>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>Folio</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Dirección</th>
                <th>Unidad</th>
                <th>Comentarios</th>
            </tr>
        </thead>
        <tbody id="tablaContenido">
            <tr>
                <td colspan="6" style="text-align: center;">Sin servicios registrados.</td>
            </tr>
        </tbody>
    </table>
    
    <p>Número de Servicios en el Período: <span id="numServicios">0</span></p>
    
    <div class="footer">
        <button onclick="imprimir()">Imprimir</button>
        <button onclick="guardar()">Guardar</button>
    </div>
</div>

<script>
    function consultar() {
        alert("Consultando...");
    }

    function imprimir() {
        alert("Imprimiendo...");
    }

    function guardar() {
        alert("Guardando...");
    }
</script>

<center><p>&copy; Sistema Central Taxis 'Grito' 2024</p> </center>

</body>
</html>
