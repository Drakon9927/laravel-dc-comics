@extends('layouts.app')

@section('title', 'Add New Comic')

@section('content')
    <h1>Add a New Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="thumb">Thumbnail URL:</label>
        <input type="text" id="thumb" name="thumb" required><br><br>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required><br><br>

        <label for="series">Series:</label>
        <input type="text" id="series" name="series" required><br><br>

        <label for="sale_date">Sale Date:</label>
        <input type="date" id="sale_date" name="sale_date" required><br><br>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required><br><br>

        <button type="submit">Add Comic</button>
    </form>
@endsection

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif