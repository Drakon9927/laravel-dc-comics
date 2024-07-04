@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <img src="{{ $comic->thumb }}" alt="Cover image for {{ $comic->title }}">
        <p>{{ $comic->description }}</p>
        <p><strong>Price:</strong> {{ $comic->price }}</p>
        <p><strong>Release Date:</strong> {{ $comic->sale_date }}</p>
        <p><strong>Series:</strong> {{ $comic->series }}</p>
    </div>
@endsection