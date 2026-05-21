<!DOCTYPE html>
<html lang="en">
<head>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Dokumen Kinerja
    </title>

</head>

<body
    x-data="{ openModal: false }"
    class="bg-gray-50 text-gray-800"
>

    @include('partials.navbar')

    <!-- HERO -->
    <section class="relative pt-40 pb-24 overflow-hidden bg-gradient-to-br from-green-700 via-green-800 to-green-950">

        <!-- BG -->
        <div class="absolute inset-0">

            <div class="absolute top-0 left-0 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>

            <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-green-400/10 rounded-full blur-3xl"></div>

        </div>

        <div class="relative max-w-7xl mx-auto px-6">

            <!-- BREADCRUMB -->
            <div
                class="flex items-center gap-3 text-green-200 mb-8"
                data-aos="fade-up"
            >

                <a href="/" class="hover:text-white transition">
                    Beranda
                </a>

                <span>/</span>

                <span class="text-white">
                    Dokumen Kinerja
                </span>

            </div>

            <!-- TITLE -->
            <div data-aos="fade-up">

                <span class="uppercase tracking-[0.3em] text-green-300 font-semibold">
                    Public Documents
                </span>

                <h1 class="text-5xl lg:text-7xl font-bold text-white mt-6 leading-tight max-w-5xl">

                    Dokumen
                    Kinerja PD

                </h1>

                <p class="text-green-100 text-xl leading-relaxed mt-8 max-w-4xl">

                    Silahkan telusuri atau unduh dokumen yang anda butuhkan
                    untuk mendukung kebutuhan informasi dan kepentingan anda.

                </p>

            </div>

        </div>

    </section>

    <!-- CONTENT -->
    <section class="py-24 overflow-hidden">

        <div class="max-w-7xl mx-auto px-6">

            <!-- INTRO -->
            <div
                class="bg-white rounded-[40px] shadow-xl p-10 lg:p-14 mb-16"
                data-aos="fade-up"
            >

                <span class="uppercase tracking-[0.3em] text-green-600 font-semibold">
                    Public Information
                </span>

                <h2 class="text-4xl font-bold mt-5 mb-8">
                    Dokumen Kinerja
                </h2>

                <p class="text-gray-600 text-lg leading-relaxed">

                    Halaman ini memuat daftar Dokumen Informasi Publik
                    dan Surat Keputusan (SK) sebagai produk hukum yang
                    diterbitkan oleh Distanhorti Jabar. Dokumen-dokumen ini
                    disediakan sebagai bentuk transparansi dan komitmen
                    dalam mendukung keterbukaan informasi publik sesuai
                    dengan amanat UU Nomor 14 Tahun 2008.

                </p>

            </div>

           <!-- FILTER -->
<div
    class="bg-white rounded-[35px] shadow-xl p-8 mb-16"
    data-aos="fade-up"
>

    <div class="flex flex-col gap-8">

        <!-- CATEGORY -->
        <div class="flex flex-wrap gap-4">

            <!-- DOKUMEN -->
            <button
                class="px-8 py-3 rounded-2xl bg-green-600 text-white font-semibold shadow-lg"
            >

                📄 Dokumen

            </button>

            <!-- PERATURAN -->
            <button
                class="px-8 py-3 rounded-2xl bg-gray-100 hover:bg-green-100 transition font-semibold"
            >

                ⚖️ Peraturan

            </button>

        </div>

        <!-- BOTTOM -->
        <div class="flex flex-col xl:flex-row gap-8 items-center justify-between">

            <!-- YEAR -->
            <div class="flex flex-wrap gap-4">

                <button class="px-6 py-3 rounded-2xl bg-green-600 text-white font-semibold shadow-lg">
                    2026
                </button>

                <button class="px-6 py-3 rounded-2xl bg-gray-100 hover:bg-green-100 transition">
                    2025
                </button>

                <button class="px-6 py-3 rounded-2xl bg-gray-100 hover:bg-green-100 transition">
                    2024
                </button>

                <button class="px-6 py-3 rounded-2xl bg-gray-100 hover:bg-green-100 transition">
                    2023
                </button>

                <button class="px-6 py-3 rounded-2xl bg-gray-100 hover:bg-green-100 transition">
                    2022
                </button>

            </div>

            <!-- PERATURAN -->
<div
    class="group bg-white rounded-[35px] shadow-xl p-8 hover:shadow-2xl transition duration-500"
    data-aos="fade-up"
