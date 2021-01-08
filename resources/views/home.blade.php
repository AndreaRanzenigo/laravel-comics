@extends('layout.main')

@section('content')
<main>
    <div class="container">
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
    </div>
</main>
@endsection