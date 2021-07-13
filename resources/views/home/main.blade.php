@extends('layout.main')

@section('content')
    <h1>Wszystkie kategorie</h1>
    @foreach ($categories as $category)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $category->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Zestawów: {{ $category->subcategories->count() }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Słówek: </h6>
                <a href="#" class="btn btn-primary btn-sm active text-center" role="button" aria-pressed="true">Wybierz</a>
            </div>
        </div>
    @endforeach

    <br>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center">Podstawy</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
@endsection