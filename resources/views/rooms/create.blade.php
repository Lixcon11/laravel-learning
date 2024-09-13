@extends('layouts.app')

@section('content')
    <h1>Create New Room</h1>

    <form action="{{ route('rooms.store') }}" method="POST">
        @csrf
        <label for="roomNumber">Room Number:</label>
        <input type="text" name="roomNumber" id="roomNumber" required><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea><br>

        <label for="roomType">Room Type:</label>
        <select name="roomType" id="roomType" required>
            <option value="Single Bed">Single Bed</option>
            <option value="Double Bed">Double Bed</option>
            <option value="Double Superior">Double Superior</option>
            <option value="Suite">Suite</option>
        </select><br>

        <label for="amenities">Amenities:</label>
        <select name="amenities[]" id="amenities" multiple>
            <option value="AC">AC</option>
            <option value="Breakfast">Breakfast</option>
            <option value="Cleaning">Cleaning</option>
            <option value="Grocery">Grocery</option>
            <option value="Shop near">Shop near</option>
            <option value="Wifi">Wifi</option>
            <option value="Kitchen">Kitchen</option>
            <option value="Shower">Shower</option>
            <option value="Single Bed">Single Bed</option>
            <option value="Towels">Towels</option>
        </select><br>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" required><br>

        <label for="discount">Discount:</label>
        <input type="number" name="discount" id="discount"><br>

        <button type="submit">Create Room</button>
    </form>
@endsection