@extends('layouts.admin')

@section('content')

<div class="min-h-screen bg-white">

    <div class="p-6 lg:p-8">

        {{-- BREADCRUMB --}}
        <div class="flex items-center gap-2 text-xs text-gray-500 mb-6">
            <a href="{{ route('admin.dashboard') }}" class="hover:text-blue-600">
                Dashboard
            </a>

            <span>/</span>

            <a href="{{ route('admin.artikel.index') }}" class="hover:text-blue-600">
                Artikel
            </a>

            <span>/</span>

            <span class="text-gray-400">
                Tambah Artikel
            </span>
        </div>


        {{-- FORM --}}
        <form
            action="{{ route('admin.artikel.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-[1fr_220px] gap-5">

                {{-- ==========================================
                     BAGIAN KIRI
                =========================================== --}}
                <div>

                    {{-- JUDUL --}}
                    <div class="mb-5">

                        <label class="block text-sm font-semibold text-gray-900 mb-2">
                            Judul
                        </label>

                        <input
                            type="text"
                            name="judul"
                            value="{{ old('judul') }}"
                            placeholder="Tulis Judul Artikel..."
                            class="w-full h-12 px-4
                                   border border-gray-300
                                   rounded-md
                                   text-sm
                                   focus:outline-none
                                   focus:ring-2
                                   focus:ring-blue-500
                                   focus:border-blue-500"
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
                            class="w-full h-12 px-4
                                   border border-gray-300
                                   rounded-md
                                   text-sm
                                   text-gray-600
                                   focus:outline-none
                                   focus:ring-2
                                   focus:ring-blue-500"
                        >

                            <option value="">
                                Pilih Kategori
                            </option>

                            <option value="Prestasi"
                                {{ old('kategori') == 'Prestasi' ? 'selected' : '' }}>
                                Prestasi
                            </option>

                            <option value="Berita"
                                {{ old('kategori') == 'Berita' ? 'selected' : '' }}>
                                Berita
                            </option>

                            <option value="Kegiatan"
                                {{ old('kategori') == 'Kegiatan' ? 'selected' : '' }}>
                                Kegiatan
                            </option>

                        </select>

                        @error('kategori')
                            <p class="text-xs text-red-500 mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- TANGGAL --}}
                    <div class="mb-5">

                        <label class="block text-sm font-semibold text-gray-900 mb-2">
                            Tanggal
                        </label>

                        <input
                            type="date"
                            name="tanggal"
                            value="{{ old('tanggal', date('Y-m-d')) }}"
                            class="w-full h-12 px-4
                                   border border-gray-300
                                   rounded-md
                                   text-sm
                                   text-gray-600
                                   focus:outline-none
                                   focus:ring-2
                                   focus:ring-blue-500"
                        >

                        @error('tanggal')
                            <p class="text-xs text-red-500 mt-1">
                                {{ $message }}
                            </p>
                        @enderror

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
                            class="w-full px-4 py-4
                                   border border-gray-300
                                   rounded-md
                                   text-sm
                                   resize-none
                                   focus:outline-none
                                   focus:ring-2
                                   focus:ring-blue-500"
                        >{{ old('deskripsi') }}</textarea>

                        @error('deskripsi')
                            <p class="text-xs text-red-500 mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                </div>


                {{-- ==========================================
                     BAGIAN KANAN - GAMBAR
                =========================================== --}}
                <div>

                    <label class="block text-sm font-semibold text-gray-900 mb-2">
                        Gambar Utama
                    </label>

                    <label
                        for="gambar"
                        class="h-[138px] border border-gray-300
                               rounded-md
                               flex flex-col
                               items-center
                               justify-center
                               cursor-pointer
                               hover:bg-gray-50
                               transition"
                    >

                        {{-- ICON --}}
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
                            Klik atau tambah gambar disini
                        </span>

                    </label>

                    <input
                        id="gambar"
                        type="file"
                        name="gambar"
                        accept="image/png,image/jpeg,image/jpg"
                        class="hidden"
                        onchange="previewImage(event)"
                    >

                    <img
                        id="preview"
                        class="hidden mt-3 w-full h-32 object-cover rounded-md border"
                    >

                    <p class="text-[10px] text-gray-400 mt-2">
                        Format: JPG, PNG, JPEG
                    </p>

                </div>

            </div>


            {{-- ==========================================
                 BUTTON
            =========================================== --}}
            <div class="flex justify-end gap-4 mt-8">

                <a
                    href="{{ route('admin.artikel.index') }}"
                    class="px-6 py-2.5
                           border border-gray-300
                           rounded-md
                           text-sm
                           text-gray-700
                           hover:bg-gray-50
                           transition"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="px-7 py-2.5
                           bg-[#FF8066]
                           hover:bg-[#ff7055]
                           text-white
                           rounded-md
                           text-sm
                           font-semibold
                           transition"
                >
                    Simpan Artikel
                </button>

            </div>

        </form>

    </div>

</div>


{{-- PREVIEW GAMBAR --}}
<script>

function previewImage(event) {

    const input = event.target;
    const preview = document.getElementById('preview');

    if (input.files && input.files[0]) {

        const reader = new FileReader();

        reader.onload = function(e) {

            preview.src = e.target.result;
            preview.classList.remove('hidden');

        }

        reader.readAsDataURL(input.files[0]);

    }

}

</script>

@endsection