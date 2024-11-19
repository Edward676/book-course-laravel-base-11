<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Servicios por Unidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <center> <h5>Reporte Servicios por Unidad</h5> </center>
            </div>
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="fechaInicio" class="form-label">Fecha Inicio</label>
                        <input type="date" class="form-control" id="fechaInicio" required>
                    </div>
                    <div class="col-md-6">
                        <label for="fechaTermino" class="form-label">Fecha Término</label>
                        <input type="date" class="form-control" id="fechaTermino" required>
                    </div>
                    <div class="col-12 text-end">
                        <button type="button" class="btn btn-primary">Consultar</button>
                        <button type="button" class="btn btn-secondary">Imprimir</button>
                        <button type="button" class="btn btn-success">Guardar</button>
                    </div>
                </form>
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>Núm. Unidad</th>
                            <th>Frecuencia</th>
                            <th>Operador</th>
                            <th>Teléfono</th>
                            <th>Núm. Servicios</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" class="text-center">Sin servicios registrados.</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-end">
                    <button type="button" class="btn btn-secondary">Imprimir</button>
                    <button type="button" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<center><p>&copy; Sistema Central Taxis 'Grito' 2024</p> </center>
</html>
