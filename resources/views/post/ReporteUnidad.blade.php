
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Unidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
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
        
        <button class="btn btn-primary me-2" onclick="window.location.href='https://caguamitas-chipichapa.hf.space/ReporteUnidad'">Consultar</button>
                    <button class="btn btn-secondary me-2" onclick="window.location.href='https://caguamitas-chipichapa.hf.space/ReporteUnidadpdf'">Imprimir</button>
                    <button class="btn btn-success" onclick="window.location.href='https://caguamitas-chipichapa.hf.space/ReporteUnidad'">Guardar</button>
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
    
    <div class="text-end">
 <p>  <center>   <strong>Número de Servicios en el Período:</strong> 0
    </div></center>
    </p>
    
  <center>  <div class="buttons-container">
  <button class="btn btn-secondary me-2" onclick="window.location.href='https://caguamitas-chipichapa.hf.space/ReporteUnidadpdf'">Imprimir</button>
  <button class="btn btn-success" onclick="window.location.href='https://caguamitas-chipichapa.hf.space/ReporteUnidad'">Guardar</button>
    </center>
    </div>
</div>



<center><p>&copy; Sistema Central Taxis 'Grito' 2024</p> </center>

</body>
</html>
