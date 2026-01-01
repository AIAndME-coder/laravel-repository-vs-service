<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Product CRUD')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="tw:bg-gray-100 tw:p-5">
    <div class="tw:max-w-7xl tw:mx-auto tw:bg-white tw:p-8 tw:rounded-lg tw:shadow">
        <div class="tw:flex tw:gap-5 tw:mb-5">
            <a href="{{ route('simple.products.index') }}"
               class="tw:text-gray-600 tw:no-underline tw:px-4 tw:py-2.5 tw:rounded-md tw:transition-all hover:tw:bg-gray-100 {{ request()->is('simple/*') ? 'tw:bg-indigo-600 tw:text-white hover:tw:bg-indigo-700' : '' }}">
                Simple Approach
            </a>
            <a href="{{ route('repository.products.index') }}"
               class="tw:text-gray-600 tw:no-underline tw:px-4 tw:py-2.5 tw:rounded-md tw:transition-all hover:tw:bg-gray-100 {{ request()->is('repository/*') ? 'tw:bg-indigo-600 tw:text-white hover:tw:bg-indigo-700' : '' }}">
                Repository Approach
            </a>
            <a href="{{ route('service.products.index') }}"
               class="tw:text-gray-600 tw:no-underline tw:px-4 tw:py-2.5 tw:rounded-md tw:transition-all hover:tw:bg-gray-100 {{ request()->is('service/*') ? 'tw:bg-indigo-600 tw:text-white hover:tw:bg-indigo-700' : '' }}">
                Service Layer Approach
            </a>
        </div>

        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="tw:bg-white dark:tw:bg-gray-800 tw:shadow-sm tw:mt-8">
        <div class="tw:max-w-7xl tw:mx-auto tw:py-6 tw:px-4 sm:tw:px-6 lg:tw:px-8">
            <p class="tw:text-center tw:text-sm tw:text-gray-500 dark:tw:text-gray-400">
                &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Repository vs Service Pattern Demo.
            </p>
        </div>
    </footer>
</body>
</html>
