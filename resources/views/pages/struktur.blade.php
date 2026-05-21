<!DOCTYPE html>
<html lang="en">
<head>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Struktur Organisasi
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
                    Struktur Organisasi
                </span>

            </div>

            <!-- TITLE -->
            <div data-aos="fade-up">

                <span class="uppercase tracking-[0.3em] text-green-300 font-semibold">
                    Organizational Structure
                </span>

                <h1 class="text-5xl lg:text-7xl font-bold text-white mt-6 leading-tight max-w-5xl">

                    Struktur Organisasi
                    Distanhorti Jabar

                </h1>

                <p class="text-green-100 text-xl leading-relaxed mt-8 max-w-4xl">

                    Struktur organisasi Dinas Tanaman Pangan dan Hortikultura
                    Provinsi Jawa Barat dalam mendukung tata kelola pemerintahan
                    yang profesional dan terintegrasi.

                </p>

            </div>

        </div>

    </section>

    <!-- ORGANIZATION IMAGE -->
    <section class="py-24 overflow-hidden">

        <div class="max-w-7xl mx-auto px-6">

            <!-- HEADER -->
            <div
                class="text-center mb-20"
                data-aos="fade-up"
            >

                <span class="uppercase tracking-[0.3em] text-green-600 font-semibold">
                    Organizational Chart
                </span>

                <h2 class="text-5xl font-bold mt-5">
                    Struktur Organisasi
                </h2>

                <p class="text-gray-600 text-lg leading-relaxed max-w-3xl mx-auto mt-8">

                    Susunan struktur organisasi Dinas Tanaman Pangan dan
                    Hortikultura Provinsi Jawa Barat.

                </p>

            </div>

            <!-- IMAGE CARD -->
            <div
                class="relative bg-white rounded-[45px] shadow-2xl p-6 lg:p-10 overflow-hidden"
                data-aos="zoom-in"
            >

                <!-- DECORATION -->
                <div class="absolute top-0 right-0 w-72 h-72 bg-green-100 rounded-full blur-3xl opacity-40"></div>

                <!-- IMAGE -->
                <div class="relative rounded-[35px] overflow-hidden border border-gray-100">

                    <!-- GANTI DENGAN GAMBAR STRUKTUR ASLI -->
                    <img
                        src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2070"
                        alt="Struktur Organisasi"
                        class="w-full object-cover hover:scale-105 transition duration-700"
                    >

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
