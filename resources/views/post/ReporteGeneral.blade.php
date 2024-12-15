
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte General</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
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
            background-color: green;
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

<div class="container report-container">
   <center> <h5>Reporte General</h5> </center>

    <div class="row mb-3">
        <div class="col-md-4">
            <label for="fechaInicio" class="form-label">Fecha Inicio:</label>
            <input type="date" id="fechaInicio" class="form-control">
        </div>
        <div class="col-md-4">
            <label for="fechaTermino" class="form-label">Fecha Termino:</label>
            <input type="date" id="fechaTermino" class="form-control">
        </div>
        <div class="col-md-4 d-flex align-items-end">
            <button class="btn btn-primary me-2" onclick="window.location.href='https://caguamitas-chipichapa.hf.space/ReporteGeneral'">Consultar</button>
            <button class="btn btn-secondary me-2" onclick="window.location.href='https://caguamitas-chipichapa.hf.space/ReporteGeneralpdf'">Imprimir</button>
            <form action="https://caguamitas-chipichapa.hf.space/ReporteGeneralexcel" method="post">
                <form action=" /index.php/ReporteGeneral" method="post">
                <input type="hidden" name="_token" value="496jvC5ZaM0zWWj3QhQbGT591gc4WxN4QAWS4UOr" autocomplete="off">                    <button type="submit" id="export_data" name='export_data'
                    value="Export to excel" class="btn btn-success">Guardar</button>
                </form>
        </div>
    </div>

    <div class="table-container">
        <table class="table table-bordered">
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
            <tbody>
                <tr>
                    <td colspan="6" class="text-center">Sin servicios registrados.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="text-end">
   <center>   <strong>Número de Servicios en el Período:</strong> 0
    </div></center>

   <center> <div class="buttons-container">
        <button class="btn btn-secondary me-2" onclick="window.location.href='https://caguamitas-chipichapa.hf.space/ReporteGeneralpdf'">Imprimir</button>
        <form action="https://caguamitas-chipichapa.hf.space/ReporteGeneralexcel" method="post">
                <form action=" /index.php/ReporteGeneral" method="post">
                <input type="hidden" name="_token" value="496jvC5ZaM0zWWj3QhQbGT591gc4WxN4QAWS4UOr" autocomplete="off">                    <button type="submit" id="export_data" name='export_data'
                    value="Export to excel" class="btn btn-success">Guardar</button>
                </form>
    </center>
    </div>
</div>



    

          <center><p>&copy; Sistema Central Taxis 'Grito' 2024</p> </center>

</body>
</html>