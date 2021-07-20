@extends('layout.main')

@section('content')
    <h1>Kategoria: {{ $mainCategoryName }} / {{ $subcategoryName }}</h1>
    <h2 class="border-bottom">Ćwiczenie</h2>

    <form action="{{ url()->current() }}" method="post" class="text-right mt-3">
        @foreach($words as $word)
            <div class="form-group row">
                <label for="{{ $word->name_pl }}" class="col-md-2 col-form-label offset-2">{{ $word->name_pl }}</label>
                <div class="col-md-5">
                    <input type="text" name="{{ $word->name_pl }}" id="{{ $word->name_pl }}" class="form-control">
                </div>
            </div>
        @endforeach

        <div class="text-center">
            <button type="submit" class="btn btn-success mt-3">Sprawdź rozwiązania!</button>
        </div>
    </form>
@endsection