>

    <div class="flex flex-col xl:flex-row xl:items-center gap-8 justify-between">

        <!-- LEFT -->
        <div class="flex gap-6">

            <!-- ICON -->
            <div class="w-24 h-24 rounded-3xl bg-yellow-100 flex items-center justify-center text-5xl shrink-0">
                ⚖️
            </div>

            <!-- CONTENT -->
            <div>

                <span class="uppercase tracking-widest text-yellow-600 font-semibold text-sm">
                    Peraturan
                </span>

                <h3 class="text-3xl font-bold mt-3 mb-4">

                    Peraturan Gubernur Tentang Pertanian Organik

                </h3>

                <p class="text-gray-600 leading-relaxed mb-6">

                    Peraturan mengenai penyelenggaraan
                    pertanian organik di Provinsi Jawa Barat.

                </p>

                <div class="flex flex-wrap gap-6 text-gray-500">

                    <div class="flex items-center gap-2">
                        ⬇️
                        20 Unduhan
                    </div>

                    <div class="flex items-center gap-2">
                        📅
                        Senin, 10 Februari 2026
                    </div>

                </div>

            </div>

        </div>

        <!-- BUTTON -->
        <div class="flex flex-wrap gap-4 shrink-0">

            <button
                @click="openModal = true"
                class="px-6 py-3 rounded-2xl bg-gray-100 hover:bg-gray-200 transition font-semibold"
            >

                Detail

            </button>

            <a
                href="#"
                class="px-6 py-3 rounded-2xl bg-yellow-500 hover:bg-yellow-600 transition text-white font-semibold shadow-lg"
            >

                Unduh

            </a>

        </div>

    </div>

</div>

            <!-- SEARCH -->
            <div class="relative w-full xl:w-[350px]">

                <input
                    type="text"
                    placeholder="Cari disini..."
                    class="w-full h-14 rounded-2xl border border-gray-200 bg-gray-50 px-6 pr-14 focus:outline-none focus:ring-4 focus:ring-green-200"
                >

                <div class="absolute top-1/2 right-5 -translate-y-1/2 text-xl">
                    🔍
                </div>

            </div>

        </div>

    </div>

</div>
                    <!-- SEARCH -->
                    <div class="relative w-full xl:w-[350px]">

                        <input
                            type="text"
                            placeholder="Cari disini..."
                            class="w-full h-14 rounded-2xl border border-gray-200 bg-gray-50 px-6 pr-14 focus:outline-none focus:ring-4 focus:ring-green-200"
                        >

                        <div class="absolute top-1/2 right-5 -translate-y-1/2 text-xl">
                            🔍
                        </div>

                    </div>

                </div>

            </div>

            <!-- DOCUMENTS -->
            <div class="space-y-8">

                <!-- CARD -->
                <div
                    class="group bg-white rounded-[35px] shadow-xl p-8 hover:shadow-2xl transition duration-500"
                    data-aos="fade-up"
                >

                    <div class="flex flex-col xl:flex-row gap-8 items-start justify-between">

                        <!-- LEFT -->
                        <div class="flex gap-6">

                            <!-- ICON -->
                            <div class="w-24 h-24 rounded-3xl bg-red-100 flex items-center justify-center text-5xl shrink-0">
                                📄
                            </div>

                            <!-- CONTENT -->
                            <div>

                                <span class="uppercase tracking-widest text-green-600 font-semibold text-sm">
                                    Dokumen Distanhorti Jabar
                                </span>

                                <h3 class="text-3xl font-bold mt-3 mb-4">

                                    Renstra DTPH 2025-2029 TTE

                                </h3>

                                <p class="text-gray-600 leading-relaxed mb-6">

                                    Rencana Strategi Dinas Tanaman Pangan dan
                                    Hortikultura Provinsi Jawa Barat
                                    Tahun 2025-2029.

                                </p>

                                <div class="flex flex-wrap gap-6 text-gray-500">

                                    <div class="flex items-center gap-2">
                                        ⬇️
                                        13 Unduhan
                                    </div>

                                    <div class="flex items-center gap-2">
                                        📅
                                        Senin, 30 Maret 2026
                                    </div>

                                </div>

                            </div>

                        </div>

<div class="flex flex-wrap gap-4 shrink-0">

    <button
        @click="openModal = true"
        class="px-6 py-3 rounded-2xl bg-gray-100 hover:bg-gray-200 transition font-semibold"
    >
        Detail
    </button>

    <a
        href="https://d2s1u1uyrl4yfi.cloudfront.net/distan/document/dc5c179d59ba91096e921fc9262568f1.pdf"
        target="_blank"
        class="px-6 py-3 rounded-2xl bg-green-600 hover:bg-green-700 transition text-white font-semibold shadow-lg"
    >
        Unduh
    </a>

