@extends('layouts.app')

@section('content')
    <h1>Create Contact</h1>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="date">Date:</label>
        <input type="datetime-local" name="date" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" required><br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" required><br>

        <label for="comment">Comment:</label>
        <textarea name="comment" required></textarea><br>

        <label for="status">Status:</label>
        <select name="status" required>
            <option value="Published">Published</option>
            <option value="Archived">Archived</option>
        </select><br>

        <button type="submit">Create</button>
    </form>
@endsection