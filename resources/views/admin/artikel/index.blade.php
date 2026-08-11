@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-[#f4f5f7]">

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


                <a href="{{ route('admin.artikel.index') }}"
                   class="flex items-center gap-4 px-4 py-3.5
                          rounded-lg bg-[#2868C7] font-semibold">

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


            <nav class="px-4 space-y-2">

                <a href="{{ route('admin.pengguna.index') }}"
                   class="flex items-center gap-4 px-4 py-3.5
                          rounded-lg hover:bg-white/10 font-semibold">

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


                <form method="POST" action="{{ route('logout') }}">

                    @csrf

                    <button
                        class="w-full flex items-center gap-4 px-4 py-3.5
                               rounded-lg hover:bg-white/10 font-semibold text-left">

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


        {{-- MAIN --}}
        <main class="flex-1 min-w-0">

            {{-- TOPBAR --}}
            <header class="h-[72px] bg-white border-b border-gray-200
                           px-6 lg:px-8 flex items-center justify-between">

                <div class="flex items-center gap-4">

                    <span class="text-xl text-gray-700">☰</span>

                    <span class="text-gray-400 text-sm">
                        Dashboard
                    </span>

                    <span class="text-gray-300">/</span>

                    <span class="text-gray-700 text-sm font-medium">
                        Artikel
                    </span>

                </div>


                <div class="flex items-center gap-4">

                    <div class="hidden md:flex border border-gray-200
                                rounded-lg px-3 py-2 w-[170px]">

                        <input
                            type="text"
                            placeholder="Cari disini..."
                            class="w-full border-0 outline-none
                                   text-xs focus:ring-0"
                        >

                    </div>


                    <div class="w-9 h-9 rounded-full bg-[#173F7A]
                                text-white flex items-center justify-center
                                font-bold">

                        A

                    </div>

                    <div class="hidden md:block">

                        <p class="text-sm font-bold">
                            Admin
                        </p>

                        <p class="text-[10px] text-gray-400">
                            Super Admin
                        </p>

                    </div>

                </div>

            </header>


            {{-- CONTENT --}}
            <div class="p-6 lg:p-8">

                <div class="flex items-center justify-between mb-6">

                    <h1 class="text-2xl font-bold text-gray-900">
                        Data Informasi / Artikel
                    </h1>


                    <a href="{{ route('admin.artikel.create') }}"
                       class="bg-[#FF806D] hover:bg-[#ff6f5a]
                              text-white px-4 py-2 rounded-lg
                              text-xs font-semibold">

                        + Tambah Artikel

                    </a>

                </div>


                {{-- SUCCESS --}}
                @if(session('success'))

                    <div class="mb-5 bg-green-100 text-green-700
                                px-4 py-3 rounded-lg text-sm">

                        {{ session('success') }}

                    </div>

                @endif


                {{-- SEARCH + FILTER --}}
                <form method="GET"
                      action="{{ route('admin.artikel.index') }}"
                      class="flex gap-3 mb-3">

                    <div class="flex-1">

                        <input
                            type="text"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="⌕   Cari Artikel..."
                            class="w-full h-10 border border-gray-300
                                   rounded-lg px-4 text-xs
                                   focus:ring-1 focus:ring-blue-500
                                   focus:border-blue-500"
                        >

                    </div>


                    <select
                        name="kategori"
                        onchange="this.form.submit()"
                        class="w-[180px] h-10 border border-gray-300
                               rounded-lg px-3 text-xs">

                        <option value="">
                            Semua Kategori
                        </option>

                        <option value="Prestasi"
                            {{ request('kategori') == 'Prestasi' ? 'selected' : '' }}>
                            Prestasi
                        </option>

                        <option value="Berita"
                            {{ request('kategori') == 'Berita' ? 'selected' : '' }}>
                            Berita
                        </option>

                        <option value="Kegiatan"
                            {{ request('kategori') == 'Kegiatan' ? 'selected' : '' }}>
                            Kegiatan
                        </option>

                    </select>

                </form>


                {{-- TABLE --}}
                <div class="bg-white border border-gray-200
                            rounded-lg overflow-hidden">

                    <div class="overflow-x-auto">

                        <table class="w-full text-xs">

                            <thead class="bg-[#f7f7f7] border-b">

                                <tr>

                                    <th class="px-3 py-3 text-center w-[45px]">
                                        No
                                    </th>

                                    <th class="px-3 py-3 text-left">
                                        Judul
                                    </th>

                                    <th class="px-3 py-3 text-left">
                                        Kategori
                                    </th>

                                    <th class="px-3 py-3 text-left">
                                        Tanggal
                                    </th>

                                    <th class="px-3 py-3 text-center">
                                        Gambar
                                    </th>

                                    <th class="px-3 py-3 text-left">
                                        Deskripsi
                                    </th>

                                    <th class="px-3 py-3 text-center">
                                        Aksi
                                    </th>

                                </tr>

                            </thead>


                            <tbody>

                                @forelse($artikels as $index => $artikel)

                                    <tr class="border-b hover:bg-gray-50">

                                        <td class="px-3 py-3 text-center">
                                            {{ $artikels->firstItem() + $index }}
                                        </td>


                                        <td class="px-3 py-3 font-medium
                                                   text-gray-800 max-w-[150px]">

                                            {{ $artikel->judul }}

                                        </td>


                                        <td class="px-3 py-3">

                                            <span class="px-2 py-1 rounded-md
                                                bg-gray-100 text-gray-700">

                                                {{ $artikel->kategori }}

                                            </span>

                                        </td>


                                        <td class="px-3 py-3 whitespace-nowrap">

                                            {{ $artikel->tanggal->format('d F Y') }}

                                        </td>


                                        <td class="px-3 py-3 text-center">

                                            @if($artikel->gambar)

                                                <img
                                                    src="{{ asset('storage/' . $artikel->gambar) }}"
                                                    class="w-12 h-12 object-cover
                                                           rounded-md mx-auto"
                                                >

                                            @else

                                                <div class="w-12 h-12 bg-gray-100
                                                            rounded-md mx-auto
                                                            flex items-center
                                                            justify-center
                                                            text-gray-400">

                                                    📷

                                                </div>

                                            @endif

                                        </td>


                                        <td class="px-3 py-3 max-w-[230px]">

                                            <p class="line-clamp-4 text-gray-600">

                                                {{ $artikel->deskripsi }}

                                            </p>

                                        </td>


                                        <td class="px-3 py-3">

                                            <div class="flex items-center
                                                        justify-center gap-2">

                                                {{-- EDIT --}}
                                                <a
                                                    href="{{ route('admin.artikel.edit', $artikel) }}"
                                                    class="w-8 h-8 rounded-md
                                                           bg-[#FFB0A3]
                                                           text-white
                                                           flex items-center
                                                           justify-center">

                                                    ✎

                                                </a>


                                                {{-- DELETE --}}
                                                <form action="{{ route('admin.artikel.destroy', $artikel->id) }}"
      method="POST"
      onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">

    @csrf
    @method('DELETE')

    <button type="submit"
            class="w-9 h-9 rounded-md
                   bg-gray-100
                   text-gray-600
                   flex items-center justify-center
                   hover:bg-red-100
                   hover:text-red-600
                   cursor-pointer">

        <i class="fa-solid fa-trash text-xs"></i>

    </button>

</form>

                                            </div>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td colspan="7"
                                            class="text-center py-10
                                                   text-gray-400">

                                            Belum ada artikel.

                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>


                {{-- PAGINATION --}}
                <div class="mt-5 flex justify-center">

                    {{ $artikels->links() }}

                </div>

            </div>

        </main>

    </div>

</div>

@endsection