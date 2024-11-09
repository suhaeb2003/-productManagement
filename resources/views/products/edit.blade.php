@extends('layouts.app')

@section('content')
<div class="form-container">
    <h2 class="form-header">Edit Product</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="product_id" class="form-label">Product ID</label>
        <input type="text" name="product_id" class="form-control" value="{{ old('product_id', $product->product_id) }}" required>

        <label for="name" class="form-label">Product Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>

        <label for="description" class="form-label">Description</label>
        <textarea name="description" class="form-control">{{ old('description', $product->description) }}</textarea>

        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', $product->price) }}" required>

        <label for="stock" class="form-label">Stock</label>
        <input type="number" name="stock" class="form-control" value="{{ old('stock', $product->stock) }}">

        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" class="form-control">

        <button type="submit" class="btn-submit">Update Product</button>
        <a href="{{ route('products.index') }}" class="btn-cancel">Cancel</a>
    </form>
</div>
@endsection
