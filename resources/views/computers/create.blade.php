@extends('layout')
@section('title', 'create')

@section('content')
    <div>
        <h1>create</h1>
    </div>

    <div class="flex justify-center">
        <form action="{{ route('computers.store') }}" method="post">
            @csrf
            <div>
                <label for="computer-name">computer name</label>
                <input type="text" id="computer-name" value="{{old('computer-name')}}" name="computer-name">
                @error('computer-name')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label for="computer-origin">computer origin</label>
                <input type="text" id="computer-origin" value="{{old('computer-origin')}}" name="computer-origin">
                @error('computer-origin')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label for="computer-price">computer price</label>
                <input type="text" id="computer-price" value="{{old('computer-price')}}" name="computer-price">
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
