<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte General</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        .report-container {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .table-container {
            margin-top: 20px;
        }
        .buttons-container {
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container report-container">
    <h3>Reporte General</h3>

    <!-- Filtros de Fecha -->
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
        
            <button class="btn btn-primary me-2" onclick="window.location.href='{{ route('consultar') }}'">Consultar</button>
            <button class="btn btn-secondary me-2" onclick="window.location.href='{{ route('imprimir') }}'">Imprimir</button>
            <button class="btn btn-success" onclick="window.location.href='{{ route('Guardar') }}'">Guardar</button>

        </div>
    </div>

    <!-- Tabla de Servicios -->
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

    <!-- Número de Servicios -->
    <div class="text-end">
        <strong>Número de Servicios en el Período:</strong> 0
    </div>

    <!-- Botones de Imprimir y Guardar -->
    <div class="buttons-container">
        <button class="btn btn-secondary me-2" onclick="window.location.href='{{ route('imprimir') }}'">Imprimir</button>
        <button class="btn btn-success" onclick="window.location.href='{{ route('Guardar') }}'">Guardar</button>
    </div>
</div>

<script>
    function consultar() {
        alert("Consulta de servicios realizada.");
    }

    function imprimir() {
        alert("Imprimiendo reporte.");
    }

    function guardar() {
        alert("Guardando reporte.");
    }
</script>

</body>

    
</html>

<center><p>&copy; Sistema Central Taxis 'Grito' 2024</p> </center>