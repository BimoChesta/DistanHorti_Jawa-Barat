<!DOCTYPE html>
<html lang="en">
<head>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Tugas Pokok dan Fungsi
    </title>

</head>

<body class="bg-gray-50 text-gray-800">

    @include('partials.navbar')

    <!-- HERO -->
    <section class="relative pt-40 pb-24 overflow-hidden bg-gradient-to-br from-green-700 via-green-800 to-green-950">

        <!-- BACKGROUND -->
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
                    Tugas Pokok dan Fungsi
                </span>

            </div>

            <!-- TITLE -->
            <div data-aos="fade-up">

                <span class="uppercase tracking-[0.3em] text-green-300 font-semibold">
                    Main Duties & Functions
                </span>

                <h1 class="text-5xl lg:text-7xl font-bold text-white mt-6 leading-tight max-w-5xl">

                    Tugas Pokok dan Fungsi
                    Distanhorti Jabar

                </h1>

                <p class="text-green-100 text-xl leading-relaxed mt-8 max-w-4xl">

                    Dinas Tanaman Pangan dan Hortikultura Provinsi Jawa Barat
                    memiliki tugas dan fungsi dalam mendukung pembangunan
                    pertanian yang modern, berkelanjutan, dan berdaya saing.

                </p>

            </div>

        </div>

    </section>

    <!-- CONTENT -->
    <section class="py-24 overflow-hidden">

        <div class="max-w-7xl mx-auto px-6">

            <!-- HEADER -->
            <div
                class="text-center mb-20"
                data-aos="fade-up"
            >

                <span class="uppercase tracking-[0.3em] text-green-600 font-semibold">
                    Duties & Functions
                </span>

                <h2 class="text-5xl font-bold mt-5">
                    Tugas Pokok dan Fungsi
                </h2>

                <p class="text-gray-600 text-lg leading-relaxed max-w-3xl mx-auto mt-8">

                    Tugas pokok dan fungsi Dinas Tanaman Pangan dan Hortikultura
                    Provinsi Jawa Barat berdasarkan kebijakan pemerintah daerah.

                </p>

            </div>

            <!-- MAIN CARD -->
            <div
                class="bg-white rounded-[45px] shadow-2xl p-10 lg:p-16 mb-20"
                data-aos="zoom-in"
            >

                <span class="uppercase tracking-[0.3em] text-green-600 font-semibold">
                    Tugas Pokok
                </span>

                <h3 class="text-4xl font-bold mt-5 mb-10">
                    Penyelenggaraan Bidang Tanaman Pangan dan Hortikultura
                </h3>

                <p class="text-gray-600 text-lg leading-relaxed">

                    Dinas Tanaman Pangan dan Hortikultura Provinsi Jawa Barat
                    mempunyai tugas pokok menyelenggarakan perumusan kebijakan
                    teknis bidang tanaman pangan dan hortikultura,
                    menyelenggarakan koordinasi, pembinaan, pengendalian,
                    fasilitasi, dan pelaksanaan urusan pemerintahan provinsi
                    di bidang tanaman pangan dan hortikultura.

                </p>

            </div>

            <!-- FUNCTIONS -->
            <div
                class="grid md:grid-cols-2 xl:grid-cols-3 gap-8"
                data-aos="fade-up"
            >

                <!-- CARD -->
                <div class="group bg-white rounded-[35px] p-10 shadow-xl hover:shadow-2xl hover:-translate-y-3 transition duration-500">

                    <div class="w-20 h-20 rounded-3xl bg-green-100 flex items-center justify-center text-4xl mb-8 group-hover:scale-110 transition">
                        📑
                    </div>

                    <h3 class="text-2xl font-bold mb-5">
                        Perumusan Kebijakan
                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Menyusun dan merumuskan kebijakan teknis
                        di bidang tanaman pangan dan hortikultura.

                    </p>

                </div>

                <!-- CARD -->
                <div class="group bg-white rounded-[35px] p-10 shadow-xl hover:shadow-2xl hover:-translate-y-3 transition duration-500">

                    <div class="w-20 h-20 rounded-3xl bg-green-100 flex items-center justify-center text-4xl mb-8 group-hover:scale-110 transition">
                        🤝
                    </div>

                    <h3 class="text-2xl font-bold mb-5">
                        Koordinasi
                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Melaksanakan koordinasi dan sinkronisasi
                        program pertanian dengan pemerintah daerah.

                    </p>

                </div>

                <!-- CARD -->
                <div class="group bg-white rounded-[35px] p-10 shadow-xl hover:shadow-2xl hover:-translate-y-3 transition duration-500">

                    <div class="w-20 h-20 rounded-3xl bg-green-100 flex items-center justify-center text-4xl mb-8 group-hover:scale-110 transition">
                        🌾
                    </div>

                    <h3 class="text-2xl font-bold mb-5">
                        Produksi Pertanian
                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Mendukung peningkatan produksi tanaman pangan
                        dan hortikultura di Jawa Barat.

                    </p>

                </div>

                <!-- CARD -->
                <div class="group bg-white rounded-[35px] p-10 shadow-xl hover:shadow-2xl hover:-translate-y-3 transition duration-500">

                    <div class="w-20 h-20 rounded-3xl bg-green-100 flex items-center justify-center text-4xl mb-8 group-hover:scale-110 transition">
                        🛡️
                    </div>

                    <h3 class="text-2xl font-bold mb-5">
                        Pengendalian
                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Mengendalikan pelaksanaan program dan
                        pengawasan kegiatan pertanian.

                    </p>

                </div>

                <!-- CARD -->
                <div class="group bg-white rounded-[35px] p-10 shadow-xl hover:shadow-2xl hover:-translate-y-3 transition duration-500">

                    <div class="w-20 h-20 rounded-3xl bg-green-100 flex items-center justify-center text-4xl mb-8 group-hover:scale-110 transition">
                        🎓
                    </div>

                    <h3 class="text-2xl font-bold mb-5">
                        Penyuluhan
                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Memberikan pembinaan dan penyuluhan kepada
                        masyarakat dan pelaku pertanian.

                    </p>

                </div>

                <!-- CARD -->
                <div class="group bg-white rounded-[35px] p-10 shadow-xl hover:shadow-2xl hover:-translate-y-3 transition duration-500">

                    <div class="w-20 h-20 rounded-3xl bg-green-100 flex items-center justify-center text-4xl mb-8 group-hover:scale-110 transition">
                        🚜
                    </div>

                    <h3 class="text-2xl font-bold mb-5">
                        Fasilitasi
                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Memfasilitasi pengembangan sarana, prasarana,
                        dan teknologi pertanian modern.

                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- SOCIAL MEDIA -->
    <section class="pb-28">

        <div class="max-w-7xl mx-auto px-6">

            <!-- HEADER -->
            <div
                class="text-center mb-16"
                data-aos="fade-up"
            >

                <span class="uppercase tracking-[0.3em] text-green-600 font-semibold">
                    Social Media
                </span>

                <h2 class="text-5xl font-bold mt-5">
                    Distanhorti Jabar
                </h2>

            </div>

            <!-- GRID -->
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">

                <!-- INSTAGRAM -->
                <a href="https://instagram.com"
                   target="_blank"
                   class="group bg-white rounded-[35px] p-10 shadow-xl hover:shadow-2xl hover:-translate-y-3 transition duration-500"
                   data-aos="fade-up"
                >

                    <div class="text-6xl mb-8">
                        📷
                    </div>

                    <h3 class="text-3xl font-bold mb-5">
                        Instagram Distanhorti Jabar
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-8">

                        Explore informasi ter-update dan keseruan
                        konten menarik di sosial media yang dikelola
                        Humas Distanhorti Jabar.

                    </p>

                    <span class="text-green-600 font-semibold">
                        Selengkapnya →
                    </span>

                </a>

                <!-- TWITTER -->
                <a href="https://twitter.com"
                   target="_blank"
                   class="group bg-white rounded-[35px] p-10 shadow-xl hover:shadow-2xl hover:-translate-y-3 transition duration-500"
                   data-aos="fade-up"
                >

                    <div class="text-6xl mb-8">
                        🐦
                    </div>

                    <h3 class="text-3xl font-bold mb-5">
                        Twitter Distanhorti Jabar
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-8">

                        Temukan konten dan pembahasan menarik tentang
                        tanaman pangan dan hortikultura di Jawa Barat.

                    </p>

                    <span class="text-green-600 font-semibold">
                        Selengkapnya →
                    </span>

                </a>

                <!-- YOUTUBE -->
                <a href="https://youtube.com"
                   target="_blank"
                   class="group bg-white rounded-[35px] p-10 shadow-xl hover:shadow-2xl hover:-translate-y-3 transition duration-500"
                   data-aos="fade-up"
                >

                    <div class="text-6xl mb-8">
                        ▶️
                    </div>

                    <h3 class="text-3xl font-bold mb-5">
                        Youtube Distanhorti Jabar
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-8">

                        Official Youtube Channel Dinas Tanaman Pangan
                        dan Hortikultura Provinsi Jawa Barat.

                    </p>

                    <span class="text-green-600 font-semibold">
                        Selengkapnya →
                    </span>

                </a>

            </div>

        </div>

    </section>

    @include('partials.footer')

</body>
</html> 
