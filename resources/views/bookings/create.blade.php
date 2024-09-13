<form action="{{ route('bookings.store') }}" method="POST">
    @csrf
    <label for="name">Nombre del cliente:</label>
    <input type="text" name="name" id="name" required><br>

    <label for="checkInDate">Fecha de entrada:</label>
    <input type="date" name="checkInDate" id="checkInDate" required><br>

    <label for="checkOutDate">Fecha de salida:</label>
    <input type="date" name="checkOutDate" id="checkOutDate" required><br>

    <label for="room_id">Habitación:</label>
    <select name="room_id" id="room_id" required>
        @foreach($rooms as $room)
            <option value="{{ $room->id }}">{{ $room->roomNumber }} - {{ $room->roomType }}</option>
        @endforeach
    </select><br>

    <label for="status">Estado:</label>
    <select name="status" id="status" required>
        <option value="Check In">Check In</option>
        <option value="In Progress">In Progress</option>
        <option value="Check Out">Check Out</option>
    </select><br>

    <button type="submit">Crear Reserva</button>
</form>