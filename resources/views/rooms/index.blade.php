@extends('layouts.app')

@section('content')
    <h1>Rooms</h1>

    <a href="{{ route('rooms.create') }}">Create New Room</a>

    <table>
        <thead>
            <tr>
                <th>Room Number</th>
                <th>Description</th>
                <th>Room Type</th>
                <th>Amenities</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
                <tr>
                    <td>{{ $room->roomNumber }}</td>
                    <td>{{ $room->description }}</td>
                    <td>{{ $room->roomType }}</td>
                    <td>{{ implode(', ', $room->amenities ?? []) }}</td>
                    <td>{{ $room->price }}</td>
                    <td>{{ $room->discount }}</td>
                    <td>
                        <a href="{{ route('rooms.show', $room->id) }}">View</a>
                        <a href="{{ route('rooms.edit', $room->id) }}">Edit</a>
                        <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display:inline-block;">
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