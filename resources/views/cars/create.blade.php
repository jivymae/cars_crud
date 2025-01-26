@extends('layout')

@section('content')
    <h1>Add Car</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <label>Make:</label>
        <input type="text" name="make" value="{{ old('make') }}">
        <label>Model:</label>
        <input type="text" name="model" value="{{ old('model') }}">
        <label>Year:</label>
        <input type="number" name="year" value="{{ old('year') }}">
        <label>Price:</label>
        <input type="number" step="0.01" name="price" value="{{ old('price') }}">
        <button type="submit">Add Car</button>
    </form>
@endsection
