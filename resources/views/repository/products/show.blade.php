@extends('layouts.app')

@section('title', 'View Product - Repository Approach')

@section('content')
<div class="tw:flex tw:justify-between tw:items-center tw:mb-6 tw:pb-5 tw:border-b tw:border-gray-200">
    <div>
        <h1 class="tw:text-3xl tw:font-bold tw:text-gray-900">Product Details <span class="tw:inline-flex tw:items-center tw:px-3 tw:py-1 tw:rounded-full tw:text-xs tw:font-semibold tw:bg-green-100 tw:text-green-800">Repository Pattern</span></h1>
        <p class="tw:mt-2 tw:text-sm tw:text-gray-600">View complete product information</p>
    </div>
    <div class="tw:flex tw:gap-3">
        <a href="{{ route('repository.products.edit', $product) }}" class="tw:inline-flex tw:items-center tw:px-4 tw:py-2 tw:bg-blue-600 tw:text-white tw:font-semibold tw:rounded-lg hover:tw:bg-blue-700 tw:transition-colors tw:shadow-sm">
            <svg class="tw:w-5 tw:h-5 tw:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
            </svg>
            Edit
        </a>
        <a href="{{ route('repository.products.index') }}" class="tw:inline-flex tw:items-center tw:px-4 tw:py-2 tw:bg-gray-100 tw:text-gray-700 tw:font-semibold tw:rounded-lg hover:tw:bg-gray-200 tw:transition-colors">
            <svg class="tw:w-5 tw:h-5 tw:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to List
        </a>
    </div>
</div>

<div class="tw:bg-white tw:shadow-lg tw:rounded-lg tw:overflow-hidden">
    <div class="tw:bg-gradient-to-r tw:from-green-500 tw:to-emerald-600 tw:px-6 tw:py-4">
        <h2 class="tw:text-2xl tw:font-bold tw:text-white">{{ $product->name }}</h2>
    </div>
    
    <div class="tw:p-6 sm:tw:p-8 tw:space-y-6">
        <div class="tw:grid tw:grid-cols-1 md:tw:grid-cols-2 tw:gap-6">
            <div class="tw:bg-gray-50 tw:p-4 tw:rounded-lg">
                <label class="tw:block tw:text-xs tw:font-semibold tw:text-gray-500 tw:uppercase tw:tracking-wide tw:mb-2">Product ID</label>
                <div class="tw:text-lg tw:font-mono tw:text-gray-900">#{{ $product->id }}</div>
            </div>

            <div class="tw:bg-gradient-to-br tw:from-green-50 tw:to-emerald-50 tw:p-4 tw:rounded-lg tw:border-2 tw:border-green-200">
                <label class="tw:block tw:text-xs tw:font-semibold tw:text-green-700 tw:uppercase tw:tracking-wide tw:mb-2">Price</label>
                <div class="tw:text-3xl tw:font-bold tw:text-green-600">${{ number_format($product->price, 2) }}</div>
            </div>
        </div>

        <div>
            <label class="tw:block tw:text-xs tw:font-semibold tw:text-gray-500 tw:uppercase tw:tracking-wide tw:mb-2">Description</label>
            <div class="tw:bg-gray-50 tw:p-4 tw:rounded-lg tw:text-gray-800 tw:leading-relaxed">
                {{ $product->description ?: 'No description provided' }}
            </div>
        </div>

        <div class="tw:grid tw:grid-cols-1 md:tw:grid-cols-2 tw:gap-6 tw:pt-4 tw:border-t tw:border-gray-200">
            <div>
                <label class="tw:block tw:text-xs tw:font-semibold tw:text-gray-500 tw:uppercase tw:tracking-wide tw:mb-2">Created At</label>
                <div class="tw:flex tw:items-center tw:text-sm tw:text-gray-900">
                    <svg class="tw:w-4 tw:h-4 tw:mr-2 tw:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    {{ $product->created_at->format('M d, Y H:i') }}
                </div>
            </div>
            <div>
                <label class="tw:block tw:text-xs tw:font-semibold tw:text-gray-500 tw:uppercase tw:tracking-wide tw:mb-2">Last Updated</label>
                <div class="tw:flex tw:items-center tw:text-sm tw:text-gray-900">
                    <svg class="tw:w-4 tw:h-4 tw:mr-2 tw:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    {{ $product->updated_at->format('M d, Y H:i') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tw:mt-6 tw:flex tw:justify-end">
    <form action="{{ route('repository.products.destroy', $product) }}" method="POST" class="tw:inline">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete this product? This action cannot be undone.')" 
                class="tw:inline-flex tw:items-center tw:px-6 tw:py-3 tw:bg-red-600 tw:text-white tw:font-semibold tw:rounded-lg hover:tw:bg-red-700 tw:transition-colors tw:shadow-md hover:tw:shadow-lg">
            <svg class="tw:w-5 tw:h-5 tw:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
            </svg>
            Delete Product
        </button>
    </form>
</div>
@endsection
