@extends('layout.main')

@section('content')
    <h1 class="pb-2 border-bottom">Kategoria: {{ $categoryName }}</h1>
    <div class="row">
        @foreach ($subcategories as $subcategory)
            <div class="col-md-6 col-lg-4 mt-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="card-title">{{ $subcategory->name }}</h4>
                        <h5 class="card-subtitle mb-2 text-muted">Słówek: {{ $subcategory->words->count() }}</h5>
                        <a href="{{ route('category.subcategory.show', ['categoryId' => $subcategory->main_category_id, 'subcategoryId' => $subcategory->id]) }}" class="btn btn-link btn-m active text-center" role="button" aria-pressed="true">Wybierz</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection