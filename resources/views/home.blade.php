@extends('layout.main')

@section('content')
<main>
    {{-- Stampa comics --}}
    <ul>
        @foreach($comics as $comic)
        <li>
            <a href="{{ route('description', $comic['id']) }}">
                <img src="{{ $comic['image'] }}" alt="{{ $comic['title'] }}">
                <h2>{{ $comic['title'] }}</h2>

            </a>
        </li>
        @endforeach
    </ul>
</main>
@endsection