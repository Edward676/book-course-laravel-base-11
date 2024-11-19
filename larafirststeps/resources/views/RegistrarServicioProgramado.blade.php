

@section('content')
<div class="container">
    <title>Registrar Servicio Programado</title>

    <h5>Registrar Servicio Programado</h5>
    <form action="{{ route('taxi_services.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nombre del Cliente</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Ubicación de Recogida</label>
            <input type="text" name="pickup_location" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Ubicación de Destino</label>
            <input type="text" name="dropoff_location" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Hora de Recogida</label>
            <input type="datetime-local" name="pickup_time" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar Servicio</button>
    </form>
</div>


