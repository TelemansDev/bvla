@extends('layout.main')

@section('content')
    <h1>Kategoria: {{ $mainCategoryName }} / {{ $subcategoryName }}</h1>
    <h2 class="border-bottom">Odpowiedzi</h2>

    <div class="alert alert-secondary text-center">
        Po wielkiej bitwie opadł kurz! Twój wynik to: {{ $userCorrectWordsCount }} / {{ $correctWordsCount }}
    </div>

    @foreach($comparisonWords as $comparisonWord)
        <div class="row">
            <div class="col-sm text-right m-2 alert alert-light">
                {{ $comparisonWord['name_pl'] }}
            </div>

            @if ($comparisonWord['answer_user'] === $comparisonWord['answer_correct'])
                <div class="col-sm text-left m-2 alert alert-success">
                    {{ $comparisonWord['answer_user'] }}
                </div>
            @elseif ($comparisonWord['answer_user'] !== null)
                <div class="col-sm text-left m-2 alert alert-danger">
                    {{ $comparisonWord['answer_user'] }} / Prawidłowa odpowiedź to: {{ $comparisonWord['answer_correct'] }}
                </div>
            @else
                <div class="col-sm text-left m-2 alert alert-danger">
                    Prawidłowa odpowiedź: {{ $comparisonWord['answer_correct'] }}
                </div>
            @endif
        </div>

    @endforeach

    <div class="text-center">
        <a href="{{ route('home.list')  }}" class="btn btn-primary btn-lg m-4" role="button" aria-pressed="true">Zobacz inne kategorie</a>
    </div>
@endsection
