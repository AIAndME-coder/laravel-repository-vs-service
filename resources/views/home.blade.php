@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Hero Section -->
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
        <div class="p-6 lg:p-8 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
            <h1 class="text-4xl font-bold text-white mb-4">
                Laravel Repository vs Service Pattern
            </h1>
            <p class="text-lg text-white opacity-90">
                A comprehensive demonstration of architectural patterns in Laravel
            </p>
        </div>

        <div class="bg-gray-200 dark:bg-gray-700 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
            <!-- Repository Pattern Card -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <div class="rounded-full bg-blue-500 p-3 mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Repository Pattern</h2>
                </div>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Abstracts the data layer, providing a collection-like interface for accessing domain objects.
                </p>
                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-300">
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2">✓</span>
                        <span>Separation of concerns</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2">✓</span>
                        <span>Testability improvements</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2">✓</span>
                        <span>Reusable queries</span>
                    </li>
                </ul>
            </div>

            <!-- Service Pattern Card -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <div class="rounded-full bg-purple-500 p-3 mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Service Pattern</h2>
                </div>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Encapsulates business logic and coordinates application operations across multiple sources.
                </p>
                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-300">
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2">✓</span>
                        <span>Business logic isolation</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2">✓</span>
                        <span>Transaction management</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2">✓</span>
                        <span>Complex operations</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 text-center">
            <div class="text-4xl mb-4">🎯</div>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Clean Architecture</h3>
            <p class="text-sm text-gray-600 dark:text-gray-300">
                Structured code following SOLID principles
            </p>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 text-center">
            <div class="text-4xl mb-4">🚀</div>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Scalable Design</h3>
            <p class="text-sm text-gray-600 dark:text-gray-300">
                Easily maintainable and extendable codebase
            </p>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 text-center">
            <div class="text-4xl mb-4">✨</div>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Best Practices</h3>
            <p class="text-sm text-gray-600 dark:text-gray-300">
                Industry-standard patterns and conventions
            </p>
        </div>
    </div>

    <!-- Getting Started -->
    <div class="mt-8 bg-white dark:bg-gray-800 rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Getting Started</h2>
        <div class="prose dark:prose-invert max-w-none">
            <p class="text-gray-600 dark:text-gray-300 mb-4">
                This project demonstrates the implementation of both Repository and Service patterns in Laravel.
                Explore the codebase to see how these patterns work together to create a clean, maintainable architecture.
            </p>
            <div class="bg-gray-100 dark:bg-gray-700 rounded-lg p-4 font-mono text-sm">
                <p class="text-gray-800 dark:text-gray-200">
                    # Run migrations<br>
                    <span class="text-blue-600 dark:text-blue-400">docker compose exec laravel-app php artisan migrate</span>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
