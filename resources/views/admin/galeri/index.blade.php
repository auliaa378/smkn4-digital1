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


        {{-- MENU UTAMA --}}
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


            {{-- GALERI AKTIF --}}
            <a href="{{ route('admin.galeri.index') }}"
               class="flex items-center gap-4 px-4 py-3.5
                      rounded-lg bg-[#2868C7] font-semibold">

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


        {{-- PEMISAH --}}
        <div class="border-t border-white/20 mx-4 my-6"></div>


        {{-- MENU BAWAH --}}
        <nav class="px-4 space-y-2">

            {{-- PENGGUNA --}}
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
    <main class="flex-1 bg-[#F8FAFC] min-w-0">

        <div class="px-10 py-8">

            {{-- HEADER --}}
            <div class="flex items-center justify-between mb-8">

                <div>

                    <p class="text-sm text-gray-400 mb-2">
                        Dashboard / Galeri
                    </p>

                    <h1 class="text-3xl font-bold text-[#173F7A]">
                        Data Galeri
                    </h1>

                    <p class="text-gray-500 mt-2">
                        Kelola foto dan dokumentasi SMKN 4 Bogor.
                    </p>

                </div>


                {{-- TAMBAH FOTO --}}
                <a href="{{ route('admin.galeri.create') }}"
                   class="inline-flex items-center gap-2
                          bg-[#FF8066]
                          hover:bg-[#ff6f52]
                          text-white
                          font-semibold
                          px-6 py-3
                          rounded-lg
                          shadow-sm
                          transition">

                    <span class="text-xl">+</span>

                    Tambah Foto

                </a>

            </div>


            {{-- SEARCH & FILTER --}}
            <div class="bg-white rounded-xl shadow-sm
                        border border-gray-100
                        p-6 mb-7">

                <div class="flex items-center gap-5">

                    <div class="flex-1">

                        <input
                            type="text"
                            placeholder="Cari foto..."
                            class="w-full
                                   border border-gray-200
                                   rounded-lg
                                   px-5 py-3
                                   text-sm
                                   focus:ring-2
                                   focus:ring-blue-300
                                   focus:border-blue-400
                                   focus:outline-none"
                        >

                    </div>


                    <select
                        class="w-56
                               border border-gray-200
                               rounded-lg
                               px-5 py-3
                               text-sm
                               text-gray-600
                               focus:ring-2
                               focus:ring-blue-300
                               focus:outline-none">

                        <option>Semua Kategori</option>
                        <option>Kegiatan</option>
                        <option>Prestasi</option>
                        <option>Fasilitas</option>

                    </select>

                </div>

            </div>


            {{-- TABEL --}}
            <div class="bg-white rounded-xl
                        shadow-sm
                        border border-gray-100
                        overflow-hidden">

                <table class="w-full">

                    <thead class="bg-gray-50 border-b">

                        <tr>

                            <th class="px-7 py-5 text-left
                                       text-sm font-semibold
                                       text-gray-600">
                                No
                            </th>

                            <th class="px-7 py-5 text-left
                                       text-sm font-semibold
                                       text-gray-600">
                                Gambar
                            </th>

                            <th class="px-7 py-5 text-left
                                       text-sm font-semibold
                                       text-gray-600">
                                Judul
                            </th>

                            <th class="px-7 py-5 text-left
                                       text-sm font-semibold
                                       text-gray-600">
                                Kategori
                            </th>

                            <th class="px-7 py-5 text-left
                                       text-sm font-semibold
                                       text-gray-600">
                                Status
                            </th>

                            <th class="px-7 py-5 text-center
                                       text-sm font-semibold
                                       text-gray-600">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody class="divide-y divide-gray-100">

                        @forelse($galeris as $index => $galeri)

                        <tr class="hover:bg-gray-50 transition">

                            {{-- NO --}}
                            <td class="px-7 py-5 text-gray-600">
                                {{ $galeris->firstItem() + $index }}
                            </td>


                            {{-- GAMBAR --}}
                            <td class="px-7 py-4">

                                @if($galeri->foto)

                                    <img
                                        src="{{ asset('images/galeri/' . $galeri->foto) }}"
                                        alt="{{ $galeri->judul }}"
                                        class="w-24 h-16
                                               object-cover
                                               rounded-lg
                                               border border-gray-200"
                                    >

                                @else

                                    <div class="w-24 h-16
                                                bg-gray-100
                                                rounded-lg
                                                flex items-center
                                                justify-center
                                                text-xs
                                                text-gray-400">

                                        No Image

                                    </div>

                                @endif

                            </td>


                            {{-- JUDUL --}}
                            <td class="px-7 py-5">

                                <p class="font-semibold text-gray-800">
                                    {{ $galeri->judul }}
                                </p>

                            </td>


                            {{-- KATEGORI --}}
                            <td class="px-7 py-5">

                                <span class="inline-flex
                                             px-3 py-1
                                             rounded-full
                                             bg-blue-50
                                             text-[#173F7A]
                                             text-sm
                                             font-medium">

                                    {{ $galeri->kategori }}

                                </span>

                            </td>


                            {{-- STATUS --}}
                            <td class="px-7 py-5">

                                @if($galeri->status === 'Aktif')

                                    <span class="inline-flex
                                                 items-center
                                                 gap-2
                                                 text-sm
                                                 font-medium
                                                 text-green-600">

                                        <span class="w-2.5 h-2.5
                                                     bg-green-500
                                                     rounded-full">
                                        </span>

                                        Aktif

                                    </span>

                                @else

                                    <span class="inline-flex
                                                 items-center
                                                 gap-2
                                                 text-sm
                                                 font-medium
                                                 text-gray-500">

                                        <span class="w-2.5 h-2.5
                                                     bg-gray-400
                                                     rounded-full">
                                        </span>

                                        Nonaktif

                                    </span>

                                @endif

                            </td>


                            {{-- AKSI --}}
                            <td class="px-7 py-5">

                                <div class="flex items-center
                                            justify-center
                                            gap-3">

                                    {{-- EDIT --}}
                                    <a
                                        href="{{ route('admin.galeri.edit', $galeri->id) }}"
                                        class="w-10 h-10
                                               rounded-lg
                                               bg-[#FF8066]
                                               text-white
                                               flex items-center
                                               justify-center
                                               hover:bg-[#ff6f52]
                                               transition">

                                        <svg class="w-4 h-4"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             viewBox="0 0 24 24">

                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M12 20h9"/>

                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/>

                                        </svg>

                                    </a>


                                    {{-- HAPUS --}}
                                    <form
    action="{{ route('admin.galeri.destroy', $galeri->id) }}"
    method="POST">

    @csrf
    @method('DELETE')

    <button
        type="button"
        onclick="openDeleteModal(this.closest('form'), 'foto galeri')"
        class="w-9 h-9 rounded-md
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
                                class="px-7 py-16 text-center">

                                <p class="text-gray-400 text-sm">
                                    Belum ada data galeri.
                                </p>

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>


                {{-- PAGINATION --}}
                @if($galeris->hasPages())

                    <div class="px-7 py-5 border-t">
                        {{ $galeris->links() }}
                    </div>

                @endif

            </div>

        </div>

    </main>

</div>

@endsection