@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    <a href="{{ route('products.create') }}">Create New Product</a>
    <ul>
        @foreach($products as $product)
            <li>
                <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                <a href="{{ route('products.edit', $product) }}">Edit</a>
                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
