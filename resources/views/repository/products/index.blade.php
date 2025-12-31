@extends('layouts.app')

@section('title', 'Products - Repository Approach')

@section('content')
<div class="header">
    <div>
        <h1>Products <span class="badge" style="background: #10b981;">Repository Pattern</span></h1>
    </div>
    <a href="{{ route('repository.products.create') }}" class="btn btn-primary">+ Create Product</a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ Str::limit($product->description, 50) }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>
                    <div class="actions">
                        <a href="{{ route('repository.products.show', $product) }}" class="btn btn-secondary btn-sm">View</a>
                        <a href="{{ route('repository.products.edit', $product) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('repository.products.destroy', $product) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" style="text-align: center; color: #6b7280; padding: 40px;">No products found. Create your first product!</td>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="pagination">
    {{ $products->links() }}
</div>
@endsection
