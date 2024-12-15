<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Unidad de Taxi</title>
    <style>
        /* Estilo para el cuerpo */
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Contenedor principal */
        .container {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        /* Título */
        .container h1 {
            text-align: center;
            color: #333;
            font-size: 22px;
            margin-bottom: 20px;
        }

        /* Etiquetas */
        label {
            font-size: 14px;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }

        /* Campos de texto */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Botón */
        button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Pie de página */
        .footer {
            text-align: center;
            font-size: 12px;
            color: #aaa;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registrar Unidad de Taxi</h1>
        <form action="#" method="get">
            <label for="Numero economico">Numero Económico:</label>
            <input type="text" id="numEconomico" name="numEconomico" placeholder="Ingrese el número económico" required>

            <label for="Municipio">Municipio:</label>
            <input type="text" id="municipio" name="municipio" placeholder="Ingrese el municipio" required>

            <label for="Clave operador">Clave Operador:</label>
            <input type="text" id="claveOperador" name="claveOperador" placeholder="Ingrese la clave del operador" required>

            <label for="Clave dueño">Clave Dueño:</label>
            <input type="text" id="claveDuenio" name="claveDuenio" placeholder="Ingrese la clave del dueño" required>

            <button type="submit">Registrar</button>
        </form>
        <div class="footer">
            © Sistema Central Taxis 'Grito' 2024
        </div>
    </div>
</body>
</html>

