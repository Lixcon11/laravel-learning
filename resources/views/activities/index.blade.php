<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Actividades</title>
</head>
<body>
    <h1>Lista de Actividades</h1>

    <a href="{{ route('activities.create') }}">Crear Nueva Actividad</a>

    <ul>
        @foreach ($activities as $activity)
            <li>
                {{ $activity->type }} el {{ $activity->date }} - Pagado: {{ $activity->paid ? 'Sí' : 'No' }}
                <a href="{{ route('activities.show', $activity->id) }}">Ver</a>
                <a href="{{ route('activities.edit', $activity->id) }}">Editar</a>
                <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>