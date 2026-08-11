@extends('layouts.admin')

@section('content')

<div class="min-h-screen bg-gray-100">

    <div class="max-w-7xl mx-auto px-8 py-8">

        {{-- HEADER --}}
        <div class="flex items-center justify-between mb-6">

            <div>
                <p class="text-sm text-gray-400">
                    Dashboard / Galeri
                </p>

                <h1 class="text-2xl font-bold text-[#173F7A] mt-2">
                    Data Galeri
                </h1>
            </div>

            {{-- TAMBAH GALERI --}}
            <a href="{{ route('admin.galeri.create') }}"
               class="bg-[#FF8066] hover:bg-[#ff6f52]
                      text-white text-sm font-medium
                      px-5 py-2.5 rounded-md transition">

                + Tambah Foto

            </a>

        </div>


        {{-- SEARCH & FILTER --}}
        <div class="bg-white rounded-lg shadow-sm p-5 mb-6">

            <div class="flex items-center gap-4">

                <input
                    type="text"
                    placeholder="Cari foto..."
                    class="flex-1 border border-gray-300
                           rounded-md px-4 py-2
                           text-sm focus:ring-2
                           focus:ring-blue-400 focus:outline-none"
                >

                <select
                    class="border border-gray-300
                           rounded-md px-4 py-2
                           text-sm">

                    <option>Semua Kategori</option>
                    <option>Kegiatan</option>
                    <option>Prestasi</option>
                    <option>Fasilitas</option>

                </select>

            </div>

        </div>


        {{-- TABEL GALERI --}}
        <div class="bg-white rounded-lg shadow-sm overflow-hidden">

            <table class="w-full text-sm">

                <thead class="bg-gray-50 border-b">

                    <tr>

                        <th class="px-6 py-4 text-left font-semibold text-gray-600">
                            No
                        </th>

                        <th class="px-6 py-4 text-left font-semibold text-gray-600">
                            Gambar
                        </th>

                        <th class="px-6 py-4 text-left font-semibold text-gray-600">
                            Kategori
                        </th>

                        <th class="px-6 py-4 text-left font-semibold text-gray-600">
                            Status
                        </th>

                        <th class="px-6 py-4 text-center font-semibold text-gray-600">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody class="divide-y">

                    @forelse($galeris as $index => $galeri)

                    <tr class="hover:bg-gray-50">

                        {{-- NO --}}
                        <td class="px-6 py-4">
                            {{ $index + 1 }}
                        </td>


                        {{-- GAMBAR --}}
                        <td class="px-6 py-3">

                            @if($galeri->gambar)

                                <img
                                    src="{{ asset('storage/' . $galeri->gambar) }}"
                                    alt="Galeri"
                                    class="w-16 h-12
                                           object-cover
                                           rounded-md
                                           border"
                                >

                            @else

                                <div class="w-16 h-12
                                            bg-gray-200
                                            rounded-md
                                            flex items-center
                                            justify-center
                                            text-xs text-gray-400">

                                    No Image

                                </div>

                            @endif

                        </td>


                        {{-- KATEGORI --}}
                        <td class="px-6 py-4">

                            <span class="text-sm text-gray-700">
                                {{ $galeri->kategori }}
                            </span>

                        </td>


                        {{-- STATUS --}}
                        <td class="px-6 py-4">

                            <span class="inline-flex items-center gap-1
                                         text-xs font-medium
                                         text-green-600">

                                <span class="w-2 h-2 bg-green-500 rounded-full"></span>

                                Aktif

                            </span>

                        </td>


                        {{-- AKSI --}}
                        <td class="px-6 py-4">

                            <div class="flex items-center justify-center gap-2">

                                {{-- EDIT --}}
                                <a
                                    href="{{ route('admin.galeri.edit', $galeri->id) }}"
                                    class="w-8 h-8 rounded-md
                                           bg-[#FF8066]
                                           text-white
                                           flex items-center
                                           justify-center
                                           hover:bg-[#ff6f52]">

                                    <i class="fa-solid fa-pen text-xs"></i>

                                </a>


                                {{-- HAPUS --}}
                                <form
                                    action="{{ route('admin.galeri.destroy', $galeri->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus foto ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="w-8 h-8 rounded-md
                                               bg-gray-100
                                               text-gray-600
                                               flex items-center
                                               justify-center
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

                        <td colspan="5"
                            class="px-6 py-12
                                   text-center
                                   text-gray-400">

                            Belum ada data galeri.

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection