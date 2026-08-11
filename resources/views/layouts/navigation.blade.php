<nav class="bg-[#173F7A] border-b border-blue-800">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <a href="/" class="flex items-center gap-3">
                <img
                    src="{{ asset('images/logo.jpg') }}"
                    alt="SMKN 4 Bogor"
                    class="w-10 h-10 object-contain"
                >

                <div class="text-white leading-tight">
                    <div class="font-bold text-sm">
                        SMKN 4 BOGOR
                    </div>
                    <div class="text-xs">
                        DIGITAL
                    </div>
                </div>
            </a>

            <!-- Navigation -->
            <div class="hidden sm:flex items-center gap-8">

                <a href="/"
                   class="text-white hover:text-blue-200 transition">
                    Beranda
                </a>

                <a href="/profil"
                   class="text-white hover:text-blue-200 transition">
                    Profil
                </a>

                <a href="/jurusan"
                   class="text-white hover:text-blue-200 transition">
                    Jurusan
                </a>

                <a href="/artikel"
                   class="text-white hover:text-blue-200 transition">
                    Artikel
                </a>

                <a href="/galeri"
                   class="text-white hover:text-blue-200 transition">
                    Galeri
                </a>

                <a href="/kontak"
                   class="text-white hover:text-blue-200 transition">
                    Kontak
                </a>

                <!-- LOGIN ADMIN -->
                <a href="{{ route('login') }}"
                   class="bg-[#4A79FF] hover:bg-blue-500 text-white px-5 py-2 rounded-lg transition">
                    Login
                </a>

            </div>

            <!-- Mobile Button -->
            <button
                type="button"
                class="sm:hidden text-white"
                onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">

                <svg class="w-6 h-6"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>

                </svg>

            </button>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden sm:hidden bg-[#173F7A]">

        <div class="px-6 pb-4 space-y-2">

            <a href="/"
               class="block text-white py-2">
                Beranda
            </a>

            <a href="/profil"
               class="block text-white py-2">
                Profil
            </a>

            <a href="/jurusan"
               class="block text-white py-2">
                Jurusan
            </a>

            <a href="/artikel"
               class="block text-white py-2">
                Artikel
            </a>

            <a href="/galeri"
               class="block text-white py-2">
                Galeri
            </a>

            <a href="/kontak"
               class="block text-white py-2">
                Kontak
            </a>

            <a href="{{ route('login') }}"
               class="block bg-[#4A79FF] text-white text-center px-4 py-2 rounded-lg mt-3">
                Login Admin
            </a>

        </div>

    </div>

</nav>