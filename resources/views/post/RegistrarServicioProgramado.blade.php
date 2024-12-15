
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Servicio Programado</title>
    <style>
        /* Estilo para el cuerpo */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
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
            font-size: 20px;
            margin-bottom: 20px;
        }

        /* Etiquetas */
        label {
            font-size: 14px;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }

        /* Campos de texto y selección */
        input[type="text"], input[type="datetime-local"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Botón */
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
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
        <h1>Registrar Servicio Programado</h1>
        <form action="#" method="get">

            <label for="fecha y hora">Fecha y Hora:</label>
            <input type="datetime-local" id="hora" name="hora" required>

            <label for="comentarios">Comentarios:</label>
            <input type="text" id="comentarios" name="comentarios" placeholder="Ingrese un comentario" required>

            
            <button type="submit">Registrar Servicio</button>
        </form>
        <div class="footer">
            © Sistema Central Taxis 'Grito' 2024
        </div>
    </div>
</body>
</html>