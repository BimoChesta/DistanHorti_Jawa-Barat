<!DOCTYPE html>
<html lang="en">
<head>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Permohonan Informasi
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
            <div
                class="flex items-center gap-3 text-green-200 mb-8"
                data-aos="fade-up"
            >

                <a href="/" class="hover:text-white transition">
                    Beranda
                </a>

                <span>/</span>

                <span class="text-white">
                    Permohonan Informasi
                </span>

            </div>

            <!-- TITLE -->
            <div data-aos="fade-up">

                <span class="uppercase tracking-[0.3em] text-green-300 font-semibold">
                    Public Information Service
                </span>

                <h1 class="text-5xl lg:text-7xl font-bold text-white mt-6 leading-tight max-w-5xl">

                    Permohonan
                    Informasi

                </h1>

                <p class="text-green-100 text-xl leading-relaxed mt-8 max-w-4xl">

                    Layanan Permohonan Informasi Dinas Tanaman Pangan dan
                    Hortikultura Provinsi Jawa Barat.

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
                    PPID Service
                </span>

                <h2 class="text-4xl font-bold mt-5 mb-8">
                    Alur Permohonan Informasi Publik
                </h2>

                <p class="text-gray-600 text-lg leading-relaxed">

                    Dinas Tanaman Pangan dan Hortikultura Provinsi Jawa Barat
                    menyediakan layanan permohonan informasi publik secara
                    transparan dan profesional sesuai ketentuan yang berlaku.

                </p>

            </div>

            <!-- STEPS -->
            <div class="space-y-10">

                <!-- STEP 1 -->
                <div
                    class="bg-white rounded-[35px] shadow-xl p-10"
                    data-aos="fade-up"
                >

                    <div class="flex flex-col lg:flex-row gap-10">

                        <!-- NUMBER -->
                        <div class="w-24 h-24 rounded-[30px] bg-green-100 flex items-center justify-center text-4xl font-bold text-green-700 shrink-0">
                            1
                        </div>

                        <!-- CONTENT -->
                        <div>

                            <h3 class="text-3xl font-bold mb-6">
                                Tahap 1: Persiapan Dokumen
                            </h3>

                            <p class="text-gray-600 text-lg leading-relaxed mb-8">

                                Pemohon Informasi Publik mempersiapkan
                                salinan/fotokopi identitas sesuai kategori.

                            </p>

                            <div class="grid md:grid-cols-3 gap-6">

                                <!-- CARD -->
                                <div class="bg-gray-50 rounded-3xl p-6">

                                    <h4 class="font-bold text-xl mb-4">
                                        Individu
                                    </h4>

                                    <p class="text-gray-600 leading-relaxed">
                                        KTP / SIM / Paspor
                                    </p>

                                </div>

                                <!-- CARD -->
                                <div class="bg-gray-50 rounded-3xl p-6">

                                    <h4 class="font-bold text-xl mb-4">
                                        Kelompok Orang
                                    </h4>

                                    <p class="text-gray-600 leading-relaxed">
                                        Identitas seluruh anggota kelompok
                                    </p>

                                </div>

                                <!-- CARD -->
                                <div class="bg-gray-50 rounded-3xl p-6">

                                    <h4 class="font-bold text-xl mb-4">
                                        Organisasi
                                    </h4>

                                    <p class="text-gray-600 leading-relaxed">
                                        Badan hukum, AD/ART dan identitas pengurus
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- STEP 2 -->
                <div
                    class="bg-white rounded-[35px] shadow-xl p-10"
                    data-aos="fade-up"
                >

                    <div class="flex flex-col lg:flex-row gap-10">

                        <div class="w-24 h-24 rounded-[30px] bg-green-100 flex items-center justify-center text-4xl font-bold text-green-700 shrink-0">
                            2
                        </div>

                        <div>

                            <h3 class="text-3xl font-bold mb-6">
                                Tahap 2: Pengajuan Permohonan
                            </h3>

                            <ul class="space-y-4 text-gray-600 text-lg">

                                <li>
                                    • Mengisi formulir permohonan informasi
                                </li>

                                <li>
                                    • Menyerahkan dokumen persyaratan
                                </li>

                                <li>
                                    • Datang ke desk layanan PPID
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

                <!-- STEP 3 -->
                <div
                    class="bg-white rounded-[35px] shadow-xl p-10"
                    data-aos="fade-up"
                >

                    <div class="flex flex-col lg:flex-row gap-10">

                        <div class="w-24 h-24 rounded-[30px] bg-green-100 flex items-center justify-center text-4xl font-bold text-green-700 shrink-0">
                            3
                        </div>

                        <div>

                            <h3 class="text-3xl font-bold mb-6">
                                Tahap 3: Verifikasi Berkas
                            </h3>

                            <p class="text-gray-600 text-lg leading-relaxed">

                                Petugas PPID akan memeriksa dan memverifikasi
                                kelengkapan administrasi dari berkas permohonan.

                            </p>

                        </div>

                    </div>

                </div>

                <!-- STEP 4 -->
                <div
                    class="bg-white rounded-[35px] shadow-xl p-10"
                    data-aos="fade-up"
                >

                    <div class="flex flex-col lg:flex-row gap-10">

                        <div class="w-24 h-24 rounded-[30px] bg-green-100 flex items-center justify-center text-4xl font-bold text-green-700 shrink-0">
                            4
                        </div>

                        <div>

                            <h3 class="text-3xl font-bold mb-6">
                                Tahap 4: Proses Permohonan
                            </h3>

                            <p class="text-gray-600 text-lg leading-relaxed">

                                Permohonan diproses maksimal 10 hari kerja.
                                Jika diperlukan, dapat diperpanjang 7 hari kerja
                                tambahan dengan pemberitahuan resmi.

                            </p>

                        </div>

                    </div>

                </div>

                <!-- STEP 5 -->
                <div
                    class="bg-white rounded-[35px] shadow-xl p-10"
                    data-aos="fade-up"
                >

                    <div class="flex flex-col lg:flex-row gap-10">

                        <div class="w-24 h-24 rounded-[30px] bg-green-100 flex items-center justify-center text-4xl font-bold text-green-700 shrink-0">
                            5
                        </div>

                        <div>

                            <h3 class="text-3xl font-bold mb-6">
                                Tahap 5: Keputusan Permohonan
                            </h3>

                            <ul class="space-y-4 text-gray-600 text-lg">

                                <li>
                                    • Informasi mengenai ketersediaan data
                                </li>

                                <li>
                                    • Surat keputusan PPID
                                </li>

                                <li>
                                    • Tindak lanjut permohonan informasi
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!-- FORM -->
            <div class="mt-24">

                <div
                    class="flex items-center justify-between mb-12"
                    data-aos="fade-up"
                >

                    <div>

                        <span class="uppercase tracking-[0.3em] text-green-600 font-semibold">
                            Information Form
                        </span>

                        <h2 class="text-5xl font-bold mt-4">
                            Form Permohonan
                        </h2>

                    </div>

                </div>

                <!-- GRID -->
                <div class="grid lg:grid-cols-2 gap-10">

                    <!-- CARD -->
                    <div
                        class="group bg-white rounded-[35px] shadow-xl overflow-hidden hover:-translate-y-3 hover:shadow-2xl transition duration-500"
                        data-aos="fade-up"
                    >

                        <!-- IMAGE -->
                        <div class="h-72 bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center text-8xl">
                            📑
                        </div>

                        <!-- CONTENT -->
                        <div class="p-10">

                            <span class="uppercase tracking-widest text-green-600 font-semibold text-sm">
                                Form Permohonan
                            </span>

                            <h3 class="text-3xl font-bold mt-4 mb-5">

                                Form LMS/ORMAS/Media

                            </h3>

                            <p class="text-gray-600 leading-relaxed mb-8">

                                Formulir permohonan informasi publik untuk
                                lembaga masyarakat, organisasi dan media.

                            </p>

                            <a
                                href="https://instagram.com"
                                target="_blank"
                                class="inline-flex items-center gap-3 px-8 py-4 rounded-2xl bg-green-600 hover:bg-green-700 transition text-white font-semibold shadow-xl"
                            >

                                Selengkapnya →

                            </a>

                        </div>

                    </div>

                    <!-- CARD -->
                    <div
                        class="group bg-white rounded-[35px] shadow-xl overflow-hidden hover:-translate-y-3 hover:shadow-2xl transition duration-500"
                        data-aos="fade-up"
                    >

                        <!-- IMAGE -->
                        <div class="h-72 bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center text-8xl">
                            🎓
                        </div>

                        <!-- CONTENT -->
                        <div class="p-10">

                            <span class="uppercase tracking-widest text-green-600 font-semibold text-sm">
                                Form Permohonan
                            </span>

                            <h3 class="text-3xl font-bold mt-4 mb-5">

                                Form Pelajar/Mahasiswa

                            </h3>

                            <p class="text-gray-600 leading-relaxed mb-8">

                                Formulir permohonan informasi publik khusus
                                untuk pelajar dan mahasiswa.

                            </p>

                            <a
                                href="https://instagram.com"
                                target="_blank"
                                class="inline-flex items-center gap-3 px-8 py-4 rounded-2xl bg-green-600 hover:bg-green-700 transition text-white font-semibold shadow-xl"
                            >

                                Selengkapnya →

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    @include('partials.footer')

</body>
</html>
