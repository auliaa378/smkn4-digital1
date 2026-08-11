@extends('layouts.admin')

@section('content')

<div class="flex min-h-screen">

    {{-- SIDEBAR --}}
    <aside class="w-[270px] bg-[#173F7A] text-white flex-shrink-0 hidden lg:flex flex-col">

        <div class="px-6 py-7">

            <div class="flex items-center gap-4">

                <div class="w-16 h-16 bg-[#FFF4D6] rounded-full
                            flex items-center justify-center overflow-hidden">

                    <img
                        src="{{ asset('images/logo.jpg') }}"
                        class="w-12 h-12 object-contain"
                    >

                </div>

                <div>
                    <h1 class="font-bold text-[17px]">
                        SMKN 4
                    </h1>

                    <p class="font-bold text-[17px]">
                        BOGOR DIGITAL
                    </p>
                </div>

            </div>

        </div>


        <nav class="px-4 space-y-2">

            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-4 px-4 py-3.5 rounded-lg hover:bg-white/10 font-semibold">

                <span class="text-xl">⌂</span>
                Dashboard

            </a>


            <a href="{{ route('admin.artikel.index') }}"
               class="flex items-center gap-4 px-4 py-3.5 rounded-lg hover:bg-white/10 font-semibold">

                <span class="text-xl">▤</span>
                Informasi / Artikel

            </a>


            <a href="{{ route('admin.galeri.index') }}"
               class="flex items-center gap-4 px-4 py-3.5 rounded-lg hover:bg-white/10 font-semibold">

                <span class="text-xl">▣</span>
                Galeri

            </a>

        </nav>


        <div class="border-t border-white/20 mx-4 my-6"></div>


        <nav class="px-4 space-y-2">

            <a href="{{ route('admin.pengguna.index') }}"
               class="flex items-center gap-4 px-4 py-3.5
                      rounded-lg bg-[#2868C7] font-semibold">

                <span class="text-xl">♙</span>
                Pengguna

            </a>


            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button
                    class="w-full flex items-center gap-4 px-4 py-3.5
                           rounded-lg hover:bg-white/10
                           font-semibold text-left">

                    <span class="text-xl">↪</span>
                    Keluar

                </button>

            </form>

        </nav>

    </aside>


    {{-- CONTENT --}}
    <main class="flex-1 bg-white">

        <div class="px-8 pt-7">

            <a href="{{ route('admin.pengguna.index') }}"
               class="flex items-center gap-2
                      border border-gray-200
                      rounded-md
                      px-4 py-3
                      text-sm
                      font-semibold">

                ← Edit Pengguna

            </a>

            <div class="mt-2 text-[10px] text-gray-400">

                Dashboard / Pengguna / Edit Pengguna

            </div>

        </div>


        <div class="px-8 py-7">

            <form
                action="{{ route('admin.pengguna.update', $pengguna->id) }}"
                method="POST">

                @csrf
                @method('PUT')


                <div class="grid grid-cols-[1fr_330px] gap-8">

                    {{-- INFORMASI AKUN --}}
                    <div>

                        <h2 class="font-bold text-sm mb-5">
                            Informasi Akun
                        </h2>


                        <div class="mb-4">

                            <label class="block text-xs font-semibold mb-2">
                                Nama Lengkap
                            </label>

                            <input
                                type="text"
                                name="name"
                                value="{{ old('name', $pengguna->name) }}"
                                class="w-full border border-gray-200
                                       rounded-md px-4 py-2.5 text-xs"
                                required>

                        </div>


                        <div class="mb-4">

                            <label class="block text-xs font-semibold mb-2">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email', $pengguna->email) }}"
                                class="w-full border border-gray-200
                                       rounded-md px-4 py-2.5 text-xs"
                                required>

                        </div>


                        <div class="mb-4">

                            <label class="block text-xs font-semibold mb-2">
                                Password Baru
                            </label>

                            <input
                                type="password"
                                name="password"
                                placeholder="Kosongkan jika tidak ingin mengubah"
                                class="w-full border border-gray-200
                                       rounded-md px-4 py-2.5 text-xs">

                        </div>


                        <div>

                            <label class="block text-xs font-semibold mb-2">
                                Konfirmasi Password
                            </label>

                            <input
                                type="password"
                                name="password_confirmation"
                                placeholder="Konfirmasi password baru"
                                class="w-full border border-gray-200
                                       rounded-md px-4 py-2.5 text-xs">

                        </div>

                    </div>


                    {{-- DETAIL --}}
                    <div>

                        <div class="border border-gray-200 rounded-md p-5">

                            <h2 class="font-bold text-sm mb-5">
                                Detail Pengguna
                            </h2>


                            <label class="block text-xs font-semibold mb-2">
                                Peran
                            </label>

                            <select
                                name="role"
                                class="w-full border border-gray-200
                                       rounded-md px-3 py-2.5 text-xs mb-5">

                                <option value="Admin"
                                    {{ old('role', $pengguna->role) == 'Admin' ? 'selected' : '' }}>
                                    Admin
                                </option>

                                <option value="User"
                                    {{ old('role', $pengguna->role) == 'User' ? 'selected' : '' }}>
                                    User
                                </option>

                            </select>


                            <label class="block text-xs font-semibold mb-3">
                                Status
                            </label>

                            <div class="flex gap-5">

                                <label class="flex items-center gap-2 text-xs">

                                    <input
                                        type="radio"
                                        name="status"
                                        value="Aktif"
                                        {{ old('status', $pengguna->status) == 'Aktif' ? 'checked' : '' }}>

                                    Aktif

                                </label>


                                <label class="flex items-center gap-2 text-xs">

                                    <input
                                        type="radio"
                                        name="status"
                                        value="Nonaktif"
                                        {{ old('status', $pengguna->status) == 'Nonaktif' ? 'checked' : '' }}>

                                    Nonaktif

                                </label>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="flex justify-end gap-3 mt-8">

                    <a
                        href="{{ route('admin.pengguna.index') }}"
                        class="border border-gray-300
                               px-5 py-2 rounded-md
                               text-xs">

                        Batal

                    </a>


                    <button
                        type="submit"
                        class="bg-[#FF8066]
                               text-white
                               px-5 py-2
                               rounded-md
                               text-xs
                               font-semibold">

                        Simpan Perubahan

                    </button>

                </div>

            </form>

        </div>

    </main>

</div>

@endsection