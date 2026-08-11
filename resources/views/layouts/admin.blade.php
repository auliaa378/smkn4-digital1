<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Admin - SMKN 4 Bogor Digital' }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-white">

    @yield('content')

    {{-- =========================
    MODAL KONFIRMASI HAPUS
========================= --}}
<div id="deleteModal"
     class="fixed inset-0 z-[9999] hidden items-center justify-center">

    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black/40"></div>

    {{-- Modal --}}
    <div class="relative bg-white w-[430px] rounded-lg shadow-2xl overflow-hidden">

        {{-- Header --}}
        <div class="flex items-center justify-between px-6 py-5 border-b">

            <h2 class="text-base font-bold text-gray-800">
                Hapus Data?
            </h2>

            <button type="button"
                    onclick="closeDeleteModal()"
                    class="text-gray-400 hover:text-gray-700 text-xl">

                ×

            </button>

        </div>


        {{-- Isi --}}
        <div class="px-6 py-7">

            <div class="flex items-start gap-4">

                {{-- Icon Warning --}}
                <div class="w-12 h-12 rounded-full bg-red-100
                            flex items-center justify-center flex-shrink-0">

                    <div class="w-8 h-8 rounded-full bg-red-500
                                flex items-center justify-center">

                        <svg class="w-5 h-5 text-white"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2.5"
                             viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M12 8v4m0 4h.01"/>

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M10.3 3.6L2.9 17a2 2 0 001.7 3h14.8a2 2 0 001.7-3L13.7 3.6a2 2 0 00-3.4 0z"/>

                        </svg>

                    </div>

                </div>


                <div>

                    <h3 class="font-semibold text-gray-800 mb-2">
                        Yakin ingin menghapus?
                    </h3>

                    <p id="deleteMessage"
                       class="text-sm text-gray-500 leading-relaxed">

                        Apakah Anda yakin ingin menghapus data ini?
                        Tindakan ini tidak dapat dikembalikan.

                    </p>

                </div>

            </div>

        </div>


        {{-- Footer --}}
        <div class="flex justify-end gap-3 px-6 py-4 border-t bg-gray-50">

            <button type="button"
                    onclick="closeDeleteModal()"
                    class="px-5 py-2 rounded-md
                           border border-gray-300
                           bg-white
                           text-sm text-gray-600
                           hover:bg-gray-100">

                Batal

            </button>


            <button type="button"
                    onclick="confirmDelete()"
                    class="px-5 py-2 rounded-md
                           bg-[#FF8066]
                           hover:bg-[#ff6f52]
                           text-white
                           text-sm font-medium">

                Hapus

            </button>

        </div>

    </div>

</div>


{{-- =========================
    MODAL BERHASIL
========================= --}}
<div id="successModal"
     class="fixed inset-0 z-[10000] hidden items-center justify-center">

    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black/40"></div>


    <div class="relative bg-white w-[430px] rounded-lg shadow-2xl">

        {{-- Header --}}
        <div class="flex items-center justify-between px-6 py-5 border-b">

            <h2 class="text-base font-bold text-gray-800">
                Berhasil
            </h2>

            <button type="button"
                    onclick="closeSuccessModal()"
                    class="text-gray-400 hover:text-gray-700 text-xl">

                ×

            </button>

        </div>


        {{-- Isi --}}
        <div class="px-6 py-8 text-center">

            {{-- Icon Check --}}
            <div class="w-14 h-14 mx-auto rounded-full bg-green-100
                        flex items-center justify-center mb-5">

                <div class="w-10 h-10 rounded-full bg-green-500
                            flex items-center justify-center">

                    <svg class="w-6 h-6 text-white"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2.5"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M5 12l4 4L19 6"/>

                    </svg>

                </div>

            </div>


            <p id="successMessage"
               class="text-sm text-gray-600">

                Data berhasil dihapus.

            </p>

        </div>


        {{-- Footer --}}
        <div class="px-6 py-4 border-t text-right">

            <button type="button"
                    onclick="closeSuccessModal()"
                    class="px-6 py-2 rounded-md
                           bg-[#2868C7]
                           hover:bg-[#1f58ad]
                           text-white text-sm">

                OK

            </button>

        </div>

    </div>

</div>


{{-- =========================
    JAVASCRIPT MODAL
========================= --}}
<script>

let deleteForm = null;


/* =========================
   BUKA MODAL HAPUS
========================= */

function openDeleteModal(form, jenis) {

    deleteForm = form;

    document.getElementById('deleteMessage').innerText =
        'Apakah Anda yakin ingin menghapus ' +
        jenis +
        ' ini? Tindakan ini tidak dapat dikembalikan.';

    const modal = document.getElementById('deleteModal');

    modal.classList.remove('hidden');
    modal.classList.add('flex');

}


/* =========================
   TUTUP MODAL HAPUS
========================= */

function closeDeleteModal() {

    const modal = document.getElementById('deleteModal');

    modal.classList.add('hidden');
    modal.classList.remove('flex');

    deleteForm = null;

}


/* =========================
   KONFIRMASI HAPUS
========================= */

function confirmDelete() {

    if (deleteForm) {

        deleteForm.submit();

    }

}


/* =========================
   MODAL BERHASIL
========================= */

function openSuccessModal(message) {

    document.getElementById('successMessage').innerText = message;

    const modal = document.getElementById('successModal');

    modal.classList.remove('hidden');
    modal.classList.add('flex');

}


function closeSuccessModal() {

    const modal = document.getElementById('successModal');

    modal.classList.add('hidden');
    modal.classList.remove('flex');

}

</script>


{{-- =========================
    SUCCESS SESSION
========================= --}}

@if(session('success'))

<script>

document.addEventListener('DOMContentLoaded', function () {

    openSuccessModal(
        @json(session('success'))
    );

});

</script>

@endif

</body>

</html>