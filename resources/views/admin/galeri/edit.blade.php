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


        <div class="border-t border-white/20 mx-4 my-6"></div>


        {{-- MENU BAWAH --}}
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
    <main class="flex-1 bg-white">

        <div class="px-10 py-8">

            {{-- BREADCRUMB --}}
            <p class="text-xs text-gray-400 mb-3">
                Dashboard / Galeri / Edit Galeri
            </p>


            {{-- JUDUL --}}
            <h1 class="text-2xl font-bold text-gray-800 mb-8">
                Edit Galeri
            </h1>


            {{-- FORM --}}
            <form
                action="{{ route('admin.galeri.update', $galeri->id) }}"
                method="POST"
                enctype="multipart/form-data"
                class="max-w-2xl">

                @csrf
                @method('PUT')


                {{-- KATEGORI --}}
                <label class="block text-sm font-semibold mb-2">
                    Kategori
                </label>

                <input
                    type="text"
                    name="kategori"
                    value="{{ old('kategori', $galeri->kategori) }}"
                    placeholder="Contoh: Kegiatan"
                    class="w-full border border-gray-200 rounded-md
                           px-4 py-3 text-sm mb-5"
                    required
                >


                {{-- JUDUL --}}
                <label class="block text-sm font-semibold mb-2">
                    Judul Galeri
                </label>

                <input
                    type="text"
                    name="judul"
                    value="{{ old('judul', $galeri->judul) }}"
                    placeholder="Masukkan judul"
                    class="w-full border border-gray-200 rounded-md
                           px-4 py-3 text-sm mb-5"
                    required
                >


                {{-- FOTO LAMA --}}
                <label class="block text-sm font-semibold mb-2">
                    Foto Saat Ini
                </label>

                <div class="mb-5">

                    @if($galeri->foto)

                        <img
                            src="{{ asset('images/galeri/' . $galeri->foto) }}"
                            alt="{{ $galeri->judul }}"
                            class="w-48 h-32 object-cover rounded-md border"
                        >

                    @else

                        <div class="w-48 h-32 bg-gray-100
                                    rounded-md flex items-center
                                    justify-center text-sm text-gray-400">

                            Belum ada foto

                        </div>

                    @endif

                </div>


                {{-- UPLOAD FOTO BARU --}}
                <label class="block text-sm font-semibold mb-2">
                    Ganti Foto
                </label>

                <div class="border border-gray-200 rounded-md
                            p-6 text-center mb-5">

                    <input
                        type="file"
                        name="foto"
                        accept="image/*"
                        class="text-sm"
                    >

                    <p class="text-xs text-gray-400 mt-3">
                        Kosongkan jika tidak ingin mengganti foto
                    </p>

                </div>


                {{-- STATUS --}}
                <label class="block text-sm font-semibold mb-2">
                    Status
                </label>

                <div class="space-y-2 mb-8">

                    <label class="flex items-center gap-2 text-sm">

                        <input
                            type="radio"
                            name="status"
                            value="Aktif"
                            {{ old('status', $galeri->status) == 'Aktif' ? 'checked' : '' }}
                        >

                        Aktif

                    </label>


                    <label class="flex items-center gap-2 text-sm">

                        <input
                            type="radio"
                            name="status"
                            value="Nonaktif"
                            {{ old('status', $galeri->status) == 'Nonaktif' ? 'checked' : '' }}
                        >

                        Nonaktif

                    </label>

                </div>


                {{-- BUTTON --}}
                <div class="flex justify-end gap-3">

                    <a
                        href="{{ route('admin.galeri.index') }}"
                        class="border border-gray-300
                               px-5 py-2 rounded-md text-sm
                               hover:bg-gray-50">

                        Batal

                    </a>


                    <button
                        type="submit"
                        class="bg-[#FF8066]
                               hover:bg-[#ff6f52]
                               text-white
                               px-5 py-2
                               rounded-md
                               text-sm">

                        Simpan Perubahan

                    </button>

                </div>

            </form>

        </div>

    </main>

</div>

@endsection