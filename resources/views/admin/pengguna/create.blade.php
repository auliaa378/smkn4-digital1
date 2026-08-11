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
                    <h1 class="font-bold text-[17px] leading-tight">
                        SMKN 4
                    </h1>

                    <p class="font-bold text-[17px] leading-tight">
                        BOGOR DIGITAL
                    </p>
                </div>

            </div>

        </div>


        <nav class="px-4 space-y-2">

            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-4 px-4 py-3.5 rounded-lg hover:bg-white/10 font-semibold">

                <span class="text-xl">⌂</span>
                <span>Dashboard</span>

            </a>


            <a href="{{ route('admin.artikel.index') }}"
               class="flex items-center gap-4 px-4 py-3.5 rounded-lg hover:bg-white/10 font-semibold">

                <span class="text-xl">▤</span>
                <span>Informasi / Artikel</span>

            </a>


            <a href="{{ route('admin.galeri.index') }}"
               class="flex items-center gap-4 px-4 py-3.5 rounded-lg hover:bg-white/10 font-semibold">

                <span class="text-xl">▣</span>
                <span>Galeri</span>

            </a>

        </nav>


        <div class="border-t border-white/20 mx-4 my-6"></div>


        <nav class="px-4 space-y-2">

            <a href="{{ route('admin.pengguna.index') }}"
               class="flex items-center gap-4 px-4 py-3.5 rounded-lg bg-[#2868C7] font-semibold">

                <span class="text-xl">♙</span>
                <span>Pengguna</span>

            </a>


            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button
                    class="w-full flex items-center gap-4 px-4 py-3.5
                           rounded-lg hover:bg-white/10
                           font-semibold text-left">

                    <span class="text-xl">↪</span>
                    <span>Keluar</span>

                </button>

            </form>

        </nav>

    </aside>


    {{-- CONTENT --}}
    <main class="flex-1 bg-white">

        {{-- TOP --}}
        <div class="px-8 pt-7">

            <a href="{{ route('admin.pengguna.index') }}"
               class="flex items-center gap-2
                      border border-gray-200
                      rounded-md
                      px-4 py-3
                      text-sm
                      font-semibold
                      text-gray-700">

                <span class="text-lg">←</span>

                Tambah Pengguna

            </a>


            <div class="mt-2 text-[10px] text-gray-400">

                Dashboard / Pengguna / Tambah Pengguna

            </div>

        </div>


        {{-- FORM --}}
        <div class="px-8 py-7">

            <form
                action="{{ route('admin.pengguna.store') }}"
                method="POST">

                @csrf

                <div class="grid grid-cols-[1fr_330px] gap-8">


                    {{-- INFORMASI AKUN --}}
                    <div>

                        <h2 class="font-bold text-sm text-gray-800 mb-5">
                            Informasi Akun
                        </h2>


                        {{-- NAMA --}}
                        <div class="mb-4">

                            <label class="block text-xs font-semibold mb-2">
                                Nama Lengkap
                            </label>

                            <input
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Masukkan nama lengkap"
                                class="w-full border border-gray-200
                                       rounded-md px-4 py-2.5
                                       text-xs
                                       focus:outline-none
                                       focus:ring-1
                                       focus:ring-blue-400"
                                required
                            >

                            @error('name')
                                <p class="text-red-500 text-[10px] mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- EMAIL --}}
                        <div class="mb-4">

                            <label class="block text-xs font-semibold mb-2">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Masukkan email"
                                class="w-full border border-gray-200
                                       rounded-md px-4 py-2.5
                                       text-xs
                                       focus:outline-none
                                       focus:ring-1
                                       focus:ring-blue-400"
                                required
                            >

                            @error('email')
                                <p class="text-red-500 text-[10px] mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- PASSWORD --}}
                        <div class="mb-4">

                            <label class="block text-xs font-semibold mb-2">
                                Password
                            </label>

                            <input
                                type="password"
                                name="password"
                                placeholder="Masukkan password"
                                class="w-full border border-gray-200
                                       rounded-md px-4 py-2.5
                                       text-xs
                                       focus:outline-none
                                       focus:ring-1
                                       focus:ring-blue-400"
                                required
                            >

                        </div>


                        {{-- CONFIRM PASSWORD --}}
                        <div>

                            <label class="block text-xs font-semibold mb-2">
                                Konfirmasi Password
                            </label>

                            <input
                                type="password"
                                name="password_confirmation"
                                placeholder="Konfirmasi password"
                                class="w-full border border-gray-200
                                       rounded-md px-4 py-2.5
                                       text-xs
                                       focus:outline-none
                                       focus:ring-1
                                       focus:ring-blue-400"
                                required
                            >

                        </div>

                    </div>


                    {{-- DETAIL PENGGUNA --}}
                    <div>

                        <div class="border border-gray-200 rounded-md p-5">

                            <h2 class="font-bold text-sm text-gray-800 mb-5">
                                Detail Pengguna
                            </h2>


                            {{-- ROLE --}}
                            <label class="block text-xs font-semibold mb-2">
                                Peran
                            </label>

                            <select
                                name="role"
                                class="w-full border border-gray-200
                                       rounded-md px-3 py-2.5
                                       text-xs mb-3">

                                <option value="">
                                    Pilih Peran
                                </option>

                                <option value="Admin"
                                    {{ old('role') == 'Admin' ? 'selected' : '' }}>
                                    Admin
                                </option>

                                <option value="User"
                                    {{ old('role') == 'User' ? 'selected' : '' }}>
                                    User
                                </option>

                            </select>


                            <p class="text-[10px] text-gray-500 mb-5">
                                Tentukan level akses pengguna
                            </p>


                            {{-- STATUS --}}
                            <label class="block text-xs font-semibold mb-3">
                                Status
                            </label>

                            <div class="flex items-center gap-5">

                                <label class="flex items-center gap-2 text-xs">

                                    <input
                                        type="radio"
                                        name="status"
                                        value="Aktif"
                                        checked>

                                    Aktif

                                </label>


                                <label class="flex items-center gap-2 text-xs">

                                    <input
                                        type="radio"
                                        name="status"
                                        value="Nonaktif">

                                    Nonaktif

                                </label>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- BUTTON --}}
                <div class="flex justify-end gap-3 mt-8">

                    <a
                        href="{{ route('admin.pengguna.index') }}"
                        class="border border-gray-300
                               px-5 py-2
                               rounded-md
                               text-xs
                               text-gray-600">

                        Batal

                    </a>


                    <button
                        type="submit"
                        class="bg-[#FF8066]
                               hover:bg-[#ff6f52]
                               text-white
                               px-5 py-2
                               rounded-md
                               text-xs
                               font-semibold">

                        Simpan Pengguna

                    </button>

                </div>

            </form>

        </div>

    </main>

</div>

@endsection