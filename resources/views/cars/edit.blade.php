@extends('layout')

@section('content')
    <h1>Edit Car</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('cars.update', $car->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Make:</label>
        <input type="text" name="make" value="{{ $car->make }}">
        <label>Model:</label>
        <input type="text" name="model" value="{{ $car->model }}">
        <label>Year:</label>
        <input type="number" name="year" value="{{ $car->year }}">
        <label>Price:</label>
        <input type="number" step="0.01" name="price" value="{{ $car->price }}">
        <button type="submit">Update Car</button>
    </form>
@endsection
