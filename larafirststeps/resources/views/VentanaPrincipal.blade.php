<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Taxis "Grito"</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
       <center> <h1>Sistema Central de Taxis "Grito"</h1>
</center>
<center><header class="imagen">
        <img src="{{ asset('imagen.jpg') }}" class="imagen">
    </header>
</center>


<aside class="menu p-3">
            <h5>MENU OPERACIONAL<h5>
            <div class="accordion" id="menuAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#servicios" aria-expanded="true">
                            Servicios
                        </button>
                    </h2>
                    <div id="servicios" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <a href="{{ route('RegistrarNuevoServicio') }}"target="_blank">Generar Nuevo Servicio</a>
                            <a href="{{ route('RegistrarServicioProgramado') }}"target="_blank"><p>Programar Servicio</p></a>
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#unidades">
                            Unidades
                        </button>
                    </h2>
                    <div id="unidades" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <a href="{{ route('RegistrarNuevaUnidad') }}"target="_blank">Registrar Nueva Unidad</a>
                            <a href="{{ route('UnidadesRegistradas') }}"target="_blank"><p>Unidades Registradas</p></a>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#reportes">
                            Reportes
                        </button>
                    </h2>
                    <div id="reportes" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <a href="{{ route('ReporteGeneral') }}"target="_blank">Reporte General</a>
                            <a href="{{ route('ReporteServiciosUnidad') }}"target="_blank"><p>Rep. Servicios por Unidad</p></a>
                            <a href="{{ route('ReporteUnidad') }}"target="_blank"><p>Reporte Unidad</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>






        <center><p>&copy; Sistema Central Taxis 'Grito' 2024</p>
</center>
    </footer>
</body>
</html>
