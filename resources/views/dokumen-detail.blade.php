<!DOCTYPE html>
<html lang="en">
<head>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Detail Dokumen
    </title>

</head>

<body class="bg-gray-50 text-gray-800">

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
            <div class="flex items-center gap-3 text-green-200 mb-8">

                <a href="/" class="hover:text-white transition">
                    Beranda
                </a>

                <span>/</span>

                <a href="/dokumen-kinerja" class="hover:text-white transition">
                    Dokumen Kinerja
                </a>

                <span>/</span>

                <span class="text-white">
                    Detail Dokumen
                </span>

            </div>

            <!-- TITLE -->
            <div>

                <span class="uppercase tracking-[0.3em] text-green-300 font-semibold">
                    Document Detail
                </span>

                <h1 class="text-5xl lg:text-7xl font-bold text-white mt-6 leading-tight max-w-5xl">

                    Renstra DTPH
                    2025-2029 TTE

                </h1>

                <p class="text-green-100 text-xl leading-relaxed mt-8 max-w-4xl">

                    Rencana Strategi Dinas Tanaman Pangan dan Hortikultura
                    Provinsi Jawa Barat Tahun 2025-2029.

                </p>

            </div>

        </div>

    </section>

    <!-- CONTENT -->
    <section class="py-24 overflow-hidden">

        <div class="max-w-5xl mx-auto px-6">

            <!-- CARD -->
            <div class="bg-white rounded-[40px] shadow-2xl overflow-hidden">

                <!-- HEADER -->
                <div class="p-10 border-b border-gray-100">

                    <div class="flex items-center gap-6">

                        <!-- ICON -->
                        <div class="w-24 h-24 rounded-[30px] bg-red-100 flex items-center justify-center text-5xl">
                            📄
                        </div>

                        <!-- TITLE -->
                        <div>

                            <span class="uppercase tracking-widest text-green-600 font-semibold text-sm">
                                Dokumen Distanhorti Jabar
                            </span>

                            <h2 class="text-4xl font-bold mt-3">

                                Renstra DTPH 2025-2029 TTE

                            </h2>

                        </div>

                    </div>

                </div>

                <!-- BODY -->
                <div class="p-10 lg:p-14">

                    <!-- GRID -->
                    <div class="grid md:grid-cols-2 gap-10">

                        <!-- ITEM -->
                        <div>

                            <h3 class="text-sm uppercase tracking-widest text-green-600 font-semibold mb-4">
                                Deskripsi Dokumen
                            </h3>

                            <p class="text-gray-700 text-lg leading-relaxed">

                                Rencana Strategi Dinas Tanaman Pangan
                                dan Hortikultura Provinsi Jawa Barat
                                Tahun 2025-2029.

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
                    <div class="mt-16 flex flex-wrap gap-5">

                        <a
                            href="https://d2s1u1uyrl4yfi.cloudfront.net/distan/document/dc5c179d59ba91096e921fc9262568f1.pdf"
                            target="_blank"
                            class="px-8 py-4 rounded-2xl bg-green-600 hover:bg-green-700 transition text-white font-semibold shadow-xl"
                        >

                            ⬇️ Unduh Dokumen

                        </a>

                        <a
                            href="/dokumen-kinerja"
                            class="px-8 py-4 rounded-2xl bg-gray-100 hover:bg-gray-200 transition font-semibold"
                        >

                            ← Kembali

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    @include('partials.footer')

</body>
</html>
