@extends('layouts.admin')

@section('content')

<div class="min-h-screen bg-white">

    <div class="p-6 lg:p-8">

        {{-- BREADCRUMB --}}
        <div class="flex items-center gap-2 text-xs text-gray-500 mb-6">

            <a href="{{ route('admin.dashboard') }}"
               class="hover:text-blue-600">
                Dashboard
            </a>

            <span>/</span>

            <a href="{{ route('admin.artikel.index') }}"
               class="hover:text-blue-600">
                Artikel
            </a>

            <span>/</span>

            <span class="text-gray-400">
                Edit Artikel
            </span>

        </div>


        <form
            action="{{ route('admin.artikel.update', $artikel->id) }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf
            @method('PUT')


            <div class="grid grid-cols-1 lg:grid-cols-[1fr_220px] gap-5">

                {{-- KIRI --}}
                <div>

                    {{-- JUDUL --}}
                    <div class="mb-5">

                        <label class="block text-sm font-semibold text-gray-900 mb-2">
                            Judul
                        </label>

                        <input
                            type="text"
                            name="judul"
                            value="{{ old('judul', $artikel->judul) }}"
                            placeholder="Tulis Judul Artikel..."
                            class="w-full h-12 px-4 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >

                        @error('judul')
                            <p class="text-xs text-red-500 mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- KATEGORI --}}
                    <div class="mb-5">

                        <label class="block text-sm font-semibold text-gray-900 mb-2">
                            Kategori
                        </label>

                        <select
                            name="kategori"
                            class="w-full h-12 px-4 border border-gray-300 rounded-md text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >

                            <option value="">
                                Pilih Kategori
                            </option>

                            <option value="Prestasi"
                                {{ old('kategori', $artikel->kategori) == 'Prestasi' ? 'selected' : '' }}>
                                Prestasi
                            </option>

                            <option value="Berita"
                                {{ old('kategori', $artikel->kategori) == 'Berita' ? 'selected' : '' }}>
                                Berita
                            </option>

                            <option value="Kegiatan"
                                {{ old('kategori', $artikel->kategori) == 'Kegiatan' ? 'selected' : '' }}>
                                Kegiatan
                            </option>

                        </select>

                    </div>


                    {{-- TANGGAL --}}
                    <div class="mb-5">

                        <label class="block text-sm font-semibold text-gray-900 mb-2">
                            Tanggal
                        </label>

                        <input
                            type="date"
                            name="tanggal"
                            value="{{ old('tanggal', $artikel->tanggal) }}"
                            class="w-full h-12 px-4 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >

                    </div>


                    {{-- DESKRIPSI --}}
                    <div>

                        <label class="block text-sm font-semibold text-gray-900 mb-2">
                            Deskripsi
                        </label>

                        <textarea
                            name="deskripsi"
                            rows="8"
                            placeholder="Tulis deskripsi artikel disini..."
                            class="w-full px-4 py-4 border border-gray-300 rounded-md text-sm resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >{{ old('deskripsi', $artikel->deskripsi) }}</textarea>

                    </div>

                </div>


                {{-- KANAN --}}
                <div>

                    <label class="block text-sm font-semibold text-gray-900 mb-2">
                        Gambar Utama
                    </label>

                    {{-- GAMBAR LAMA --}}
                    @if($artikel->gambar)

                        <img
                            src="{{ asset('storage/artikel/' . $artikel->gambar) }}"
                            class="w-full h-[138px] object-cover rounded-md border border-gray-300 mb-3"
                        >

                    @endif


                    <label
                        for="gambar"
                        class="h-[138px] border border-gray-300 rounded-md flex flex-col items-center justify-center cursor-pointer hover:bg-gray-50 transition"
                    >

                        <svg
                            class="w-9 h-9 text-gray-500 mb-2"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            viewBox="0 0 24 24"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 3h9l4 4v14H6a2 2 0 01-2-2V5a2 2 0 012-2z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M14 3v5h5"
                            />

                        </svg>

                        <span class="text-xs text-gray-500">
                            Klik untuk mengganti gambar
                        </span>

                    </label>

                    <input
                        id="gambar"
                        type="file"
                        name="gambar"
                        accept="image/png,image/jpeg,image/jpg"
                        class="hidden"
                    >

                    <p class="text-[10px] text-gray-400 mt-2">
                        Format: JPG, PNG, JPEG
                    </p>

                </div>

            </div>


            {{-- BUTTON --}}
            <div class="flex justify-end gap-4 mt-8">

                <a
                    href="{{ route('admin.artikel.index') }}"
                    class="px-6 py-2.5 border border-gray-300 rounded-md text-sm text-gray-700 hover:bg-gray-50"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="px-7 py-2.5 bg-[#FF8066] hover:bg-[#ff7055] text-white rounded-md text-sm font-semibold"
                >
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

</div>

@endsection