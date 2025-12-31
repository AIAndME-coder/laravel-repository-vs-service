@extends('layouts.app')

@section('title', 'Create Product - Simple Approach')

@section('content')
<div class="header">
    <div>
        <h1>Create Product <span class="badge">Simple Approach</span></h1>
    </div>
    <a href="{{ route('simple.products.index') }}" class="btn btn-secondary">← Back to List</a>
</div>

<form action="{{ route('simple.products.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Product Name *</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description">{{ old('description') }}</textarea>
        @error('description')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="price">Price *</label>
        <input type="number" id="price" name="price" step="0.01" value="{{ old('price') }}" required>
        @error('price')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="actions">
        <button type="submit" class="btn btn-primary">Create Product</button>
        <a href="{{ route('simple.products.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
</form>
@endsection