</div>

                    </div>

                </div>

                <!-- CARD -->
                <div
                    class="group bg-white rounded-[35px] shadow-xl p-8 hover:shadow-2xl transition duration-500"
                    data-aos="fade-up"
                >

                    <div class="flex flex-col xl:flex-row gap-8 items-start justify-between">

                        <div class="flex gap-6">

                            <div class="w-24 h-24 rounded-3xl bg-red-100 flex items-center justify-center text-5xl shrink-0">
                                📄
                            </div>

                            <div>

                                <span class="uppercase tracking-widest text-green-600 font-semibold text-sm">
                                    Dokumen Distanhorti Jabar
                                </span>

                                <h3 class="text-3xl font-bold mt-3 mb-4">

                                    Laporan Kinerja Instansi Pemerintah DTPH TA 2025

                                </h3>

                                <p class="text-gray-600 leading-relaxed mb-6">

                                    Laporan Kinerja Instansi Pemerintah
                                    Dinas Tanaman Pangan dan Hortikultura
                                    Provinsi Jawa Barat Tahun Anggaran 2025.

                                </p>

                                <div class="flex flex-wrap gap-6 text-gray-500">

                                    <div class="flex items-center gap-2">
                                        ⬇️
                                        12 Unduhan
                                    </div>

                                    <div class="flex items-center gap-2">
                                        📅
                                        Selasa, 10 Maret 2026
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="flex gap-4">

                            <button class="px-6 py-3 rounded-2xl bg-gray-100 hover:bg-gray-200 transition font-semibold">
                                Detail
                            </button>

                            <button class="px-6 py-3 rounded-2xl bg-green-600 hover:bg-green-700 transition text-white font-semibold shadow-lg">
                                Unduh
                            </button>

                        </div>

                    </div>

                </div>

                <!-- CARD -->
                <div
                    class="group bg-white rounded-[35px] shadow-xl p-8 hover:shadow-2xl transition duration-500"
                    data-aos="fade-up"
                >

                    <div class="flex flex-col xl:flex-row gap-8 items-start justify-between">

                        <div class="flex gap-6">

                            <div class="w-24 h-24 rounded-3xl bg-red-100 flex items-center justify-center text-5xl shrink-0">
                                📄
                            </div>

                            <div>

                                <span class="uppercase tracking-widest text-green-600 font-semibold text-sm">
                                    Dokumen Distanhorti Jabar
                                </span>

                                <h3 class="text-3xl font-bold mt-3 mb-4">

                                    Ranhir Renja 2026

                                </h3>

                                <p class="text-gray-600 leading-relaxed mb-6">

                                    Rancangan Akhir Rencana Kerja Dinas
                                    Tanaman Pangan dan Hortikultura
                                    Provinsi Jawa Barat Tahun 2026.

                                </p>

                                <div class="flex flex-wrap gap-6 text-gray-500">

                                    <div class="flex items-center gap-2">
                                        ⬇️
                                        7 Unduhan
                                    </div>

                                    <div class="flex items-center gap-2">
                                        📅
                                        Selasa, 10 Maret 2026
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="flex gap-4">

                            <button class="px-6 py-3 rounded-2xl bg-gray-100 hover:bg-gray-200 transition font-semibold">
                                Detail
                            </button>

                            <button class="px-6 py-3 rounded-2xl bg-green-600 hover:bg-green-700 transition text-white font-semibold shadow-lg">
                                Unduh
                            </button>

                        </div>

                    </div>

                </div>

                <!-- CARD -->
                <div
                    class="group bg-white rounded-[35px] shadow-xl p-8 hover:shadow-2xl transition duration-500"
                    data-aos="fade-up"
                >

                    <div class="flex flex-col xl:flex-row gap-8 items-start justify-between">

                        <div class="flex gap-6">

                            <div class="w-24 h-24 rounded-3xl bg-red-100 flex items-center justify-center text-5xl shrink-0">
                                📄
                            </div>

                            <div>

                                <span class="uppercase tracking-widest text-green-600 font-semibold text-sm">
                                    Dokumen Distanhorti Jabar
                                </span>

                                <h3 class="text-3xl font-bold mt-3 mb-4">

                                    Renstra DTPH 2025-2029

                                </h3>

                                <p class="text-gray-600 leading-relaxed mb-6">

                                    Rencana Strategi Dinas Tanaman Pangan
                                    dan Hortikultura Provinsi Jawa Barat
                                    Tahun 2025-2029.

                                </p>

                                <div class="flex flex-wrap gap-6 text-gray-500">

                                    <div class="flex items-center gap-2">
                                        ⬇️
                                        4 Unduhan
                                    </div>

                                    <div class="flex items-center gap-2">
                                        📅
                                        Selasa, 10 Maret 2026
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="flex gap-4">

                            <button class="px-6 py-3 rounded-2xl bg-gray-100 hover:bg-gray-200 transition font-semibold">
                                Detail
                            </button>

                            <button class="px-6 py-3 rounded-2xl bg-green-600 hover:bg-green-700 transition text-white font-semibold shadow-lg">
                                Unduh
                            </button>

                        </div>

                    </div>

                </div>

            </div>

            <!-- PAGINATION -->
            <div
                class="mt-20 flex flex-col lg:flex-row items-center justify-between gap-8"
                data-aos="fade-up"
            >

                <div class="text-gray-600 text-lg">

                    Menampilkan
                    <span class="font-bold text-gray-900">
                        4
                    </span>
                    item dari total
                    <span class="font-bold text-gray-900">
                        4
                    </span>

                </div>

                <div class="flex items-center gap-4">

                    <span class="text-gray-600">
                        Halaman
                    </span>

                    <div class="w-14 h-14 rounded-2xl bg-green-600 text-white flex items-center justify-center font-bold shadow-lg">
                        1
                    </div>

                    <span class="text-gray-600">
                        dari 1
                    </span>

                </div>

            </div>

        </div>

    </section>

    <!-- MODAL DETAIL -->
