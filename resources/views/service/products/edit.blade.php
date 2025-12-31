@extends('layouts.app')

@section('title', 'Edit Product - Service Layer Approach')

@section('content')
<div class="header">
    <div>
        <h1>Edit Product <span class="badge" style="background: #f59e0b;">Service Layer</span></h1>
    </div>
    <a href="{{ route('service.products.index') }}" class="btn btn-secondary">← Back to List</a>
</div>

<form action="{{ route('service.products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label for="name">Product Name *</label>
        <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" required>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description">{{ old('description', $product->description) }}</textarea>
        @error('description')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="price">Price *</label>
        <input type="number" id="price" name="price" step="0.01" value="{{ old('price', $product->price) }}" required>
        @error('price')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="actions">
        <button type="submit" class="btn btn-primary">Update Product</button>
        <a href="{{ route('service.products.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
</form>
@endsection
