@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Comics List</h1>
        <div class="row">
            @foreach($comics as $comic)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->description }}</p>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection