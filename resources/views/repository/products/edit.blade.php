@extends('layouts.app')

@section('title', 'Edit Product - Repository Approach')

@section('content')
<div class="tw:flex tw:justify-between tw:items-center tw:mb-6 tw:pb-5 tw:border-b tw:border-gray-200">
    <div>
        <h1 class="tw:text-3xl tw:font-bold tw:text-gray-900">Edit Product <span class="tw:inline-flex tw:items-center tw:px-3 tw:py-1 tw:rounded-full tw:text-xs tw:font-semibold tw:bg-green-100 tw:text-green-800">Repository Pattern</span></h1>
        <p class="tw:mt-2 tw:text-sm tw:text-gray-600">Update product information</p>
    </div>
    <a href="{{ route('repository.products.index') }}" class="tw:inline-flex tw:items-center tw:px-4 tw:py-2 tw:bg-gray-100 tw:text-gray-700 tw:font-semibold tw:rounded-lg hover:tw:bg-gray-200 tw:transition-colors">
        <svg class="tw:w-5 tw:h-5 tw:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Back to List
    </a>
</div>

<div class="tw:bg-white tw:shadow-md tw:rounded-lg tw:p-6 sm:tw:p-8">
    <form action="{{ route('repository.products.update', $product) }}" method="POST" class="tw:space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="tw:block tw:text-sm tw:font-semibold tw:text-gray-700 tw:mb-2">Product Name <span class="tw:text-red-500">*</span></label>
            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" required
                   class="tw:w-full tw:px-4 tw:py-2.5 tw:border tw:border-gray-300 tw:rounded-lg focus:tw:outline-none focus:tw:ring-2 focus:tw:ring-green-500 focus:tw:border-transparent tw:transition-all @error('name') tw:border-red-500 @enderror">
            @error('name')
                <p class="tw:mt-2 tw:text-sm tw:text-red-600 tw:flex tw:items-center">
                    <svg class="tw:w-4 tw:h-4 tw:mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div>
            <label for="description" class="tw:block tw:text-sm tw:font-semibold tw:text-gray-700 tw:mb-2">Description</label>
            <textarea id="description" name="description" rows="4"
                      class="tw:w-full tw:px-4 tw:py-2.5 tw:border tw:border-gray-300 tw:rounded-lg focus:tw:outline-none focus:tw:ring-2 focus:tw:ring-green-500 focus:tw:border-transparent tw:transition-all tw:resize-vertical @error('description') tw:border-red-500 @enderror">{{ old('description', $product->description) }}</textarea>
            @error('description')
                <p class="tw:mt-2 tw:text-sm tw:text-red-600 tw:flex tw:items-center">
                    <svg class="tw:w-4 tw:h-4 tw:mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div>
            <label for="price" class="tw:block tw:text-sm tw:font-semibold tw:text-gray-700 tw:mb-2">Price <span class="tw:text-red-500">*</span></label>
            <div class="tw:relative tw:rounded-lg tw:shadow-sm">
                <div class="tw:absolute tw:inset-y-0 tw:left-0 tw:pl-3 tw:flex tw:items-center tw:pointer-events-none">
                    <span class="tw:text-gray-500 sm:tw:text-sm">$</span>
                </div>
                <input type="number" id="price" name="price" step="0.01" value="{{ old('price', $product->price) }}" required
                       class="tw:w-full tw:pl-7 tw:pr-4 tw:py-2.5 tw:border tw:border-gray-300 tw:rounded-lg focus:tw:outline-none focus:tw:ring-2 focus:tw:ring-green-500 focus:tw:border-transparent tw:transition-all @error('price') tw:border-red-500 @enderror">
            </div>
            @error('price')
                <p class="tw:mt-2 tw:text-sm tw:text-red-600 tw:flex tw:items-center">
                    <svg class="tw:w-4 tw:h-4 tw:mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="tw:flex tw:gap-3 tw:pt-4 tw:border-t tw:border-gray-200">
            <button type="submit" class="tw:flex-1 tw:inline-flex tw:justify-center tw:items-center tw:px-6 tw:py-3 tw:bg-green-600 tw:text-white tw:font-semibold tw:rounded-lg hover:tw:bg-green-700 tw:transition-colors tw:shadow-md hover:tw:shadow-lg">
                <svg class="tw:w-5 tw:h-5 tw:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Update Product
            </button>
            <a href="{{ route('repository.products.index') }}" class="tw:flex-1 tw:inline-flex tw:justify-center tw:items-center tw:px-6 tw:py-3 tw:bg-gray-100 tw:text-gray-700 tw:font-semibold tw:rounded-lg hover:tw:bg-gray-200 tw:transition-colors">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
