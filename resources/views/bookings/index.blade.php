@extends('layouts.app')

@section('content')
    <h1>Bookings</h1>

    <a href="{{ route('bookings.create') }}">Create New Booking</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Room</th>
                <th>Check-in Date</th>
                <th>Check-out Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->room->roomNumber }}</td>
                    <td>{{ $booking->checkInDate }}</td>
                    <td>{{ $booking->checkOutDate }}</td>
                    <td>{{ $booking->status }}</td>
                    <td>
                        <a href="{{ route('bookings.show', $booking->id) }}">View</a>
                        <a href="{{ route('bookings.edit', $booking->id) }}">Edit</a>

                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection