@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" id="price" name="price" value="{{ old('price', $product->price) }}">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
