<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Actividad</title>
</head>
<body>
    <h1>Crear Nueva Actividad</h1>

    <form action="{{ route('activities.store') }}" method="POST">
        @csrf
        
        <label for="user_id">ID del Usuario:</label>
        <input type="number" name="user_id" id="user_id"><br>
    
        <label for="type">Tipo de Actividad:</label>
        <select name="type" id="type">
            <option value="surf">Surf</option>
            <option value="windsurf">Windsurf</option>
            <option value="kayak">Kayak</option>
            <option value="atv">ATV</option>
            <option value="hot air balloon">Hot Air Balloon</option>
        </select><br>
    
        <label for="date">Fecha y Hora:</label>
        <input type="datetime-local" name="date" id="date"><br>
    
        <label for="paid">Pagado:</label>
        <input type="checkbox" name="paid" id="paid" value="1"><br>
    
        <label for="notes">Notas:</label>
        <textarea name="notes" id="notes"></textarea><br>
    
        <label for="satisfaction">Satisfacción (0-10):</label>
        <input type="number" name="satisfaction" id="satisfaction" min="0" max="10"><br>
    
        <button type="submit">Crear Actividad</button>
    </form>
</body>
</html>