@extends('layouts.app')

@section('title', 'Dashboard - CineLog')

@section('content')
    <div class="max-w-2xl mx-auto text-center min-h-[calc(100vh-200px)] flex flex-col justify-center space-y-6">
    

    <h1 class="text-4xl sm:text-5xl font-extrabold text-stone-900 tracking-tight">
        Selamat Datang, <span class="text-red-700">{{ $username }}</span>! 
    </h1>
    
    <p class="text-stone-600 text-sm max-w-md mx-auto leading-relaxed font-normal">
        Temukan berbagai film dari beragam genre dalam satu galeri. 
        Jelajahi koleksi poster film dan temukan genre yang sesuai dengan selera kamu.
    </p>

    <div class="flex justify-center gap-3 pt-2">
        <a href="{{ route('pengelolaan', ['username' => $username]) }}" 
           class="px-5 py-2.5 bg-red-700 hover:bg-red-800 text-white font-semibold text-xs rounded-xl shadow-sm transition flex items-center gap-1.5">
             My Watchlist
        </a>
        <a href="{{ route('profile', ['username' => $username]) }}" 
           class="px-5 py-2.5 bg-stone-900 hover:bg-stone-800 text-stone-100 font-semibold text-xs rounded-xl shadow-sm transition flex items-center gap-1.5">
             Profile
        </a>
    </div>
</div>
@endsection