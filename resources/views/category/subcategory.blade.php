@extends('layout.main')

@section('content')
    <h1 class="pb-2 border-bottom"></h1>
    <table class="mt-3 table table-bordered table-striped">
        <thead>
            <tr>
                <th class="col-xs-12">Lp.</th>
                <th>Angielski</th>
                <th>Polski</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($words ?? [] as $word)
                <tr>
                    <td>{{ $loop->iteration }}.</td>
                    <td>{{ $word->name_en }}</td>
                    <td>{{ $word->name_pl }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
