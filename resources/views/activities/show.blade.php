<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Actividad</title>
</head>
<body>
    <h1>Detalles de la Actividad</h1>

    <p>Tipo: {{ $activity->type }}</p>
    <p>Fecha: {{ $activity->date }}</p>
    <p>Pagado: {{ $activity->paid ? 'Sí' : 'No' }}</p>
    <p>Notas: {{ $activity->notes }}</p>
    <p>Satisfacción: {{ $activity->satisfaction }}</p>

    <a href="{{ route('activities.index') }}">Volver a la lista</a>
</body>
</html>