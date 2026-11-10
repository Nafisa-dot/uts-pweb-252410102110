@extends('layouts.app')

@section('title', 'My Watchlist - CineLog')

@section('content')
<div class="space-y-6">
    
    <div class="flex justify-between items-center border-b-2 border-stone-900/10 pb-4">
        <div>
            <h1 class="text-2xl font-black text-stone-900 flex items-center gap-2">My Watchlist</h1>
        </div>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ($items as $item)
        <div class="bg-white border-2 border-stone-900 rounded-2xl shadow-[4px_4px_0px_#000] overflow-hidden flex flex-col justify-between">

            <div class="p-4 flex flex-col sm:flex-row gap-4 items-center">
                <div class="w-full sm:w-32 h-44 flex-shrink-0 border-2 border-stone-900 rounded-xl overflow-hidden bg-stone-900 shadow-[2px_2px_0px_#000]">
                    <img src="{{ $item['poster'] }}" alt="{{ $item['judul'] }}" class="w-full h-full object-cover">
                </div>

                <div class="w-full space-y-2.5">
                    <div>
                        <h3 class="font-black text-xl text-stone-950 leading-tight">{{ $item['judul'] }}</h3>
                    </div>

                    <div class="bg-stone-100 p-2.5 border-2 border-stone-900 rounded-xl">
                        <p class="text-[10px] text-stone-500 font-extrabold uppercase">Starring:</p>
                        <p class="text-xs text-stone-900 font-bold leading-snug mt-0.5">{{ $item['pemeran'] }}</p>
                    </div>

                    <div class="bg-amber-100 px-3 py-1.5 border-2 border-stone-900 rounded-xl text-xs font-black text-stone-950 flex items-center justify-between">
                        <span class="text-stone-500 font-extrabold text-[10px] uppercase">Genre:</span>
                        <span class="text-red-700 font-bold">{{ $item['genre'] }}</span>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </div>

</div>
@endsection