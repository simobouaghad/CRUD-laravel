@extends('layout')
@section('title', 'show')

@section('content')
        <div>
            <h2> product {{$computer['id']}} </h2>
            <h4> {{$computer['name']}} </h4>
            <h4> {{$computer['price']}} </h4>
            <h4> {{$computer['origin']}} </h4>
        </div>

        <a href="{{route('computers.edit', $computer->id)}}" class="edit-btn">edit</a>

        <form action="{{route('computers.destroy', $computer->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <input class="delete-btn" type="submit" value="delete">
        </form>
@endsection
