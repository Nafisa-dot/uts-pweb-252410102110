@extends('layouts.app')

@section('title', 'Profil - CineLog')

@section('content')
<div class="max-w-md mx-auto space-y-5">
    
    <div class="text-center">
        <h1 class="text-2xl font-black text-stone-900 inline-flex items-center gap-2">
            Profile
        </h1>
    </div>

    <div class="bg-white border-2 border-stone-900 rounded-2xl p-6 shadow-[4px_4px_0px_#000] relative">
        
        <button id="btn-open-edit" class="absolute top-5 right-5 px-3 py-1.5 bg-amber-400 border-2 border-stone-900 text-stone-950 text-xs font-black rounded-xl shadow-[2px_2px_0px_#000] hover:bg-amber-300 transition">
            Edit Profil
        </button>

        <div class="flex items-center space-x-4 border-b-2 border-stone-900/10 pb-4 mb-4">
            <div id="display-avatar" class="w-14 h-14 flex-shrink-0 bg-red-700 text-white border-2 border-stone-900 rounded-full flex items-center justify-center font-black text-2xl shadow-[2px_2px_0px_#000]">
                {{ strtoupper(substr($username, 0, 1)) }}
            </div>
            <div>
                <h2 id="display-name" class="text-xl font-black text-stone-950 leading-tight">{{ $username }}</h2>
            </div>
        </div>

        <div class="space-y-3.5 text-xs font-black text-stone-900">
            <div class="flex justify-between border-b border-stone-900/10 pb-2">
                <span class="text-stone-500 uppercase">Username</span>
                <span id="display-username" class="text-stone-900">{{ $username }}</span>
            </div>
            <div class="flex justify-between border-b border-stone-900/10 pb-2">
                <span class="text-stone-500 uppercase">Genre</span>
                <span id="display-genre" class="text-red-700 uppercase">Action, Romance, Drama</span>
            </div>
        </div>

        <div class="mt-6 pt-4 border-t-2 border-stone-900/10">
            <button id="btn-logout-trigger" class="w-full py-2.5 bg-red-700 hover:bg-red-800 border-2 border-stone-900 text-white text-xs font-black rounded-xl shadow-[3px_3px_0px_#000] uppercase tracking-wider flex justify-center items-center gap-2 transition">
                Logout
            </button>
        </div>
    </div>

</div>

<div id="modal-edit" class="fixed inset-0 bg-stone-950/80 backdrop-blur-sm flex items-center justify-center hidden z-50 p-4">
    <div class="bg-amber-100 border-4 border-stone-950 p-6 rounded-3xl w-full max-w-md shadow-[6px_6px_0px_0px_#000] space-y-4">
        <div class="flex justify-between items-center border-b-4 border-stone-950 pb-3">
            <h3 class="text-lg font-black text-stone-950 flex items-center gap-2">Edit Profil</h3>
            <button id="btn-close-edit" class="text-stone-500 hover:text-stone-950 text-xl font-bold">&times;</button>
        </div>

        <div class="space-y-3 text-xs font-black text-stone-800">
            <div>
                <label class="block text-amber-900 mb-1">NAMA / USERNAME</label>
                <input type="text" id="input-name" value="{{ $username }}" class="w-full px-3 py-2 bg-white border-2 border-stone-950 rounded-xl text-stone-900 focus:outline-none">
            </div>
            <div>
                <label class="block text-amber-900 mb-1">GENRE PREFERENSI</label>
                <input type="text" id="input-genre" value="Sci-Fi, Thriller, Drama" class="w-full px-3 py-2 bg-white border-2 border-stone-950 rounded-xl text-stone-900 focus:outline-none">
            </div>
        </div>

        <div class="flex justify-end gap-2 pt-2 text-xs font-black">
            <button id="btn-cancel" class="px-4 py-2 bg-stone-950 text-white border-2 border-stone-950 rounded-xl">Batal</button>
            <button id="btn-save" class="px-4 py-2 bg-amber-400 text-stone-950 border-2 border-stone-950 rounded-xl shadow-[2px_2px_0px_#000]">Simpan Perubahan</button>
        </div>
    </div>
</div>

<div id="modal-logout" class="fixed inset-0 bg-stone-950/80 backdrop-blur-sm flex items-center justify-center hidden z-50 p-4">
    <div class="bg-amber-100 border-4 border-stone-950 p-6 rounded-3xl w-full max-w-sm shadow-[8px_8px_0px_0px_#000] text-center space-y-4">
        <h3 class="text-lg font-black text-stone-950 uppercase">Konfirmasi Keluar</h3>
        <p class="text-xs text-stone-700 font-bold">Apakah kamu yakin ingin keluar dari CineLog?</p>
        <div class="flex justify-center gap-3 pt-2 text-xs font-black">
            <button id="btn-cancel-logout" class="px-4 py-2 bg-stone-300 text-stone-950 border-2 border-stone-950 rounded-xl shadow-[2px_2px_0px_#000]">Batal</button>
            <a href="{{ route('login') }}" class="px-4 py-2 bg-red-700 text-white border-2 border-stone-950 rounded-xl shadow-[2px_2px_0px_#000]">Ya, Logout</a>
        </div>
    </div>
</div>

<script>
    const modalEdit = document.getElementById('modal-edit');
    const btnOpenEdit = document.getElementById('btn-open-edit');
    const btnCloseEdit = document.getElementById('btn-close-edit');
    const btnCancelEdit = document.getElementById('btn-cancel');
    const btnSaveEdit = document.getElementById('btn-save');

    btnOpenEdit.addEventListener('click', () => modalEdit.classList.remove('hidden'));
    const closeModalEdit = () => modalEdit.classList.add('hidden');
    btnCloseEdit.addEventListener('click', closeModalEdit);
    btnCancelEdit.addEventListener('click', closeModalEdit);

    btnSaveEdit.addEventListener('click', () => {
        const nameVal = document.getElementById('input-name').value;
        const titleVal = document.getElementById('input-title').value;
        const genreVal = document.getElementById('input-genre').value;
        const bioVal = document.getElementById('input-bio').value;

        if (nameVal.trim() !== '') {
            document.getElementById('display-name').textContent = nameVal;
            document.getElementById('display-username').textContent = nameVal;
            document.getElementById('display-avatar').textContent = nameVal.charAt(0).toUpperCase();
        }

        document.getElementById('display-title').textContent = titleVal;
        document.getElementById('display-genre').textContent = genreVal;
        document.getElementById('display-bio').textContent = bioVal;

        closeModalEdit();
    });

    const btnLogoutTrigger = document.getElementById('btn-logout-trigger');
    const modalLogout = document.getElementById('modal-logout');
    const btnCancelLogout = document.getElementById('btn-cancel-logout');

    btnLogoutTrigger.addEventListener('click', () => modalLogout.classList.remove('hidden'));
    btnCancelLogout.addEventListener('click', () => modalLogout.classList.add('hidden'));
</script>
@endsection