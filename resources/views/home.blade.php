@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="tw:max-w-7xl tw:mx-auto tw:px-4 tw:sm:px-6 tw:lg:px-8 tw:py-8">
    <!-- Hero Section -->
    <div class="tw:bg-white tw:dark:bg-gray-800 tw:overflow-hidden tw:shadow-2xl tw:sm:rounded-2xl">
        <div class="tw:relative tw:p-8 tw:lg:p-12 tw:bg-gradient-to-br tw:from-blue-600 tw:via-indigo-600 tw:to-purple-700 tw:overflow-hidden">
            <!-- Decorative background elements -->
            <div class="tw:absolute tw:top-0 tw:right-0 tw:w-64 tw:h-64 tw:bg-white tw:opacity-5 tw:rounded-full tw:-mr-32 tw:-mt-32"></div>
            <div class="tw:absolute tw:bottom-0 tw:left-0 tw:w-96 tw:h-96 tw:bg-white tw:opacity-5 tw:rounded-full tw:-ml-48 tw:-mb-48"></div>

            <div class="tw:relative tw:z-10">
                <div class="tw:inline-block tw:mb-4 tw:px-4 tw:py-2 tw:bg-white tw:bg-opacity-20 tw:rounded-full tw:backdrop-blur-sm">
                    <span class="tw:text-sm tw:font-semibold">Laravel Design Patterns</span>
                </div>
                <h1 class="tw:text-5xl tw:lg:text-6xl tw:font-extrabold tw:text-white tw:mb-6 tw:leading-tight">
                    Repository vs Service<br>
                    <span class="tw:text-blue-200">Pattern Architecture</span>
                </h1>
                <p class="tw:text-xl tw:text-blue-100 tw:mb-8 tw:max-w-3xl">
                    Master the art of building scalable, maintainable Laravel applications with industry-standard architectural patterns.
                </p>
                <div class="tw:flex tw:flex-wrap tw:gap-4">
                    <a href="#patterns" class="tw:px-6 tw:py-3 tw:bg-white tw:text-indigo-600 tw:font-semibold tw:rounded-lg tw:hover:bg-blue-50 tw:transition-all tw:shadow-lg tw:hover:shadow-xl tw:transform tw:hover:-translate-y-0.5">
                        Explore Patterns
                    </a>
                    <a href="#code-examples" class="tw:px-6 tw:py-3 tw:bg-transparent tw:border-2 tw:border-white tw:text-white tw:font-semibold tw:rounded-lg tw:hover:bg-white tw:hover:bg-opacity-10 tw:transition-all tw:backdrop-blur-sm">
                        View Examples
                    </a>
                </div>
            </div>
        </div>

        <!-- Pattern Comparison Section -->
        <div id="patterns" class="tw:bg-gray-50 tw:dark:bg-gray-900 tw:p-6 tw:sm:p-8 tw:lg:p-12">
            <div class="tw:text-center tw:mb-12">
                <h2 class="tw:text-3xl tw:font-bold tw:text-gray-900 tw:dark:text-white tw:mb-4">
                    Choose Your Architecture
                </h2>
                <p class="tw:text-lg tw:text-gray-600 tw:dark:text-gray-300 tw:max-w-2xl tw:mx-auto">
                    Both patterns offer unique advantages. Understanding when to use each is key to building robust applications.
                </p>
            </div>

            <div class="tw:grid tw:grid-cols-1 tw:lg:grid-cols-2 tw:gap-6 tw:lg:gap-8 tw:mb-10">
                <!-- Repository Pattern Card -->
                <div class="tw:bg-white tw:dark:bg-gray-800 tw:rounded-2xl tw:shadow-xl tw:p-6 tw:sm:p-8 tw:border tw:border-gray-100 tw:dark:border-gray-700 tw:hover:shadow-2xl tw:transition-all tw:duration-300 tw:transform tw:hover:-translate-y-1">
                    <div class="tw:flex tw:items-center tw:mb-6">
                        <div class="tw:rounded-xl tw:bg-gradient-to-br tw:from-blue-500 tw:to-blue-600 tw:p-4 tw:mr-5 tw:shadow-lg">
                            <svg class="tw:w-8 tw:h-8 tw:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="tw:text-2xl tw:font-bold tw:text-gray-900 tw:dark:text-white">Repository Pattern</h3>
                            <span class="tw:text-sm tw:text-blue-600 tw:dark:text-blue-400 tw:font-medium">Data Access Layer</span>
                        </div>
                    </div>
                    <p class="tw:text-gray-600 tw:dark:text-gray-300 tw:mb-6 tw:leading-relaxed">
                        Creates an abstraction layer between your data access logic and business logic,
                        providing a collection-like interface for accessing domain objects.
                    </p>

                    <div class="tw:mb-6">
                        <h4 class="tw:text-sm tw:font-semibold tw:text-gray-900 tw:dark:text-white tw:mb-3 tw:uppercase tw:tracking-wide">Key Benefits</h4>
                        <ul class="tw:space-y-3">
                            <li class="tw:flex tw:items-start">
                                <span class="tw:flex-shrink-0 tw:w-6 tw:h-6 tw:bg-green-100 tw:dark:bg-green-900 tw:rounded-full tw:flex tw:items-center tw:justify-center tw:mr-3 tw:mt-0.5">
                                    <svg class="tw:w-4 tw:h-4 tw:text-green-600 tw:dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <span class="tw:text-gray-700 tw:dark:text-gray-300"><strong>Separation of Concerns</strong> - Isolates data access from business logic</span>
                            </li>
                            <li class="tw:flex tw:items-start">
                                <span class="tw:flex-shrink-0 tw:w-6 tw:h-6 tw:bg-green-100 tw:dark:bg-green-900 tw:rounded-full tw:flex tw:items-center tw:justify-center tw:mr-3 tw:mt-0.5">
                                    <svg class="tw:w-4 tw:h-4 tw:text-green-600 tw:dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <span class="tw:text-gray-700 tw:dark:text-gray-300"><strong>Enhanced Testability</strong> - Easy to mock and test in isolation</span>
                            </li>
                            <li class="tw:flex tw:items-start">
                                <span class="tw:flex-shrink-0 tw:w-6 tw:h-6 tw:bg-green-100 tw:dark:bg-green-900 tw:rounded-full tw:flex tw:items-center tw:justify-center tw:mr-3 tw:mt-0.5">
                                    <svg class="tw:w-4 tw:h-4 tw:text-green-600 tw:dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <span class="tw:text-gray-700 tw:dark:text-gray-300"><strong>Reusable Queries</strong> - Share common queries across the application</span>
                            </li>
                            <li class="tw:flex tw:items-start">
                                <span class="tw:flex-shrink-0 tw:w-6 tw:h-6 tw:bg-green-100 tw:dark:bg-green-900 tw:rounded-full tw:flex tw:items-center tw:justify-center tw:mr-3 tw:mt-0.5">
                                    <svg class="tw:w-4 tw:h-4 tw:text-green-600 tw:dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <span class="tw:text-gray-700 tw:dark:text-gray-300"><strong>Flexibility</strong> - Swap data sources without affecting business logic</span>
                            </li>
                        </ul>
                    </div>

                    <div class="tw:pt-4 tw:border-t tw:border-gray-200 tw:dark:border-gray-700">
                        <span class="tw:text-xs tw:font-semibold tw:text-gray-500 tw:dark:text-gray-400 tw:uppercase tw:tracking-wide">Best For</span>
                        <p class="tw:text-sm tw:text-gray-600 tw:dark:text-gray-300 tw:mt-2">Complex queries, data aggregation, and applications requiring data source flexibility</p>
                    </div>
                </div>

                <!-- Service Pattern Card -->
                <div class="tw:bg-white tw:dark:bg-gray-800 tw:rounded-2xl tw:shadow-xl tw:p-6 tw:sm:p-8 tw:border tw:border-gray-100 tw:dark:border-gray-700 tw:hover:shadow-2xl tw:transition-all tw:duration-300 tw:transform tw:hover:-translate-y-1">
                    <div class="tw:flex tw:items-center tw:mb-6">
                        <div class="tw:rounded-xl tw:bg-gradient-to-br tw:from-purple-500 tw:to-purple-600 tw:p-4 tw:mr-5 tw:shadow-lg">
                            <svg class="tw:w-8 tw:h-8 tw:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="tw:text-2xl tw:font-bold tw:text-gray-900 tw:dark:text-white">Service Pattern</h3>
                            <span class="tw:text-sm tw:text-purple-600 tw:dark:text-purple-400 tw:font-medium">Business Logic Layer</span>
                        </div>
                    </div>
                    <p class="tw:text-gray-600 tw:dark:text-gray-300 tw:mb-6 tw:leading-relaxed">
                        Encapsulates business logic and orchestrates operations across multiple data sources,
                        repositories, and external services to accomplish complex tasks.
                    </p>

                    <div class="tw:mb-6">
                        <h4 class="tw:text-sm tw:font-semibold tw:text-gray-900 tw:dark:text-white tw:mb-3 tw:uppercase tw:tracking-wide">Key Benefits</h4>
                        <ul class="tw:space-y-3">
                            <li class="tw:flex tw:items-start">
                                <span class="tw:flex-shrink-0 tw:w-6 tw:h-6 tw:bg-green-100 tw:dark:bg-green-900 tw:rounded-full tw:flex tw:items-center tw:justify-center tw:mr-3 tw:mt-0.5">
                                    <svg class="tw:w-4 tw:h-4 tw:text-green-600 tw:dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <span class="tw:text-gray-700 tw:dark:text-gray-300"><strong>Business Logic Isolation</strong> - Keeps controllers thin and focused</span>
                            </li>
                            <li class="tw:flex tw:items-start">
                                <span class="tw:flex-shrink-0 tw:w-6 tw:h-6 tw:bg-green-100 tw:dark:bg-green-900 tw:rounded-full tw:flex tw:items-center tw:justify-center tw:mr-3 tw:mt-0.5">
                                    <svg class="tw:w-4 tw:h-4 tw:text-green-600 tw:dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <span class="tw:text-gray-700 tw:dark:text-gray-300"><strong>Transaction Management</strong> - Handle complex multi-step operations</span>
                            </li>
                            <li class="tw:flex tw:items-start">
                                <span class="tw:flex-shrink-0 tw:w-6 tw:h-6 tw:bg-green-100 tw:dark:bg-green-900 tw:rounded-full tw:flex tw:items-center tw:justify-center tw:mr-3 tw:mt-0.5">
                                    <svg class="tw:w-4 tw:h-4 tw:text-green-600 tw:dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <span class="tw:text-gray-700 tw:dark:text-gray-300"><strong>Orchestration</strong> - Coordinate multiple repositories and services</span>
                            </li>
                            <li class="tw:flex tw:items-start">
                                <span class="tw:flex-shrink-0 tw:w-6 tw:h-6 tw:bg-green-100 tw:dark:bg-green-900 tw:rounded-full tw:flex tw:items-center tw:justify-center tw:mr-3 tw:mt-0.5">
                                    <svg class="tw:w-4 tw:h-4 tw:text-green-600 tw:dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <span class="tw:text-gray-700 tw:dark:text-gray-300"><strong>Reusability</strong> - Share business logic across different entry points</span>
                            </li>
                        </ul>
                    </div>

                    <div class="tw:pt-4 tw:border-t tw:border-gray-200 tw:dark:border-gray-700">
                        <span class="tw:text-xs tw:font-semibold tw:text-gray-500 tw:dark:text-gray-400 tw:uppercase tw:tracking-wide">Best For</span>
                        <p class="tw:text-sm tw:text-gray-600 tw:dark:text-gray-300 tw:mt-2">Complex workflows, business rule enforcement, and multi-step transactions</p>
                    </div>
                </div>
            </div>

            <!-- When to Use What -->
            <div class="tw:bg-gradient-to-r tw:from-indigo-50 tw:to-purple-50 tw:dark:from-gray-800 tw:dark:to-gray-700 tw:rounded-2xl tw:p-6 tw:sm:p-8 tw:border-2 tw:border-indigo-100 tw:dark:border-gray-600">
                <h3 class="tw:text-2xl tw:font-bold tw:text-gray-900 tw:dark:text-white tw:mb-6 tw:text-center">
                    💡 Combine Both for Maximum Benefit
                </h3>
                <div class="tw:grid tw:grid-cols-1 tw:md:grid-cols-2 tw:gap-6">
                    <div class="tw:bg-white tw:dark:bg-gray-800 tw:rounded-lg tw:p-6 tw:shadow-md">
                        <h4 class="tw:font-bold tw:text-gray-900 tw:dark:text-white tw:mb-3 tw:flex tw:items-center">
                            <span class="tw:text-2xl tw:mr-2">🎯</span>
                            Use Repository When
                        </h4>
                        <ul class="tw:space-y-2 tw:text-sm tw:text-gray-600 tw:dark:text-gray-300">
                            <li class="tw:flex tw:items-start">
                                <span class="tw:text-blue-500 tw:mr-2 tw:mt-1">▸</span>
                                <span>You need to abstract database queries</span>
                            </li>
                            <li class="tw:flex tw:items-start">
                                <span class="tw:text-blue-500 tw:mr-2 tw:mt-1">▸</span>
                                <span>Building reusable query methods</span>
                            </li>
                            <li class="tw:flex tw:items-start">
                                <span class="tw:text-blue-500 tw:mr-2 tw:mt-1">▸</span>
                                <span>Testing requires mocking data access</span>
                            </li>
                            <li class="tw:flex tw:items-start">
                                <span class="tw:text-blue-500 tw:mr-2 tw:mt-1">▸</span>
                                <span>You might switch data sources later</span>
                            </li>
                        </ul>
                    </div>
                    <div class="tw:bg-white tw:dark:bg-gray-800 tw:rounded-lg tw:p-6 tw:shadow-md">
                        <h4 class="tw:font-bold tw:text-gray-900 tw:dark:text-white tw:mb-3 tw:flex tw:items-center">
                            <span class="tw:text-2xl tw:mr-2">⚡</span>
                            Use Service When
                        </h4>
                        <ul class="tw:space-y-2 tw:text-sm tw:text-gray-600 tw:dark:text-gray-300">
                            <li class="tw:flex tw:items-start">
                                <span class="tw:text-purple-500 tw:mr-2 tw:mt-1">▸</span>
                                <span>Coordinating multiple repositories</span>
                            </li>
                            <li class="tw:flex tw:items-start">
                                <span class="tw:text-purple-500 tw:mr-2 tw:mt-1">▸</span>
                                <span>Complex business logic required</span>
                            </li>
                            <li class="tw:flex tw:items-start">
                                <span class="tw:text-purple-500 tw:mr-2 tw:mt-1">▸</span>
                                <span>Managing transactions across operations</span>
                            </li>
                            <li class="tw:flex tw:items-start">
                                <span class="tw:text-purple-500 tw:mr-2 tw:mt-1">▸</span>
                                <span>Integrating with external services</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="tw:mt-16">
        <div class="tw:text-center tw:mb-12">
            <h2 class="tw:text-3xl tw:font-bold tw:text-gray-900 tw:dark:text-white tw:mb-4">Why These Patterns Matter</h2>
            <p class="tw:text-lg tw:text-gray-600 tw:dark:text-gray-300 tw:max-w-2xl tw:mx-auto">
                Building enterprise-grade applications requires solid architectural foundations
            </p>
        </div>

        <div class="tw:grid tw:grid-cols-1 tw:md:grid-cols-3 tw:gap-6 tw:lg:gap-8">
            <div class="tw:bg-white tw:dark:bg-gray-800 tw:rounded-xl tw:shadow-lg tw:p-6 tw:sm:p-8 tw:text-center tw:hover:shadow-2xl tw:transition-all tw:duration-300 tw:transform tw:hover:-translate-y-1 tw:border tw:border-gray-100 tw:dark:border-gray-700">
                <div class="tw:inline-flex tw:items-center tw:justify-center tw:w-16 tw:h-16 tw:bg-gradient-to-br tw:from-yellow-400 tw:to-orange-500 tw:rounded-2xl tw:mb-6 tw:shadow-lg">
                    <span class="tw:text-3xl">🎯</span>
                </div>
                <h3 class="tw:text-xl tw:font-bold tw:text-gray-900 tw:dark:text-white tw:mb-3">Clean Architecture</h3>
                <p class="tw:text-gray-600 tw:dark:text-gray-300 tw:leading-relaxed">
                    Follow SOLID principles and maintain a clear separation of concerns throughout your application layers.
                </p>
            </div>

            <div class="tw:bg-white tw:dark:bg-gray-800 tw:rounded-xl tw:shadow-lg tw:p-6 tw:sm:p-8 tw:text-center tw:hover:shadow-2xl tw:transition-all tw:duration-300 tw:transform tw:hover:-translate-y-1 tw:border tw:border-gray-100 tw:dark:border-gray-700">
                <div class="tw:inline-flex tw:items-center tw:justify-center tw:w-16 tw:h-16 tw:bg-gradient-to-br tw:from-green-400 tw:to-blue-500 tw:rounded-2xl tw:mb-6 tw:shadow-lg">
                    <span class="tw:text-3xl">🚀</span>
                </div>
                <h3 class="tw:text-xl tw:font-bold tw:text-gray-900 tw:dark:text-white tw:mb-3">Scalable Design</h3>
                <p class="tw:text-gray-600 tw:dark:text-gray-300 tw:leading-relaxed">
                    Build applications that grow with your business needs while maintaining code quality and performance.
                </p>
            </div>

            <div class="tw:bg-white tw:dark:bg-gray-800 tw:rounded-xl tw:shadow-lg tw:p-6 tw:sm:p-8 tw:text-center tw:hover:shadow-2xl tw:transition-all tw:duration-300 tw:transform tw:hover:-translate-y-1 tw:border tw:border-gray-100 tw:dark:border-gray-700">
                <div class="tw:inline-flex tw:items-center tw:justify-center tw:w-16 tw:h-16 tw:bg-gradient-to-br tw:from-purple-400 tw:to-pink-500 tw:rounded-2xl tw:mb-6 tw:shadow-lg">
                    <span class="tw:text-3xl">✨</span>
                </div>
                <h3 class="tw:text-xl tw:font-bold tw:text-gray-900 tw:dark:text-white tw:mb-3">Best Practices</h3>
                <p class="tw:text-gray-600 tw:dark:text-gray-300 tw:leading-relaxed">
                    Industry-standard patterns used by top companies to build reliable, maintainable software.
                </p>
            </div>
        </div>
    </div>

    <!-- Code Examples Preview -->
    <div id="code-examples" class="tw:mt-16 tw:bg-gradient-to-r tw:from-gray-900 tw:to-gray-800 tw:rounded-2xl tw:shadow-2xl tw:overflow-hidden">
        <div class="tw:p-6 tw:sm:p-8 tw:lg:p-12">
            <div class="tw:text-center tw:mb-10">
                <h2 class="tw:text-3xl tw:font-bold tw:text-white tw:mb-4">See It In Action</h2>
                <p class="tw:text-lg tw:text-gray-300 tw:max-w-2xl tw:mx-auto">
                    Real-world examples demonstrating how these patterns work in practice
                </p>
            </div>

            <div class="tw:grid tw:grid-cols-1 tw:lg:grid-cols-2 tw:gap-8">
                <!-- Repository Example -->
                <div class="tw:bg-gray-800 tw:rounded-xl tw:p-6 tw:border tw:border-gray-700">
                    <div class="tw:flex tw:items-center tw:justify-between tw:mb-4">
                        <h4 class="tw:text-lg tw:font-semibold tw:text-white">Repository Pattern</h4>
                        <span class="tw:px-3 tw:py-1 tw:bg-blue-600 tw:text-white tw:text-xs tw:font-semibold tw:rounded-full">PHP</span>
                    </div>
                    <div class="tw:bg-gray-900 tw:rounded-lg tw:p-4 tw:font-mono tw:text-sm tw:overflow-x-auto">
                        <pre class="tw:text-gray-300"><code><span class="tw:text-purple-400">class</span> <span class="tw:text-yellow-400">ProductRepository</span>
{
    <span class="tw:text-purple-400">public function</span> <span class="tw:text-blue-400">findActive</span>()
    {
        <span class="tw:text-purple-400">return</span> <span class="tw:text-yellow-400">Product</span>::<span class="tw:text-blue-400">where</span>(<span class="tw:text-green-400">'status'</span>, <span class="tw:text-green-400">'active'</span>)
            -><span class="tw:text-blue-400">orderBy</span>(<span class="tw:text-green-400">'created_at'</span>, <span class="tw:text-green-400">'desc'</span>)
            -><span class="tw:text-blue-400">get</span>();
    }
}</code></pre>
                    </div>
                    <p class="tw:text-sm tw:text-gray-400 tw:mt-3">Clean data access with reusable query methods</p>
                </div>

                <!-- Service Example -->
                <div class="tw:bg-gray-800 tw:rounded-xl tw:p-6 tw:border tw:border-gray-700">
                    <div class="tw:flex tw:items-center tw:justify-between tw:mb-4">
                        <h4 class="tw:text-lg tw:font-semibold tw:text-white">Service Pattern</h4>
                        <span class="tw:px-3 tw:py-1 tw:bg-purple-600 tw:text-white tw:text-xs tw:font-semibold tw:rounded-full">PHP</span>
                    </div>
                    <div class="tw:bg-gray-900 tw:rounded-lg tw:p-4 tw:font-mono tw:text-sm tw:overflow-x-auto">
                        <pre class="tw:text-gray-300"><code><span class="tw:text-purple-400">class</span> <span class="tw:text-yellow-400">ProductService</span>
{
    <span class="tw:text-purple-400">public function</span> <span class="tw:text-blue-400">createWithNotification</span>(<span class="tw:text-yellow-400">$data</span>)
    {
        <span class="tw:text-yellow-400">$product</span> = <span class="tw:text-yellow-400">$this</span>->repo-><span class="tw:text-blue-400">create</span>(<span class="tw:text-yellow-400">$data</span>);
        <span class="tw:text-yellow-400">$this</span>-><span class="tw:text-blue-400">notify</span>(<span class="tw:text-yellow-400">$product</span>);
        <span class="tw:text-purple-400">return</span> <span class="tw:text-yellow-400">$product</span>;
    }
}</code></pre>
                    </div>
                    <p class="tw:text-sm tw:text-gray-400 tw:mt-3">Business logic orchestration across services</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Section -->
    <div class="tw:mt-16 tw:bg-gradient-to-r tw:from-indigo-600 tw:to-purple-600 tw:rounded-2xl tw:shadow-2xl tw:p-8 tw:sm:p-10 tw:lg:p-12">
        <div class="tw:text-center tw:mb-10">
            <h2 class="tw:text-3xl tw:font-bold tw:text-white tw:mb-3">By The Numbers</h2>
            <p class="tw:text-indigo-100">Why developers choose architectural patterns</p>
        </div>
        <div class="tw:grid tw:grid-cols-2 tw:md:grid-cols-4 tw:gap-6 tw:sm:gap-8 tw:text-center">
            <div>
                <div class="tw:text-5xl tw:font-bold tw:text-white tw:mb-2">85%</div>
                <div class="tw:text-indigo-100">Better Testability</div>
            </div>
            <div>
                <div class="tw:text-5xl tw:font-bold tw:text-white tw:mb-2">3x</div>
                <div class="tw:text-indigo-100">Faster Development</div>
            </div>
            <div>
                <div class="tw:text-5xl tw:font-bold tw:text-white tw:mb-2">60%</div>
                <div class="tw:text-indigo-100">Less Code Duplication</div>
            </div>
            <div>
                <div class="tw:text-5xl tw:font-bold tw:text-white tw:mb-2">95%</div>
                <div class="tw:text-indigo-100">Team Satisfaction</div>
            </div>
        </div>
    </div>

    <!-- Getting Started -->
    <div class="tw:mt-16 tw:bg-white tw:dark:bg-gray-800 tw:rounded-2xl tw:shadow-xl tw:p-6 tw:sm:p-8 tw:lg:p-12 tw:border tw:border-gray-100 tw:dark:border-gray-700">
        <div class="tw:lg:flex tw:lg:items-center tw:lg:justify-between">
            <div class="tw:lg:w-2/3">
                <h2 class="tw:text-3xl tw:font-bold tw:text-gray-900 tw:dark:text-white tw:mb-4">Ready to Get Started?</h2>
                <p class="tw:text-lg tw:text-gray-600 tw:dark:text-gray-300 tw:mb-6">
                    This project demonstrates both Repository and Service patterns in Laravel with real-world examples.
                    Explore the codebase to see how these patterns work together to create clean, maintainable architecture.
                </p>

                <div class="tw:space-y-4">
                    <div class="tw:flex tw:items-start">
                        <div class="tw:flex-shrink-0">
                            <div class="tw:flex tw:items-center tw:justify-center tw:h-10 tw:w-10 tw:rounded-lg tw:bg-indigo-100 tw:dark:bg-indigo-900 tw:text-indigo-600 tw:dark:text-indigo-400">
                                <span class="tw:text-xl tw:font-bold">1</span>
                            </div>
                        </div>
                        <div class="tw:ml-4">
                            <h4 class="tw:text-lg tw:font-semibold tw:text-gray-900 tw:dark:text-white">Setup Your Environment</h4>
                            <p class="tw:text-gray-600 tw:dark:text-gray-300">Run Docker containers and install dependencies</p>
                        </div>
                    </div>
                    <div class="tw:flex tw:items-start">
                        <div class="tw:flex-shrink-0">
                            <div class="tw:flex tw:items-center tw:justify-center tw:h-10 tw:w-10 tw:rounded-lg tw:bg-indigo-100 tw:dark:bg-indigo-900 tw:text-indigo-600 tw:dark:text-indigo-400">
                                <span class="tw:text-xl tw:font-bold">2</span>
                            </div>
                        </div>
                        <div class="tw:ml-4">
                            <h4 class="tw:text-lg tw:font-semibold tw:text-gray-900 tw:dark:text-white">Run Migrations</h4>
                            <p class="tw:text-gray-600 tw:dark:text-gray-300">Set up the database schema</p>
                        </div>
                    </div>
                    <div class="tw:flex tw:items-start">
                        <div class="tw:flex-shrink-0">
                            <div class="tw:flex tw:items-center tw:justify-center tw:h-10 tw:w-10 tw:rounded-lg tw:bg-indigo-100 tw:dark:bg-indigo-900 tw:text-indigo-600 tw:dark:text-indigo-400">
                                <span class="tw:text-xl tw:font-bold">3</span>
                            </div>
                        </div>
                        <div class="tw:ml-4">
                            <h4 class="tw:text-lg tw:font-semibold tw:text-gray-900 tw:dark:text-white">Explore the Code</h4>
                            <p class="tw:text-gray-600 tw:dark:text-gray-300">Review implementations in app/Repositories and app/Services</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tw:mt-8 tw:lg:mt-0 tw:lg:w-1/3 tw:lg:pl-8">
                <div class="tw:bg-gray-900 tw:dark:bg-gray-950 tw:rounded-xl tw:p-6 tw:shadow-2xl tw:border tw:border-gray-700">
                    <div class="tw:flex tw:items-center tw:mb-4">
                        <div class="tw:w-3 tw:h-3 tw:rounded-full tw:bg-red-500 tw:mr-2"></div>
                        <div class="tw:w-3 tw:h-3 tw:rounded-full tw:bg-yellow-500 tw:mr-2"></div>
                        <div class="tw:w-3 tw:h-3 tw:rounded-full tw:bg-green-500"></div>
                        <span class="tw:ml-auto tw:text-gray-400 tw:text-xs tw:font-mono">Terminal</span>
                    </div>
                    <div class="tw:font-mono tw:text-sm tw:space-y-2">
                        <div class="tw:text-gray-400"># Run migrations</div>
                        <div class="tw:text-green-400">$ docker compose exec laravel-app \</div>
                        <div class="tw:text-green-400 tw:ml-4">php artisan migrate</div>
                        <div class="tw:mt-4 tw:text-gray-400"># Seed database</div>
                        <div class="tw:text-green-400">$ docker compose exec laravel-app \</div>
                        <div class="tw:text-green-400 tw:ml-4">php artisan db:seed</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Resources Section -->
    <div class="tw:mt-16 tw:mb-12">
        <h2 class="tw:text-2xl tw:font-bold tw:text-gray-900 tw:dark:text-white tw:mb-8 tw:text-center">Helpful Resources</h2>
        <div class="tw:grid tw:grid-cols-1 tw:md:grid-cols-3 tw:gap-6">
            <a href="https://laravel.com/docs" target="_blank" class="tw:block tw:bg-white tw:dark:bg-gray-800 tw:rounded-lg tw:shadow-md tw:p-6 tw:hover:shadow-xl tw:transition-all tw:border tw:border-gray-100 tw:dark:border-gray-700 tw:group">
                <div class="tw:flex tw:items-center tw:mb-3">
                    <svg class="tw:w-6 tw:h-6 tw:text-red-600 tw:mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0l12 12-12 12L0 12z"/>
                    </svg>
                    <h3 class="tw:text-lg tw:font-semibold tw:text-gray-900 tw:dark:text-white tw:group-hover:text-indigo-600 tw:dark:group-hover:text-indigo-400">Laravel Docs</h3>
                </div>
                <p class="tw:text-sm tw:text-gray-600 tw:dark:text-gray-300">Official Laravel documentation and guides</p>
            </a>

            <a href="https://refactoring.guru/design-patterns" target="_blank" class="tw:block tw:bg-white tw:dark:bg-gray-800 tw:rounded-lg tw:shadow-md tw:p-6 tw:hover:shadow-xl tw:transition-all tw:border tw:border-gray-100 tw:dark:border-gray-700 tw:group">
                <div class="tw:flex tw:items-center tw:mb-3">
                    <svg class="tw:w-6 tw:h-6 tw:text-blue-600 tw:mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    <h3 class="tw:text-lg tw:font-semibold tw:text-gray-900 tw:dark:text-white tw:group-hover:text-indigo-600 tw:dark:group-hover:text-indigo-400">Design Patterns</h3>
                </div>
                <p class="tw:text-sm tw:text-gray-600 tw:dark:text-gray-300">Learn more about software design patterns</p>
            </a>

            <a href="https://github.com/AIAndME-coder/laravel-repository-vs-service" target="_blank" class="tw:block tw:bg-white tw:dark:bg-gray-800 tw:rounded-lg tw:shadow-md tw:p-6 tw:hover:shadow-xl tw:transition-all tw:border tw:border-gray-100 tw:dark:border-gray-700 tw:group">
                <div class="tw:flex tw:items-center tw:mb-3">
                    <svg class="tw:w-6 tw:h-6 tw:text-gray-900 tw:dark:text-white tw:mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                    <h3 class="tw:text-lg tw:font-semibold tw:text-gray-900 tw:dark:text-white tw:group-hover:text-indigo-600 tw:dark:group-hover:text-indigo-400">Source Code</h3>
                </div>
                <p class="tw:text-sm tw:text-gray-600 tw:dark:text-gray-300">View this project on GitHub</p>
            </a>
        </div>
    </div>
</div>
@endsection
