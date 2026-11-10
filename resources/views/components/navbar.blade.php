<nav class="bg-stone-900 border-b-4 border-stone-950 w-full">
    <div class="container mx-auto px-4 py-3 flex flex-col md:flex-row justify-between items-center gap-4">
        <a href="{{ route('login') }}" class="font-bold text-xl text-red-600 flex items-center gap-2">
            CINELOG
        </a>
        
        <div class="flex flex-wrap gap-2 text-xs font-black">
            @if(!Route::is('login'))
                <a href="{{ route('dashboard', ['username' => request('username')]) }}" 
                   class="px-3.5 py-1.5 {{ Route::is('dashboard') ? 'bg-amber-400 text-stone-950' : 'bg-stone-800 text-stone-200 hover:text-white' }} border-2 border-stone-950 rounded-xl shadow-[2px_2px_0px_#000] transition">
                    Dashboard
                </a>

                <a href="{{ route('pengelolaan', ['username' => request('username')]) }}" 
                   class="px-3.5 py-1.5 {{ Route::is('pengelolaan') ? 'bg-amber-400 text-stone-950' : 'bg-stone-800 text-stone-200 hover:text-white' }} border-2 border-stone-950 rounded-xl shadow-[2px_2px_0px_#000] transition">
                    My Watchlist
                </a>

                <a href="{{ route('profile', ['username' => request('username')]) }}" 
                   class="px-3.5 py-1.5 {{ Route::is('profile') ? 'bg-amber-400 text-stone-950' : 'bg-stone-800 text-stone-200 hover:text-white' }} border-2 border-stone-950 rounded-xl shadow-[2px_2px_0px_#000] transition">
                    Profil
                </a>
            @endif
        </div>
    </div>
</nav>