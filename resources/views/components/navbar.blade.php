<div class="bg-white shadow-sm border-b border-slate-200 px-8 py-4 flex justify-between items-center rounded-lg">
    <div class="text-slate-500 font-medium">
        <span class="mr-2">📅</span> {{ now()->format('d F Y') }}
    </div>
    
    <div class="flex items-center space-x-4">
        <div class="flex items-center space-x-2 bg-slate-50 px-4 py-2 rounded-full border border-slate-200">
            <span class="bg-blue-600 text-white w-8 h-8 flex items-center justify-center rounded-full font-bold">
                {{ substr(auth()->user()->name ?? 'G', 0, 1) }}
            </span>
            <span class="font-semibold text-slate-700">{{ auth()->user()->name ?? 'Guest' }}</span>
        </div>

        @auth
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-red-500 hover:text-white hover:bg-red-500 px-4 py-2 rounded-lg font-medium transition duration-200 border border-red-100 hover:border-red-500">
                Logout
            </button>
        </form>
        @endauth
    </div>
</div>