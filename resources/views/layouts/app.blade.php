<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkir - marvelPunya</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="https://cdn.tailwindcss.com"></script> </head>
<body class="bg-slate-50 text-slate-900 font-sans">

    <div class="flex h-screen overflow-hidden">
        <aside class="w-64 bg-slate-900 text-white flex flex-col shadow-xl">
            <div class="p-6 text-2xl font-bold border-b border-slate-800 tracking-tight">
                🅿️ <span class="text-blue-400">marvel</span>Parkir
            </div>
            <nav class="flex-1 p-4">
                @include('components.sidebar')
            </nav>
            <div class="p-4 border-t border-slate-800">
                @include('components.navbar')
            </div>
        </aside>

        <main class="flex-1 overflow-y-auto p-8">
            <div class="max-w-6xl mx-auto">
                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 shadow-sm rounded">
                        {{ session('success') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </main>
    </div>

</body>
</html>