<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Taxis Registrados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            text-decoration: none;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Lista de Taxis Registrados</h1>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>Número Económico</th>
                <th>Municipio</th>
                <th>Clave Operador</th>
                <th>Clave Dueño</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>1</td>
                    <td>Tezonapa</td>
                    <td>tez</td>
                    <td>tez</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Orizaba</td>
                    <td>ori</td>
                    <td>ori</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Jalapilla</td>
                    <td>12345</td>
                    <td>54321</td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Asociacion Caritas</td>
                    <td>ASDFH</td>
                    <td>POI15</td>
                </tr>
                    </tbody>
    </table>
</body>
</html>