@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-[#f4f5f7]">

    <div class="flex min-h-screen">

        {{-- =====================================================
            SIDEBAR
        ====================================================== --}}
        <aside class="w-[270px] bg-[#173F7A] text-white flex-shrink-0 hidden lg:flex flex-col">

            {{-- LOGO --}}
            <div class="px-6 py-7">

                <div class="flex items-center gap-4">

                    <div class="w-16 h-16 bg-[#FFF4D6] rounded-full flex items-center justify-center overflow-hidden">

                        <img
                            src="{{ asset('images/logo.jpg') }}"
                            alt="Logo SMKN 4 Bogor"
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
                   class="flex items-center gap-4 px-4 py-3.5 rounded-lg
                          bg-[#2868C7] text-white font-semibold">

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


                {{-- Artikel --}}
<a href="{{ route('admin.artikel.index') }}"
   class="flex items-center gap-4 px-5 py-3.5 rounded-lg hover:bg-white/10 transition font-semibold">

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
                   class="flex items-center gap-4 px-4 py-3.5 rounded-lg
                          hover:bg-white/10 transition font-semibold">

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


            {{-- GARIS PEMISAH --}}
            <div class="border-t border-white/20 mx-4 my-6"></div>


            {{-- MENU BAWAH --}}
            <nav class="px-4 space-y-2">

                {{-- PENGGUNA --}}
                <a href="{{ route('admin.pengguna.index') }}"
                   class="flex items-center gap-4 px-4 py-3.5 rounded-lg
                          hover:bg-white/10 transition font-semibold">

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


                {{-- LOGOUT --}}
                <a href="{{ route('admin.keluar') }}"
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

</a>

            </nav>

        </aside>



        {{-- =====================================================
            BAGIAN KANAN
        ====================================================== --}}
        <main class="flex-1 min-w-0 bg-[#f4f5f7]">


            {{-- =================================================
                TOPBAR
            ================================================== --}}
            <header class="h-[72px] bg-white border-b border-gray-200
                           px-6 lg:px-8 flex items-center justify-between">

                {{-- KIRI --}}
                <div class="flex items-center gap-4">

                    <button class="text-gray-700">

                        <svg class="w-6 h-6"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M4 6h16M4 12h16M4 18h16"/>

                        </svg>

                    </button>

                    <h2 class="text-xl font-bold text-gray-900">
                        Dashboard
                    </h2>

                </div>


                {{-- KANAN --}}
                <div class="flex items-center gap-5">

                    {{-- SEARCH --}}
                    <div class="hidden md:flex items-center
                                border border-gray-200 rounded-lg
                                px-3 py-2 w-[170px]">

                        <svg class="w-4 h-4 text-gray-400"
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
                            placeholder="Cari disini..."
                            class="ml-2 w-full border-0 outline-none
                                   text-xs focus:ring-0"
                        >

                    </div>


                    {{-- NOTIFICATION --}}
                    <button class="relative text-gray-700">

                        <svg class="w-5 h-5"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M15 17h5l-1.5-2v-5a6.5 6.5 0 00-13 0v5L4 17h5"/>

                        </svg>

                        <span class="absolute top-0 right-0
                                     w-2 h-2 bg-red-500 rounded-full">
                        </span>

                    </button>


                    {{-- PROFILE --}}
                    <div class="flex items-center gap-3">

                        <div class="w-9 h-9 rounded-full
                                    bg-[#173F7A] text-white
                                    flex items-center justify-center
                                    font-bold text-sm">

                            A

                        </div>

                        <div class="hidden sm:block">

                            <p class="text-sm font-bold text-gray-800">
                                Admin
                            </p>

                            <p class="text-[10px] text-gray-400">
                                Super Admin
                            </p>

                        </div>

                    </div>

                </div>

            </header>



            {{-- =================================================
                CONTENT
            ================================================== --}}
            <div class="p-6 lg:p-8">


                {{-- WELCOME --}}
                <div class="mb-6">

                    <h1 class="text-2xl lg:text-[26px] font-bold text-gray-900">
                        Selamat Datang, Admin!
                    </h1>

                    <p class="text-xs text-gray-500 mt-1">
                        Kelola informasi website SMKN 4 Bogor Digital dengan mudah.
                    </p>

                </div>



                {{-- =================================================
                    4 STATISTIC CARD
                ================================================== --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4
                            gap-4 mb-8">


                    {{-- PENGGUNA --}}
                    <div class="bg-white rounded-xl border border-gray-200
                                shadow-sm p-4">

                        <div class="flex items-center gap-4">

                            <div class="w-12 h-12 rounded-xl bg-blue-100
                                        flex items-center justify-center">

                                <svg class="w-6 h-6 text-blue-600"
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

                                </svg>

                            </div>

                            <div>

                                <p class="text-2xl font-bold text-gray-900">
                                    4
                                </p>

                                <p class="text-[10px] text-gray-500">
                                    Total Pengguna
                                </p>

                            </div>

                        </div>

                        <a href="#"
                           class="inline-block mt-4 text-[11px]
                                  text-blue-600 font-medium">

                            Lihat Detail →

                        </a>

                    </div>



                    {{-- ARTIKEL --}}
                    <div class="bg-white rounded-xl border border-gray-200
                                shadow-sm p-4">

                        <div class="flex items-center gap-4">

                            <div class="w-12 h-12 rounded-xl bg-green-100
                                        flex items-center justify-center">

                                <svg class="w-6 h-6 text-green-600"
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

                            </div>

                            <div>

                                <p class="text-2xl font-bold text-gray-900">
                                    6
                                </p>

                                <p class="text-[10px] text-gray-500">
                                    Total Artikel
                                </p>

                            </div>

                        </div>

                        <a href="/artikel"
                           class="inline-block mt-4 text-[11px]
                                  text-blue-600 font-medium">

                            Lihat Detail →

                        </a>

                    </div>



                    {{-- GALERI --}}
                    <div class="bg-white rounded-xl border border-gray-200
                                shadow-sm p-4">

                        <div class="flex items-center gap-4">

                            <div class="w-12 h-12 rounded-xl bg-purple-100
                                        flex items-center justify-center">

                                <svg class="w-6 h-6 text-purple-600"
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

                                    <path d="M21 15l-5-5L5 20"/>

                                </svg>

                            </div>

                            <div>

                                <p class="text-2xl font-bold text-gray-900">
                                    9
                                </p>

                                <p class="text-[10px] text-gray-500">
                                    Total Galeri
                                </p>

                            </div>

                        </div>

                        <a href="/galeri"
                           class="inline-block mt-4 text-[11px]
                                  text-blue-600 font-medium">

                            Lihat Detail →

                        </a>

                    </div>



                    {{-- PENGUNJUNG --}}
                    <div class="bg-white rounded-xl border border-gray-200
                                shadow-sm p-4">

                        <div class="flex items-center gap-4">

                            <div class="w-12 h-12 rounded-xl bg-orange-100
                                        flex items-center justify-center">

                                <svg class="w-6 h-6 text-orange-500"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12z"/>

                                    <circle cx="12"
                                            cy="12"
                                            r="3"/>

                                </svg>

                            </div>

                            <div>

                                <p class="text-2xl font-bold text-gray-900">
                                    1.245
                                </p>

                                <p class="text-[10px] text-gray-500">
                                    Total Pengunjung
                                </p>

                            </div>

                        </div>

                        <div class="mt-4 text-[11px]">

                            <span class="font-semibold text-gray-800">
                                Hari ini
                            </span>

                            <span class="text-green-500 ml-2">
                                ↑ 18%
                            </span>

                        </div>

                    </div>

                </div>



                {{-- =================================================
                    BAGIAN BAWAH
                ================================================== --}}
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-5">


                    {{-- AKTIVITAS --}}
                    <div class="bg-white rounded-xl border border-gray-200
                                shadow-sm overflow-hidden">

                        <div class="px-5 py-4 border-b border-gray-100">

                            <h2 class="text-base font-bold text-gray-900">
                                Aktivitas Terbaru
                            </h2>

                        </div>


                        @for ($i = 0; $i < 4; $i++)

                        <div class="px-5 py-3 border-b border-gray-100
                                    flex items-center justify-between">

                            <div class="flex items-center gap-3">

                                <div class="w-8 h-8 rounded-full
                                            bg-blue-100 flex items-center
                                            justify-center flex-shrink-0">

                                    <span class="text-[10px]
                                                 font-bold text-blue-600">
                                        A
                                    </span>

                                </div>

                                <div>

                                    <p class="text-[10px] text-gray-700 leading-tight">
                                        Artikel Baru "Lomba Desain Poster"
                                        ditambahkan oleh Admin
                                    </p>

                                    <p class="text-[9px] text-gray-400 mt-1">
                                        Baru saja
                                    </p>

                                </div>

                            </div>

                            <span class="text-[9px] text-gray-400">
                                09.45
                            </span>

                        </div>

                        @endfor


                        <div class="p-4">

                            <a href="#"
                               class="inline-flex items-center
                                      px-3 py-2 border border-gray-200
                                      rounded-md text-[10px]
                                      text-blue-600 hover:bg-blue-50">

                                Lihat Semua Aktivitas

                            </a>

                        </div>

                    </div>



                    {{-- =================================================
                        STATISTIK PENGUNJUNG
                    ================================================== --}}
                    <div class="bg-white rounded-xl border border-gray-200
                                shadow-sm p-5">

                        <h2 class="text-base font-bold text-gray-900">

                            Statistik Pengunjung

                            <span class="text-xs font-normal">
                                (30 Hari Terakhir)
                            </span>

                        </h2>


                        <div class="mt-4">

                            <p class="text-[10px] text-gray-500">
                                Total Pengunjung
                            </p>

                            <div class="flex items-center gap-3">

                                <p class="text-2xl font-bold text-gray-900">
                                    1.245
                                </p>

                                <span class="text-[10px] text-green-500">
                                    ↑ 18%
                                </span>

                            </div>

                        </div>


                        {{-- GRAPH --}}
                        <div class="mt-3 h-[130px] relative">

                            <div class="absolute inset-0 flex flex-col
                                        justify-between">

                                <div class="border-t border-gray-100"></div>
                                <div class="border-t border-gray-100"></div>
                                <div class="border-t border-gray-100"></div>
                                <div class="border-t border-gray-100"></div>
                                <div class="border-t border-gray-100"></div>

                            </div>


                            <svg
                                viewBox="0 0 500 170"
                                class="absolute inset-0 w-full h-full"
                                preserveAspectRatio="none">

                                <defs>

                                    <linearGradient
                                        id="chartFill"
                                        x1="0"
                                        x2="0"
                                        y1="0"
                                        y2="1">

                                        <stop
                                            offset="0%"
                                            stop-color="#4F46E5"
                                            stop-opacity="0.25"/>

                                        <stop
                                            offset="100%"
                                            stop-color="#4F46E5"
                                            stop-opacity="0.02"/>

                                    </linearGradient>

                                </defs>


                                <path
                                    d="M0 135
                                       C50 95, 80 95, 115 125
                                       C150 150, 180 145, 210 120
                                       C245 90, 260 20, 305 25
                                       C350 30, 375 75, 410 95
                                       C445 115, 470 105, 500 80
                                       L500 170
                                       L0 170 Z"
                                    fill="url(#chartFill)"
                                />


                                <path
                                    d="M0 135
                                       C50 95, 80 95, 115 125
                                       C150 150, 180 145, 210 120
                                       C245 90, 260 20, 305 25
                                       C350 30, 375 75, 410 95
                                       C445 115, 470 105, 500 80"
                                    fill="none"
                                    stroke="#4F46E5"
                                    stroke-width="2"
                                />

                            </svg>

                        </div>


                        {{-- HARI --}}
                        <div class="flex justify-between
                                    text-[8px] text-gray-400">

                            <span>Mo</span>
                            <span>Tu</span>
                            <span>We</span>
                            <span>Th</span>
                            <span>Fr</span>
                            <span>Sa</span>
                            <span>Su</span>

                        </div>


                        {{-- HALAMAN POPULER --}}
                        <div class="mt-5">

                            <h3 class="font-bold text-xs text-gray-900 mb-3">
                                Halaman Populer
                            </h3>

                            <div class="space-y-2 text-[10px]">

                                <div class="flex justify-between text-gray-600">
                                    <span>1. Beranda</span>
                                    <span>120</span>
                                </div>

                                <div class="flex justify-between text-gray-600">
                                    <span>2. Jurusan</span>
                                    <span>180</span>
                                </div>

                                <div class="flex justify-between text-gray-600">
                                    <span>3. Artikel</span>
                                    <span>100</span>
                                </div>

                                <div class="flex justify-between text-gray-600">
                                    <span>4. Galeri</span>
                                    <span>200</span>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </main>

    </div>

</div>

@endsection