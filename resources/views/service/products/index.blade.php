@extends('layouts.app')

@section('title', 'Products - Service Layer Approach')

@section('content')
<div class="tw:flex tw:justify-between tw:items-center tw:mb-6 tw:pb-5 tw:border-b tw:border-gray-200">
    <div>
        <h1 class="tw:text-3xl tw:font-bold tw:text-gray-900">Products <span class="tw:inline-flex tw:items-center tw:px-3 tw:py-1 tw:rounded-full tw:text-xs tw:font-semibold tw:bg-amber-100 tw:text-amber-800">Service Layer</span></h1>
        <p class="tw:mt-2 tw:text-sm tw:text-gray-600">Manage products using service layer pattern</p>
    </div>
    <a href="{{ route('service.products.create') }}" class="tw:inline-flex tw:items-center tw:px-4 tw:py-2 tw:bg-amber-600 tw:text-white tw:font-semibold tw:rounded-lg hover:tw:bg-amber-700 tw:transition-colors tw:shadow-sm">
        <svg class="tw:w-5 tw:h-5 tw:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        Create Product
    </a>
</div>

@if(session('success'))
    <div class="tw:mb-6 tw:p-4 tw:bg-green-50 tw:border-l-4 tw:border-green-500 tw:rounded-r-lg tw:flex tw:items-start">
        <svg class="tw:w-5 tw:h-5 tw:text-green-500 tw:mr-3 tw:flex-shrink-0 tw:mt-0.5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
        </svg>
        <p class="tw:text-sm tw:text-green-700 tw:font-medium">{{ session('success') }}</p>
    </div>
@endif

<div class="tw:bg-white tw:shadow-md tw:rounded-lg tw:overflow-hidden">
    <table class="tw:min-w-full tw:divide-y tw:divide-gray-200">
        <thead class="tw:bg-gray-50">
            <tr>
                <th class="tw:px-6 tw:py-3 tw:text-left tw:text-xs tw:font-semibold tw:text-gray-700 tw:uppercase tw:tracking-wider">ID</th>
                <th class="tw:px-6 tw:py-3 tw:text-left tw:text-xs tw:font-semibold tw:text-gray-700 tw:uppercase tw:tracking-wider">Name</th>
                <th class="tw:px-6 tw:py-3 tw:text-left tw:text-xs tw:font-semibold tw:text-gray-700 tw:uppercase tw:tracking-wider">Description</th>
                <th class="tw:px-6 tw:py-3 tw:text-left tw:text-xs tw:font-semibold tw:text-gray-700 tw:uppercase tw:tracking-wider">Price</th>
                <th class="tw:px-6 tw:py-3 tw:text-right tw:text-xs tw:font-semibold tw:text-gray-700 tw:uppercase tw:tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="tw:bg-white tw:divide-y tw:divide-gray-200">
            @forelse($products as $product)
                <tr class="hover:tw:bg-gray-50 tw:transition-colors">
                    <td class="tw:px-6 tw:py-4 tw:whitespace-nowrap tw:text-sm tw:font-medium tw:text-gray-900">#{{ $product->id }}</td>
                    <td class="tw:px-6 tw:py-4 tw:whitespace-nowrap tw:text-sm tw:font-semibold tw:text-gray-900">{{ $product->name }}</td>
                    <td class="tw:px-6 tw:py-4 tw:text-sm tw:text-gray-600 tw:max-w-xs tw:truncate">{{ Str::limit($product->description, 50) }}</td>
                    <td class="tw:px-6 tw:py-4 tw:whitespace-nowrap tw:text-sm tw:font-bold tw:text-amber-600">${{ number_format($product->price, 2) }}</td>
                    <td class="tw:px-6 tw:py-4 tw:whitespace-nowrap tw:text-right tw:text-sm tw:font-medium">
                        <div class="tw:flex tw:justify-end tw:gap-2">
                            <a href="{{ route('service.products.show', $product) }}" class="tw:inline-flex tw:items-center tw:px-3 tw:py-1.5 tw:bg-gray-100 tw:text-gray-700 tw:text-xs tw:font-semibold tw:rounded hover:tw:bg-gray-200 tw:transition-colors">
                                <svg class="tw:w-4 tw:h-4 tw:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                View
                            </a>
                            <a href="{{ route('service.products.edit', $product) }}" class="tw:inline-flex tw:items-center tw:px-3 tw:py-1.5 tw:bg-blue-600 tw:text-white tw:text-xs tw:font-semibold tw:rounded hover:tw:bg-blue-700 tw:transition-colors">
                                <svg class="tw:w-4 tw:h-4 tw:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                                Edit
                            </a>
                            <form action="{{ route('service.products.destroy', $product) }}" method="POST" class="tw:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')" class="tw:inline-flex tw:items-center tw:px-3 tw:py-1.5 tw:bg-red-600 tw:text-white tw:text-xs tw:font-semibold tw:rounded hover:tw:bg-red-700 tw:transition-colors">
                                    <svg class="tw:w-4 tw:h-4 tw:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="tw:px-6 tw:py-16 tw:text-center">
                        <svg class="tw:mx-auto tw:h-12 tw:w-12 tw:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                        </svg>
                        <h3 class="tw:mt-2 tw:text-sm tw:font-semibold tw:text-gray-900">No products</h3>
                        <p class="tw:mt-1 tw:text-sm tw:text-gray-500">Get started by creating a new product.</p>
                        <div class="tw:mt-6">
                            <a href="{{ route('service.products.create') }}" class="tw:inline-flex tw:items-center tw:px-4 tw:py-2 tw:bg-amber-600 tw:text-white tw:text-sm tw:font-semibold tw:rounded-lg hover:tw:bg-amber-700">
                                <svg class="tw:w-5 tw:h-5 tw:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                                Create Product
                            </a>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="tw:mt-6">
    {{ $products->links() }}
</div>
@endsection
