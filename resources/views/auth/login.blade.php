<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - SMKN 4 Bogor Digital</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-white">

<div class="min-h-screen flex flex-col lg:flex-row overflow-hidden">

    <!-- =====================================================
         BAGIAN KIRI
    ====================================================== -->
    <div class="relative w-full lg:w-1/2 min-h-[420px] lg:min-h-screen overflow-hidden bg-white">

        <!-- Foto / ilustrasi sekolah -->
        <div class="absolute inset-0">
            <img
                src="{{ asset('images/sekolahlogin.jpeg') }}"
                alt="SMKN 4 Bogor"
                class="w-full h-full object-cover"
            >
        </div>

        <!-- Overlay putih tipis supaya gambar lebih lembut -->
        <div class="absolute inset-0 bg-white/20"></div>

        <!-- BAGIAN BIRU -->
        <div
            class="absolute top-0 left-0 w-full h-[58%] bg-[#173F7A] z-10"
            style="clip-path: polygon(0 0, 100% 0, 100% 78%, 0 100%);"
        >

            <div class="px-10 lg:px-14 pt-12 lg:pt-16">

                <!-- Logo -->
                <div class="flex items-center gap-4">

                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-md overflow-hidden">

                        <img
                            src="{{ asset('images/logo.jpg') }}"
                            alt="Logo SMKN 4 Bogor"
                            class="w-12 h-12 object-contain"
                        >

                    </div>

                    <div class="text-white">

                        <h1 class="text-xl lg:text-2xl font-bold tracking-wide">
                            SMKN 4 BOGOR
                        </h1>

                        <p class="text-lg lg:text-xl tracking-wide">
                            DIGITAL
                        </p>

                    </div>

                </div>

                <!-- Slogan -->
                <div class="mt-14 lg:mt-16 max-w-md">

                    <p class="text-white text-lg lg:text-xl leading-relaxed font-medium">
                        "Kelola jurusan, artikel, galeri, dan pengguna
                        dalam satu dashboard."
                    </p>

                </div>

            </div>

        </div>

        <!-- Aksen biru kecil bawah kiri -->
        <div class="absolute bottom-0 left-0 z-20
                    w-24 h-16 bg-[#173F7A]"
             style="clip-path: polygon(0 0, 100% 100%, 0 100%);">
        </div>

    </div>


    <!-- =====================================================
         BAGIAN KANAN - LOGIN
    ====================================================== -->
    <div class="w-full lg:w-1/2 min-h-screen bg-white flex items-center justify-center px-8 lg:px-20 py-12">

        <div class="w-full max-w-lg">

            <!-- Judul -->
            <div class="text-center mb-10">

                <h2 class="text-3xl lg:text-4xl font-bold text-[#173F7A]">
                    LOGIN ADMIN
                </h2>

                <p class="mt-3 text-sm text-gray-500">
                    Masuk untuk mengelola website SMKN 4 Bogor Digital.
                </p>

            </div>


            <!-- FORM -->
            <form method="POST" action="{{ route('login') }}" class="space-y-6">

                @csrf

                <!-- EMAIL -->
                <div>

                    <label
                        for="email"
                        class="block text-sm font-semibold text-[#173F7A] mb-2">
                        Email
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Masukkan email admin"
                        required
                        autofocus
                        autocomplete="username"
                        class="w-full px-4 py-3 rounded-md
                               border border-gray-300
                               text-sm text-gray-700
                               focus:outline-none
                               focus:ring-2
                               focus:ring-blue-500
                               focus:border-blue-500
                               transition"
                    >

                    @error('email')
                        <p class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- PASSWORD -->
                <div>

                    <label
                        for="password"
                        class="block text-sm font-semibold text-[#173F7A] mb-2">
                        Password
                    </label>

                    <div class="relative">

                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Masukkan password Anda"
                            required
                            autocomplete="current-password"
                            class="w-full px-4 py-3 pr-12 rounded-md
                                   border border-gray-300
                                   text-sm text-gray-700
                                   focus:outline-none
                                   focus:ring-2
                                   focus:ring-blue-500
                                   focus:border-blue-500
                                   transition"
                        >

                        <!-- Tombol lihat password -->
                        <button
                            type="button"
                            onclick="togglePassword()"
                            class="absolute right-4 top-1/2
                                   -translate-y-1/2
                                   text-gray-400
                                   hover:text-[#173F7A]
                                   transition">

                            <svg
                                id="eyeIcon"
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M2.458 12C3.732 7.943
                                    7.523 5 12 5c4.478 0
                                    8.268 2.943 9.542 7
                                    -1.274 4.057-5.064 7-9.542
                                    7-4.477 0-8.268-2.943-9.542-7z"/>

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0
                                    3 3 0 016 0z"/>

                            </svg>

                        </button>

                    </div>

                    @error('password')
                        <p class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- REMEMBER -->
                <div class="flex items-center">

                    <input
                        id="remember_me"
                        type="checkbox"
                        name="remember"
                        class="w-4 h-4 rounded
                               border-gray-300
                               text-blue-600
                               focus:ring-blue-500">

                    <label
                        for="remember_me"
                        class="ml-2 text-sm text-gray-500">
                        Ingat saya
                    </label>

                </div>


                <!-- BUTTON LOGIN -->
                <button
                    type="submit"
                    class="w-full bg-[#2563EB]
                           hover:bg-[#1D4ED8]
                           text-white
                           font-semibold
                           py-3.5
                           rounded-md
                           transition
                           duration-200
                           shadow-sm
                           hover:shadow-md">

                    Masuk
                    <span class="ml-2">→</span>

                </button>


                <!-- INFO -->
                <div class="text-center pt-2">

                    <p class="text-xs text-gray-400">
                        Akses khusus administrator
                    </p>

                </div>

            </form>

        </div>

    </div>

</div>


<!-- Toggle Password -->
<script>
    function togglePassword() {

        const password = document.getElementById('password');

        if (password.type === 'password') {
            password.type = 'text';
        } else {
            password.type = 'password';
        }

    }
</script>

</body>
</html>