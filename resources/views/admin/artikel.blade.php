@foreach($artikels as $artikel)

    <div class="bg-white rounded-xl overflow-hidden shadow-sm">

        {{-- GAMBAR --}}
        @if($artikel->gambar)

            <img
                src="{{ asset('storage/' . $artikel->gambar) }}"
                alt="{{ $artikel->judul }}"
                class="w-full h-52 object-cover"
            >

        @else

            <div class="w-full h-52 bg-gray-200
                        flex items-center justify-center">

                Tidak ada gambar

            </div>

        @endif


        <div class="p-5">

            {{-- KATEGORI --}}
            <span class="inline-block px-3 py-1 rounded-full
                         bg-[#FF8B78] text-white text-xs">

                {{ $artikel->kategori }}

            </span>


            {{-- JUDUL --}}
            <h2 class="mt-3 text-lg font-bold text-[#173F7A]">

                {{ $artikel->judul }}

            </h2>


            {{-- TANGGAL --}}
            <p class="text-xs text-gray-400 mt-2">

                {{ $artikel->tanggal->format('d F Y') }}

            </p>


            {{-- DESKRIPSI --}}
            <p class="text-sm text-gray-600 mt-3 line-clamp-3">

                {{ $artikel->deskripsi }}

            </p>


            {{-- SELENGKAPNYA --}}
            <a
                href="{{ route('detail.artikel', $artikel->id) }}"
                class="inline-block mt-4 text-sm
                       text-[#2563EB] font-semibold">

                Selengkapnya →

            </a>

        </div>

    </div>

@endforeach