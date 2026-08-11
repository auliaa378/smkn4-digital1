@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-8 py-8">

    {{-- Breadcrumb --}}
    <div class="text-xs text-gray-500 mb-6">
        <a href="/" class="hover:text-[#173F7A]">
            Beranda
        </a>

        <span class="mx-2">›</span>

        <span>
            Artikel Terbaru
        </span>
    </div>


    {{-- Judul --}}
    <div class="mb-8">

        <h1 class="text-3xl font-bold text-[#173F7A]">
            BERITA DAN INFORMASI
        </h1>

        <div class="w-12 h-[2px] bg-[#FF8066] mt-3"></div>

    </div>


    {{-- Grid Artikel --}}
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

    @forelse ($artikels as $artikel)

        <div class="bg-white
                    rounded-lg
                    border border-gray-200
                    shadow-sm
                    hover:shadow-md
                    transition
                    overflow-hidden">

            {{-- Gambar --}}
            @if ($artikel->gambar)
                <img
                    src="{{ asset('storage/' . $artikel->gambar) }}"
                    alt="{{ $artikel->judul }}"
                    class="w-full h-52 object-cover"
                >
            @else
                <img
                    src="{{ asset('images/artikel.jpg') }}"
                    alt="{{ $artikel->judul }}"
                    class="w-full h-52 object-cover"
                >
            @endif


            {{-- Isi Card --}}
            <div class="p-5">

                {{-- Kategori + Tanggal --}}
                <div class="flex items-center justify-between mb-3">

                    <span class="inline-block
                                 bg-[#FF8066]
                                 text-white
                                 text-xs
                                 px-2.5
                                 py-1
                                 rounded-full">

                        {{ $artikel->kategori }}

                    </span>

                    <span class="text-xs text-gray-400">
                        {{ \Carbon\Carbon::parse($artikel->tanggal)->format('d F Y') }}
                    </span>

                </div>


                {{-- Judul --}}
                <h2 class="font-bold text-lg
                           text-gray-800
                           leading-snug">

                    {{ $artikel->judul }}

                </h2>


                {{-- Deskripsi --}}
                <p class="text-gray-500
                          text-sm
                          leading-relaxed
                          mt-3">

                    {{ Str::limit($artikel->isi, 120) }}

                </p>


                {{-- Link Detail --}}
                <a
                    href="{{ route('detail.artikel', $artikel->id) }}"
                    class="inline-block mt-4
                           text-sm
                           font-semibold
                           text-[#173F7A]
                           hover:text-[#FF8066]
                           transition"
                >
                    Baca Selengkapnya →
                </a>

            </div>

        </div>

    @empty

        <div class="col-span-full text-center py-16">

            <p class="text-gray-500">
                Belum ada artikel.
            </p>

        </div>

    @endforelse

</div>

</div>


<!-- Footer -->
<footer class="bg-[#0f2a52] text-white pt-12 pb-6 mt-auto">
    <div class="max-w-7xl mx-auto px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8 border-b border-white/10 pb-8">
            
            <!-- Kolom 1: Tentang Sekolah -->
            <div>
                <h3 class="text-xl font-bold mb-3">SMKN 4 Bogor</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Jl. Raya Tajur No.Km. 4, Tajur, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16131.
                </p>
            </div>

            <!-- Kolom 2: Tautan Cepat -->
            <div>
                <h3 class="text-lg font-bold mb-3">Tautan Cepat</h3>
                <ul class="space-y-2 text-gray-400 text-sm">
                    <li><a href="/profil" class="hover:text-white transition">Profil Sekolah</a></li>
                    <li><a href="/jurusan" class="hover:text-white transition">Jurusan</a></li>
                    <li><a href="/artikel" class="hover:text-white transition">Berita dan Informasi</a></li>
                    <li><a href="/galeri" class="hover:text-white transition">Galeri</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Sosial Media -->
            <div>
                <h3 class="text-lg font-bold mb-3">Ikuti Kami</h3>
                <div class="flex space-x-4">
                    <!-- Ikon Facebook -->
                    <a href="#" class="bg-white/10 hover:bg-[#173F7A] p-2 rounded-full transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path></svg>
                    </a>
                    <!-- Ikon Instagram -->
                    <a href="#" class="bg-white/10 hover:bg-[#173F7A] p-2 rounded-full transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
                    </a>
                    <!-- Ikon YouTube -->
                    <a href="#" class="bg-white/10 hover:bg-[#173F7A] p-2 rounded-full transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path></svg>
                    </a>
                </div>
            </div>

        </div>
        
        <!-- Copyright -->
        <div class="text-center text-gray-400 text-sm">
            &copy; {{ date('Y') }} SMKN 4 Bogor. All Rights Reserved.
        </div>
    </div>
</footer>

@endsection