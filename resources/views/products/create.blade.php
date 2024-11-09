@extends('layouts.app')

@section('content')
<div class="form-container">
    <h2 class="form-header">Create New Product</h2>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="product_id" class="form-label">Product ID</label>
        <input type="text" name="product_id" class="form-control" required>

        <label for="name" class="form-label">Product Name</label>
        <input type="text" name="name" class="form-control" required>

        <label for="description" class="form-label">Description</label>
        <textarea name="description" class="form-control"></textarea>

        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" name="price" class="form-control" required>

        <label for="stock" class="form-label">Stock</label>
        <input type="number" name="stock" class="form-control">

        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" class="form-control">

        <button type="submit" class="btn-submit">Add Product</button>
        <a href="{{ route('products.index') }}" class="btn-cancel">Cancel</a>
    </form>
</div>
@endsection
