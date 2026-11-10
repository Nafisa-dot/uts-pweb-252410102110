@extends('layouts.app')

@section('title', 'Login - CineLog')

@section('content')
<div class="max-w-md mx-auto bg-white p-7 rounded-2xl border border-stone-200 mt-6 shadow-sm">
    <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-red-700">CineLog Access</h2>
        <p class="text-xs text-stone-500 mt-1">Masukkan username untuk masuk</p>
    </div>

    <form action="{{ route('login.process') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-xs font-semibold text-stone-600 mb-1">USERNAME</label>
            <input type="text" name="username" required placeholder="Contoh: user215" 
                class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl text-stone-900 text-sm focus:outline-none focus:border-red-600">
        </div>
        <div>
            <label class="block text-xs font-semibold text-stone-600 mb-1">PASSCODE</label>
            <input type="password" name="password" required placeholder="••••••••" 
                class="w-full px-3.5 py-2.5 bg-stone-50 border border-stone-200 rounded-xl text-stone-900 text-sm focus:outline-none focus:border-red-600">
        </div>
        <button type="submit" 
            class="w-full bg-red-700 hover:bg-red-800 text-white font-bold py-3 rounded-xl text-sm transition shadow-sm">
            Masuk
        </button>
    </form>
</div>
@endsection