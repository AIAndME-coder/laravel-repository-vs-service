@extends('layouts.app')

@section('title', 'View Product - Repository Approach')

@section('content')
<div class="header">
    <div>
        <h1>Product Details <span class="badge" style="background: #10b981;">Repository Pattern</span></h1>
    </div>
    <div class="actions">
        <a href="{{ route('repository.products.edit', $product) }}" class="btn btn-primary">Edit</a>
        <a href="{{ route('repository.products.index') }}" class="btn btn-secondary">← Back to List</a>
    </div>
</div>

<div style="background: #f9fafb; padding: 30px; border-radius: 8px; margin-top: 20px;">
    <div style="margin-bottom: 20px;">
        <label style="display: block; color: #6b7280; font-size: 14px; margin-bottom: 5px;">ID</label>
        <div style="font-size: 16px; color: #111827;">{{ $product->id }}</div>
    </div>

    <div style="margin-bottom: 20px;">
        <label style="display: block; color: #6b7280; font-size: 14px; margin-bottom: 5px;">Name</label>
        <div style="font-size: 16px; color: #111827; font-weight: 600;">{{ $product->name }}</div>
    </div>

    <div style="margin-bottom: 20px;">
        <label style="display: block; color: #6b7280; font-size: 14px; margin-bottom: 5px;">Description</label>
        <div style="font-size: 16px; color: #111827;">{{ $product->description ?: 'No description provided' }}</div>
    </div>

    <div style="margin-bottom: 20px;">
        <label style="display: block; color: #6b7280; font-size: 14px; margin-bottom: 5px;">Price</label>
        <div style="font-size: 24px; color: #10b981; font-weight: 700;">${{ number_format($product->price, 2) }}</div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
        <div>
            <label style="display: block; color: #6b7280; font-size: 14px; margin-bottom: 5px;">Created At</label>
            <div style="font-size: 14px; color: #111827;">{{ $product->created_at->format('M d, Y H:i') }}</div>
        </div>
        <div>
            <label style="display: block; color: #6b7280; font-size: 14px; margin-bottom: 5px;">Updated At</label>
            <div style="font-size: 14px; color: #111827;">{{ $product->updated_at->format('M d, Y H:i') }}</div>
        </div>
    </div>
</div>

<div style="margin-top: 30px;">
    <form action="{{ route('repository.products.destroy', $product) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete Product</button>
    </form>
</div>
@endsection
