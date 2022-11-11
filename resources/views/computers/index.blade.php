@extends('layout')
@section('title', 'index')

@section('content')
    <h1>computers</h1>
    @if (count($computers) > 0)
        <div>
            @foreach($computers as $computer)
                <li>
                    <a href="{{ route('computers.show', ['computer' => $computer['id']] )}}"> {{$computer['name']}} </a>
                </li>
            @endforeach
        </div>
    @else
        <h3>there are not computers to display</h3>
    @endif
@endsection
