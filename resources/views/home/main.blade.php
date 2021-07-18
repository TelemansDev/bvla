@extends('layout.main')

@section('content')
    <h1 class="pb-2 border-bottom">Wszystkie kategorie słówek</h1>
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-6 col-lg-4 mt-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="card-title">{{ $category->name }}</h4>
                        <h5 class="card-subtitle mb-2 text-muted">Zestawów: {{ $category->subcategories->count() }}</h5>
                        <a href="{{ route('category.mainCategory.show', ['category' => $category->slug]) }}" class="btn btn-primary btn-m active text-center" role="button" aria-pressed="true">Wybierz</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection