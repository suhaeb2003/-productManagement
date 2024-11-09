@extends('layouts.app')

@section('content')
<h1>Product Details</h1>

<p><strong>Product ID:</strong> {{ $product->product_id }}</p>
<p><strong>Name:</strong> {{ $product->name }}</p>
<p><strong>Description:</strong> {{ $product->description }}</p>
<p><strong>Price:</strong> {{ $product->price }}</p>
<p><strong>Stock:</strong> {{ $product->stock }}</p>
<p><strong>Image:</strong> {{ $product->image }}</p>
<a href="{{ route('products.index') }}">Back to Products</a>
@endsection
