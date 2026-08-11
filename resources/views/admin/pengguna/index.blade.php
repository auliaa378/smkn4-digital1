@extends('layouts.admin')

@section('content')

<div class="flex min-h-screen">

    {{-- SIDEBAR --}}
    <aside class="w-[270px] bg-[#173F7A] text-white flex-shrink-0 hidden lg:flex flex-col">

        {{-- LOGO --}}
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


        {{-- MENU ATAS --}}
        <nav class="px-4 space-y-2">

            {{-- DASHBOARD --}}
            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-4 px-4 py-3.5
                      rounded-lg hover:bg-white/10 font-semibold">

                <svg class="w-6 h-6"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h4v-6h4v6h4a1 1 0 001-1V10"/>

                </svg>

                <span>Dashboard</span>

            </a>


            {{-- ARTIKEL --}}
            <a href="{{ route('admin.artikel.index') }}"
               class="flex items-center gap-4 px-4 py-3.5
                      rounded-lg hover:bg-white/10 font-semibold">

                <svg class="w-6 h-6"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M6 4h12a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2z"/>

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M8 8h8M8 12h8M8 16h5"/>

                </svg>

                <span>Informasi / Artikel</span>

            </a>


            {{-- GALERI --}}
            <a href="{{ route('admin.galeri.index') }}"
               class="flex items-center gap-4 px-4 py-3.5
                      rounded-lg hover:bg-white/10 font-semibold">

                <svg class="w-6 h-6"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     viewBox="0 0 24 24">

                    <rect x="3"
                          y="4"
                          width="18"
                          height="16"
                          rx="2"/>

                    <circle cx="8.5"
                            cy="9"
                            r="1.5"/>

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M21 15l-5-5L5 20"/>

                </svg>

                <span>Galeri</span>

            </a>

        </nav>


        <div class="border-t border-white/20 mx-4 my-6"></div>


        {{-- MENU BAWAH --}}
        <nav class="px-4 space-y-2">

            {{-- PENGGUNA AKTIF --}}
            <a href="{{ route('admin.pengguna.index') }}"
               class="flex items-center gap-4 px-4 py-3.5
                      rounded-lg bg-[#2868C7] font-semibold">

                <svg class="w-6 h-6"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/>

                    <circle cx="9"
                            cy="7"
                            r="4"/>

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>

                </svg>

                <span>Pengguna</span>

            </a>


            {{-- KELUAR --}}
            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button
                    class="w-full flex items-center gap-4 px-4 py-3.5
                           rounded-lg hover:bg-white/10
                           font-semibold text-left">

                    <svg class="w-6 h-6"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M10 17l5-5-5-5M15 12H3"/>

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M21 19V5a2 2 0 00-2-2h-6"/>

                    </svg>

                    <span>Keluar</span>

                </button>

            </form>

        </nav>

    </aside>


    {{-- CONTENT --}}
    <main class="flex-1 bg-white">

        {{-- TOP BAR --}}
        <div class="h-[72px] border-b border-gray-200
                    flex items-center justify-between
                    px-8">

            <div class="flex items-center gap-3">

                <svg class="w-5 h-5 text-gray-700"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          d="M4 6h16M4 12h16M4 18h16"/>

                </svg>

                <div>

                    <h2 class="font-bold text-gray-800 text-lg">
                        Pengguna
                    </h2>

                    <p class="text-[10px] text-gray-400">
                        Dashboard / Pengguna
                    </p>

                </div>

            </div>


            {{-- ADMIN --}}
            <div class="flex items-center gap-4">

                <div class="relative">

                    <svg class="w-5 h-5 text-gray-600"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="1.8"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M15 17h5l-1.5-2V10a6.5 6.5 0 00-13 0v5L4 17h5"/>

                        <path stroke-linecap="round"
                              d="M10 20h4"/>

                    </svg>

                    <span class="absolute top-0 right-0
                                 w-2 h-2 bg-red-500 rounded-full">
                    </span>

                </div>

                <div class="w-8 h-8 rounded-full bg-[#173F7A]
                            text-white flex items-center justify-center
                            text-xs font-bold">

                    A

                </div>

                <div class="leading-tight">

                    <p class="text-xs font-semibold text-gray-800">
                        Admin
                    </p>

                    <p class="text-[9px] text-gray-400">
                        Super Admin
                    </p>

                </div>

            </div>

        </div>


        {{-- PAGE CONTENT --}}
        <div class="px-8 py-7">

            {{-- HEADER --}}
            <div class="flex items-center justify-between mb-5">

                <div>

                    <h1 class="text-2xl font-bold text-gray-800">
                        Data Pengguna
                    </h1>

                    <p class="text-xs text-gray-400 mt-1">
                        Kelola akun pengguna yang dapat mengakses dashboard
                    </p>

                </div>


                <a href="{{ route('admin.pengguna.create') }}"
                   class="bg-[#FF8066]
                          hover:bg-[#ff6f52]
                          text-white
                          text-xs
                          font-semibold
                          px-4
                          py-2
                          rounded-md
                          transition">

                    + Tambah Pengguna

                </a>

            </div>


            {{-- SUCCESS --}}
            @if(session('success'))

                <div class="mb-4 px-4 py-3
                            bg-green-50 border border-green-200
                            text-green-600 text-xs rounded-md">

                    {{ session('success') }}

                </div>

            @endif


            {{-- ERROR --}}
            @if(session('error'))

                <div class="mb-4 px-4 py-3
                            bg-red-50 border border-red-200
                            text-red-600 text-xs rounded-md">

                    {{ session('error') }}

                </div>

            @endif


            {{-- SEARCH --}}
            <div class="mb-4">

                <div class="relative">

                    <svg class="absolute left-3 top-1/2
                                -translate-y-1/2
                                w-3.5 h-3.5
                                text-gray-400"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2"
                         viewBox="0 0 24 24">

                        <circle cx="11"
                                cy="11"
                                r="7"/>

                        <path stroke-linecap="round"
                              d="M20 20l-4-4"/>

                    </svg>

                    <input
                        type="text"
                        placeholder="Cari Pengguna..."
                        class="w-full
                               border border-gray-200
                               rounded-md
                               pl-9 pr-4 py-2
                               text-xs
                               focus:outline-none
                               focus:ring-1
                               focus:ring-blue-400"
                    >

                </div>

            </div>


            {{-- TABLE --}}
            <div class="border border-gray-200 rounded-md overflow-hidden">

                <table class="w-full text-xs">

                    <thead class="bg-gray-50">

                        <tr>

                            <th class="px-4 py-3 text-left font-semibold text-gray-700">
                                No
                            </th>

                            <th class="px-4 py-3 text-left font-semibold text-gray-700">
                                Nama
                            </th>

                            <th class="px-4 py-3 text-left font-semibold text-gray-700">
                                Email
                            </th>

                            <th class="px-4 py-3 text-left font-semibold text-gray-700">
                                Peran
                            </th>

                            <th class="px-4 py-3 text-left font-semibold text-gray-700">
                                Status
                            </th>

                            <th class="px-4 py-3 text-center font-semibold text-gray-700">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody class="divide-y divide-gray-100">

                        @forelse($penggunas as $index => $pengguna)

                            <tr class="hover:bg-gray-50">

                                {{-- NO --}}
                                <td class="px-4 py-3 text-gray-600">

                                    {{ $penggunas->firstItem() + $index }}

                                </td>


                                {{-- NAMA --}}
                                <td class="px-4 py-3">

                                    <div>

                                        <p class="font-semibold text-gray-800">
                                            {{ $pengguna->name }}
                                        </p>

                                        <p class="text-[9px] text-gray-400">
                                            {{ $pengguna->role ?? 'User' }}
                                        </p>

                                    </div>

                                </td>


                                {{-- EMAIL --}}
                                <td class="px-4 py-3 text-gray-600">

                                    {{ $pengguna->email }}

                                </td>


                                {{-- ROLE --}}
                                <td class="px-4 py-3">

                                    @if(($pengguna->role ?? 'User') === 'Admin')

                                        <span class="inline-block
                                                     px-2 py-1
                                                     rounded-sm
                                                     bg-blue-100
                                                     text-blue-600
                                                     text-[9px]
                                                     font-semibold">

                                            Admin

                                        </span>

                                    @else

                                        <span class="inline-block
                                                     px-2 py-1
                                                     rounded-sm
                                                     bg-green-100
                                                     text-green-600
                                                     text-[9px]
                                                     font-semibold">

                                            User

                                        </span>

                                    @endif

                                </td>


                                {{-- STATUS --}}
                                <td class="px-4 py-3">

                                    @if(($pengguna->status ?? 'Aktif') === 'Aktif')

                                        <span class="inline-flex items-center gap-1
                                                     text-green-600">

                                            <span class="w-1.5 h-1.5
                                                         bg-green-500 rounded-full">
                                            </span>

                                            Aktif

                                        </span>

                                    @else

                                        <span class="inline-flex items-center gap-1
                                                     text-red-500">

                                            <span class="w-1.5 h-1.5
                                                         bg-red-500 rounded-full">
                                            </span>

                                            Nonaktif

                                        </span>

                                    @endif

                                </td>


                                {{-- AKSI --}}
                                <td class="px-4 py-3">

                                    <div class="flex justify-center gap-2">

                                        {{-- EDIT --}}
                                        <a
                                            href="{{ route('admin.pengguna.edit', $pengguna->id) }}"
                                            class="w-7 h-7
                                                   rounded-md
                                                   bg-[#FF8066]
                                                   text-white
                                                   flex items-center
                                                   justify-center
                                                   hover:bg-[#ff6f52]">

                                            <svg class="w-3.5 h-3.5"
                                                 fill="none"
                                                 stroke="currentColor"
                                                 stroke-width="2"
                                                 viewBox="0 0 24 24">

                                                <path stroke-linecap="round"
                                                      stroke-linejoin="round"
                                                      d="M12 20h9"/>

                                                <path stroke-linecap="round"
                                                      stroke-linejoin="round"
                                                      d="M16.5 3.5a2.1 2.1 0 013 3L8 18l-4 1 1-4z"/>

                                            </svg>

                                        </a>


                                        {{-- DELETE --}}
                                        <form
    action="{{ route('admin.pengguna.destroy', $user->id) }}"
    method="POST">

    @csrf
    @method('DELETE')

    <button
        type="button"
        onclick="openDeleteModal(this.closest('form'), 'pengguna')"
        class="w-8 h-8 rounded-md
               bg-gray-100
               text-gray-600
               flex items-center justify-center
               hover:bg-red-100
               hover:text-red-600">

        <i class="fa-solid fa-trash text-xs"></i>

    </button>

</form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="6"
                                    class="px-4 py-12 text-center text-gray-400">

                                    Belum ada data pengguna.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>


            {{-- FOOTER TABLE --}}
            <div class="flex items-center justify-between mt-4">

                <p class="text-[10px] text-gray-500">

                    Menampilkan
                    {{ $penggunas->firstItem() ?? 0 }}
                    -
                    {{ $penggunas->lastItem() ?? 0 }}
                    dari
                    {{ $penggunas->total() }}
                    data

                </p>


                <div>

                    {{ $penggunas->links() }}

                </div>

            </div>

        </div>

    </main>

</div>

@endsection