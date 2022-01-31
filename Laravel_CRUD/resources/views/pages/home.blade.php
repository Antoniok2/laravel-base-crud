@extends('layouts.main-layout')

@section('content')
    <h3>
        <a href="{{ route('create') }}">CREATE NEW COMIC</a>
    </h3>

    <h2>Lista Fumetti</h2>
    <ul>
        @foreach ($comics as $comic)
            <li>
                Fumetto:
                <a href="{{ route('detail', $comic -> id) }}">
                    {{ $comic -> title }}
                </a>
            </li>
            
        @endforeach
    </ul>
@endsection