<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Servicio</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 5%;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Contenedor principal */
        .container {
            background: #ffffff;
            padding: 300px 300px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 722.5px;
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
        
        /* Título */
        .container h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Estilo para etiquetas de texto */
        label {
            font-size: 14px;
            color: #555;
            display: block;
            margin-top: 20px;
            text-align: left;
        }

        /* Estilo para campos de entrada */
        input, textarea {
            width: 100%;
            padding: 20px;
            margin-top: 10px;
            margin-bottom: 30px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Botón */
        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Pie de página */
        .footer {
            margin-top: 50px;
            font-size: 20px;
            color: #aaa;
        }

      
    </style>
</head>
<body>

    <div class="container">
        <h1>Registrar Nuevo Servicio</h1>
        <form action="#" method="get">
            <label for="nombre">Numero:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese el numero del servicio" required>

            <button type="submit">Buscar</button>
            <br><br>
            <table>
                <thead>
                    <tr>
                        <th>Select</th>
                        <th>Dirección</th>
                        <th>Localidad</th>
                        <th>Municipio</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>
                                <input type="radio" name="select">
                            </td>
                            <td>Norte 14#24</td>
                            <td>Orizaba</td>
                            <td>Orizaba</td>
                        </tr>
        
                        <tr>
                            <td>
                                <input type="radio" name="select">
                            </td>
                            <td>Norte 13#15</td>
                            <td>Rio Blanco</td>
                            <td>Rio Blanco</td>
                        </tr>
                    </tbody>
            </table>

            <center><p><button type="submit">Seleccionar</button>       <button type="submit">Agregar Dirección</button></p></center>
            
            <center><p><button type="submit">Asignar</button>  <button type="submit">Editar Dirección</button></p></center>

            <p><br><br>
                <table  border="1" style="width:100%; text-align:center;">
                    <tbody>
                        <p><sub><b>Ultimos Servicios Registrados</b></sub></p>
                        <tr> 
                                <th><button style="bottom: right;"> Editar</button></th>
                        </tr>
                    </tbody>
                </table>
            <table>
                <thead>
                    <tr>
                        <th>Folio</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Direccion</th>
                        <th>Localidad</th>
                        <th>Unidad</th>
                        <th>comentarios</th>
                        <th>Selección</th>
                    </tr>
                </thead>
                <tbody>

                        
                        <tr>
                            <td>1234</td>
                            <td>13/12/2024</td>
                            <td>21:55</td>
                            <td>Norte 14#2</td>
                            <td>Orizaba</td>
                            <td>227</td>
                            <td>Cobrar 50</td>
                            <td>
                                <input type="radio" name="select">
                            </td>
                        </tr>
        
                        <tr>
                            <td>5678</td>
                            <td>14/12/2024</td>
                            <td>06:55</td>
                            <td>Norte 14#2</td>
                            <td>Orizaba</td>
                            <td>78</td>
                            <td>Cobrar 70</td>
                            <td>
                                <input type="radio" name="select">
                            </td>
                        </tr>

                        <tr>
                            <td>9101112</td>
                            <td>15/12/2024</td>
                            <td>01:37</td>
                            <td>Sur 4 Norte2</td>
                            <td>Nogales</td>
                            <td>277</td>
                            <td>Cobrar 150</td>
                            <td>
                                <input type="radio" name="select">
                            </td>
                        
                        <tr>
                            <td>2583</td>
                            <td>16/12/2024</td>
                            <td>02:00</td>
                            <td>Sur 8 Oeste7</td>
                            <td>Xalapilla</td>
                            <td>68</td>
                            <td>Cobrar 100</td>
                            <td>
                                <input type="radio" name="select">
                            </td>
                        </tr>
                    </tbody>
            </table>
            </p>
            
        </form>
        <p><div class="footer">
            © Sistema Central Taxis 'Grito' 2024
        </div>
    </p>
    </div>  


</body>
</html>
