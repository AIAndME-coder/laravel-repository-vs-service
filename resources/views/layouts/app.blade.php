<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Product CRUD')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: system-ui, -apple-system, sans-serif; background: #f5f5f5; padding: 20px; }
        .container { max-width: 1200px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; border-bottom: 2px solid #e5e5e5; padding-bottom: 20px; }
        .header h1 { color: #333; font-size: 28px; }
        .badge { background: #4f46e5; color: white; padding: 4px 12px; border-radius: 4px; font-size: 12px; font-weight: 600; }
        .btn { display: inline-block; padding: 10px 20px; border-radius: 6px; text-decoration: none; font-weight: 500; transition: all 0.2s; border: none; cursor: pointer; }
        .btn-primary { background: #4f46e5; color: white; }
        .btn-primary:hover { background: #4338ca; }
        .btn-secondary { background: #6b7280; color: white; }
        .btn-secondary:hover { background: #4b5563; }
        .btn-danger { background: #dc2626; color: white; }
        .btn-danger:hover { background: #b91c1c; }
        .btn-sm { padding: 6px 12px; font-size: 14px; }
        .alert { padding: 15px 20px; border-radius: 6px; margin-bottom: 20px; }
        .alert-success { background: #d1fae5; color: #065f46; border: 1px solid #a7f3d0; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #e5e5e5; }
        th { background: #f9fafb; font-weight: 600; color: #374151; }
        tr:hover { background: #f9fafb; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; font-weight: 500; color: #374151; }
        input[type="text"], input[type="number"], textarea { width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px; font-size: 14px; }
        input:focus, textarea:focus { outline: none; border-color: #4f46e5; box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1); }
        textarea { resize: vertical; min-height: 100px; }
        .actions { display: flex; gap: 10px; }
        .nav-links { display: flex; gap: 20px; margin-bottom: 20px; }
        .nav-links a { color: #6b7280; text-decoration: none; padding: 10px 15px; border-radius: 6px; }
        .nav-links a:hover { background: #f3f4f6; }
        .nav-links a.active { background: #4f46e5; color: white; }
        .pagination { display: flex; gap: 5px; justify-content: center; margin-top: 20px; }
        .pagination a, .pagination span { padding: 8px 12px; border: 1px solid #e5e5e5; border-radius: 4px; text-decoration: none; color: #374151; }
        .pagination a:hover { background: #f3f4f6; }
        .pagination .active { background: #4f46e5; color: white; border-color: #4f46e5; }
        .error { color: #dc2626; font-size: 14px; margin-top: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav-links">
            <a href="{{ route('simple.products.index') }}" class="{{ request()->is('simple/*') ? 'active' : '' }}">Simple Approach</a>
            <a href="{{ route('repository.products.index') }}" class="{{ request()->is('repository/*') ? 'active' : '' }}">Repository Approach</a>
            <a href="#">Service Layer Approach</a>
        </div>

        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-white dark:bg-gray-800 shadow-sm mt-auto">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <p class="text-center text-sm text-gray-500 dark:text-gray-400">
                &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Repository vs Service Pattern Demo.
            </p>
        </div>
    </footer>
</body>
</html>