<div
    x-show="openModal"
    x-transition.opacity
    class="fixed inset-0 z-[999] flex items-center justify-center p-6"
    style="display: none;"
>

    <!-- BACKDROP -->
    <div
        @click="openModal = false"
        class="absolute inset-0 bg-black/60 backdrop-blur-md"
    ></div>

    <!-- MODAL -->
    <div
        x-show="openModal"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90 translate-y-10"
        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="relative w-full max-w-4xl bg-white rounded-[40px] shadow-2xl overflow-hidden"
    >

        <!-- HEADER -->
        <div class="relative bg-gradient-to-br from-green-700 to-green-900 p-10">

            <!-- CLOSE -->
            <button
                @click="openModal = false"
                class="absolute top-6 right-6 w-12 h-12 rounded-2xl bg-white/20 hover:bg-white/30 text-white text-xl transition"
            >

                ✕

            </button>

            <div class="flex items-center gap-6">

                <!-- ICON -->
                <div class="w-24 h-24 rounded-[30px] bg-white/20 backdrop-blur-xl flex items-center justify-center text-5xl">
                    📄
                </div>

                <!-- TITLE -->
                <div>

                    <span class="uppercase tracking-widest text-green-200 font-semibold text-sm">
                        Dokumen Distanhorti Jabar
                    </span>

                    <h2 class="text-4xl font-bold text-white mt-3">

                        Renstra DTPH 2025-2029 TTE

                    </h2>

                </div>

            </div>

        </div>

        <!-- CONTENT -->
        <div class="p-10 lg:p-14">

            <div class="grid md:grid-cols-2 gap-10">

                <!-- ITEM -->
                <div>

                    <h3 class="text-sm uppercase tracking-widest text-green-600 font-semibold mb-4">
                        Deskripsi Dokumen
                    </h3>

                    <p class="text-gray-700 text-lg leading-relaxed">

                        Rencana Strategi Dinas Tanaman Pangan dan
                        Hortikultura Provinsi Jawa Barat Tahun 2025-2029.

                    </p>

                </div>

                <!-- ITEM -->
                <div>

                    <h3 class="text-sm uppercase tracking-widest text-green-600 font-semibold mb-4">
                        Tanggal Publikasi
                    </h3>

                    <p class="text-gray-700 text-lg leading-relaxed">

                        Senin, 30 Maret 2026

                    </p>

                </div>

                <!-- ITEM -->
                <div>

                    <h3 class="text-sm uppercase tracking-widest text-green-600 font-semibold mb-4">
                        Tahun Dokumen
                    </h3>

                    <p class="text-gray-700 text-lg leading-relaxed">

                        2026

                    </p>

                </div>

                <!-- ITEM -->
                <div>

                    <h3 class="text-sm uppercase tracking-widest text-green-600 font-semibold mb-4">
                        Format Dokumen
                    </h3>

                    <p class="text-gray-700 text-lg leading-relaxed">

                        Portable Document Format (PDF)

                    </p>

                </div>

                <!-- ITEM -->
                <div>

                    <h3 class="text-sm uppercase tracking-widest text-green-600 font-semibold mb-4">
                        Tag
                    </h3>

                    <p class="text-gray-700 text-lg leading-relaxed">

                        -

                    </p>

                </div>

            </div>

            <!-- BUTTON -->
            <div class="mt-14 flex flex-wrap gap-5">

                <a
                    href="https://d2s1u1uyrl4yfi.cloudfront.net/distan/document/dc5c179d59ba91096e921fc9262568f1.pdf"
                    target="_blank"
                    class="px-8 py-4 rounded-2xl bg-green-600 hover:bg-green-700 transition text-white font-semibold shadow-xl"
                >

                    ⬇️ Unduh Dokumen

                </a>

                <button
                    @click="openModal = false"
                    class="px-8 py-4 rounded-2xl bg-gray-100 hover:bg-gray-200 transition font-semibold"
                >

                    Tutup

                </button>

            </div>

        </div>

    </div>

</div>

    @include('partials.footer')

</body>
</html>
