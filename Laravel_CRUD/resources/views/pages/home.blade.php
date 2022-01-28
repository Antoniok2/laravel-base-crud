@extends('layouts.main-layout')

@section('content')
    <h2>Lista Fumetti</h2>
    <ul>
        @foreach ($comics as $comic)
            <li>
                Fumetto:
                <a href="#">
                    {{ $comic -> title }}
                </a>
            </li>
            
        @endforeach
    </ul>
@endsection