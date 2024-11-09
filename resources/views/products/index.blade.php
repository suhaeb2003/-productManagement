@extends('layouts.app')

@section('content')
<h1>Products</h1>
<form method="GET" action="{{ route('products.index') }}">
    <input type="text" name="search" placeholder="Search by ID or description" value="{{ request('search') }}">
    <button type="submit">Search</button>
</form>

<a href="{{ route('products.create') }}">Add New Product</a>

<table>
    <thead>
        <tr>
            <th><a href="{{ route('products.index', ['sort' => 'name', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc']) }}">Name</a></th>
            <th><a href="{{ route('products.index', ['sort' => 'price', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc']) }}">Price</a></th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.show', $product) }}">View</a>
                    <a href="{{ route('products.edit', $product) }}">Edit</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $products->links() }}
@endsection
