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


        {{-- MENU --}}
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


        <div class="border-t border-white/20 mx-4 my-6"></div>


        <nav class="px-4 space-y-2">

            <a href="#"
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
            <div class="mb-8">

                <p class="text-sm text-gray-400 mb-2">
                    Dashboard / Galeri / Tambah Galeri
                </p>

                <h1 class="text-3xl font-bold text-[#173F7A]">
                    Tambah Galeri
                </h1>

                <p class="text-gray-500 mt-2">
                    Tambahkan foto baru ke galeri SMKN 4 Bogor.
                </p>

            </div>


            {{-- FORM CARD --}}
            <div class="bg-white rounded-xl
                        shadow-sm
                        border border-gray-100
                        p-8">

                <form
                    action="{{ route('admin.galeri.store') }}"
                    method="POST"
                    enctype="multipart/form-data">

                    @csrf


                    {{-- KATEGORI --}}
                    <div class="mb-6">

                        <label class="block text-sm font-semibold
                                      text-gray-700 mb-2">

                            Kategori

                        </label>

                        <input
                            type="text"
                            name="kategori"
                            value="{{ old('kategori') }}"
                            placeholder="Contoh: Kegiatan"
                            class="w-full
                                   border border-gray-200
                                   rounded-lg
                                   px-5 py-3
                                   text-sm
                                   focus:ring-2
                                   focus:ring-blue-300
                                   focus:border-blue-400
                                   focus:outline-none"
                            required
                        >

                        @error('kategori')
                            <p class="text-red-500 text-xs mt-2">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- JUDUL --}}
                    <div class="mb-6">

                        <label class="block text-sm font-semibold
                                      text-gray-700 mb-2">

                            Judul Galeri

                        </label>

                        <input
                            type="text"
                            name="judul"
                            value="{{ old('judul') }}"
                            placeholder="Masukkan judul galeri"
                            class="w-full
                                   border border-gray-200
                                   rounded-lg
                                   px-5 py-3
                                   text-sm
                                   focus:ring-2
                                   focus:ring-blue-300
                                   focus:border-blue-400
                                   focus:outline-none"
                            required
                        >

                        @error('judul')
                            <p class="text-red-500 text-xs mt-2">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- FOTO --}}
                    <div class="mb-6">

                        <label class="block text-sm font-semibold
                                      text-gray-700 mb-2">

                            Upload Foto

                        </label>

                        <div class="border-2 border-dashed
                                    border-gray-200
                                    rounded-xl
                                    p-10
                                    text-center
                                    hover:border-blue-300
                                    transition">

                            <div class="mb-4">

                                <svg class="w-12 h-12 mx-auto
                                            text-gray-300"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="1.5"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M3 16.5V6a2 2 0 012-2h14a2 2 0 012 2v10.5"/>

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M3 16.5l4.5-4.5 3 3 3.5-4 7 6.5"/>

                                    <circle cx="8.5"
                                            cy="8.5"
                                            r="1.5"/>

                                </svg>

                            </div>

                            <input
                                type="file"
                                name="foto"
                                accept="image/*"
                                class="text-sm"
                                required
                            >

                            <p class="text-xs text-gray-400 mt-3">
                                Pilih gambar JPG, JPEG, atau PNG. Maksimal 2MB.
                            </p>

                        </div>

                        @error('foto')
                            <p class="text-red-500 text-xs mt-2">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- STATUS --}}
                    <div class="mb-8">

                        <label class="block text-sm font-semibold
                                      text-gray-700 mb-3">

                            Status

                        </label>

                        <div class="flex items-center gap-8">

                            <label class="flex items-center gap-3 text-sm">

                                <input
                                    type="radio"
                                    name="status"
                                    value="Aktif"
                                    checked
                                    class="w-4 h-4">

                                <span>Aktif</span>

                            </label>


                            <label class="flex items-center gap-3 text-sm">

                                <input
                                    type="radio"
                                    name="status"
                                    value="Nonaktif"
                                    class="w-4 h-4">

                                <span>Nonaktif</span>

                            </label>

                        </div>

                    </div>


                    {{-- BUTTON --}}
                    <div class="flex justify-end gap-4 pt-5
                                border-t border-gray-100">

                        <a
                            href="{{ route('admin.galeri.index') }}"
                            class="px-6 py-3
                                   border border-gray-300
                                   rounded-lg
                                   text-sm
                                   font-medium
                                   text-gray-600
                                   hover:bg-gray-50
                                   transition">

                            Batal

                        </a>


                        <button
                            type="submit"
                            class="bg-[#FF8066]
                                   hover:bg-[#ff6f52]
                                   text-white
                                   px-7 py-3
                                   rounded-lg
                                   text-sm
                                   font-semibold
                                   transition">

                            Simpan Gambar

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </main>

</div>

@endsection