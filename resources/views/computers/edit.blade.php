@extends('layout')
@section('title', 'create')

@section('content')
    <div>
        <h1>edit computer</h1>
    </div>

    <div class="flex justify-center">
        <form action="{{ route('computers.update', ['computer' => $computer->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="computer-name">computer name</label>
                <input type="text" id="computer-name" value="{{$computer->name}}" name="computer-name">
                @error('computer-name')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label for="computer-origin">computer origin</label>
                <input type="text" id="computer-origin" value="{{$computer->origin}}" name="computer-origin">
                @error('computer-origin')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label for="computer-price">computer price</label>
                <input type="text" id="computer-price" value="{{$computer->price}}" name="computer-price">
                @error('computer-price')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
