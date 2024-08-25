@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" id="price" name="price" value="{{ old('price') }}">
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
