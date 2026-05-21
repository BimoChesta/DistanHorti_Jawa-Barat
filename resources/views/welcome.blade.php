<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distanhorti Jabar</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800 pt-20">

    @include('partials.navbar')

    <!-- HERO SECTION -->
    <section class="relative min-h-screen overflow-hidden bg-black">

        <!-- BACKGROUND IMAGE -->
        <img src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854"
            class="absolute inset-0 w-full h-full object-cover">

        <!-- OVERLAY -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/40"></div>

        <!-- CONTENT -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 min-h-screen flex items-center">

            <div class="grid lg:grid-cols-2 gap-16 items-center w-full">

                <!-- LEFT -->
                <div data-aos="fade-right">

                    <div
                        class="inline-flex items-center gap-2 bg-green-600/20 border border-green-400/30 px-4 py-2 rounded-full mb-6">

                        <div class="w-2 h-2 rounded-full bg-green-400"></div>

                        <span class="text-green-200 text-sm">
                            Website Resmi Pemerintah Provinsi Jawa Barat
                        </span>

                    </div>

                    <h1 class="text-5xl lg:text-7xl font-bold text-white leading-tight mb-8">

                        Dinas Tanaman Pangan dan Hortikultura
                        <span class="text-green-400">
                            Provinsi Jawa Barat
                        </span>

                    </h1>

                    <p class="text-xl text-gray-300 leading-relaxed mb-10 max-w-2xl">

                        Distanhorti Jabar mempunyai tugas pokok menyelenggarakan
                        perumusan kebijakan teknis tanaman pangan dan tanaman
                        hortikultura untuk mendukung ketahanan pangan dan
                        kesejahteraan masyarakat Jawa Barat.

                    </p>

                    <!-- BUTTON -->
                    <div class="flex flex-wrap gap-5">

                        <button
                            class="bg-green-600 hover:bg-green-700 px-8 py-4 rounded-2xl text-white font-semibold text-lg transition duration-300 shadow-2xl hover:scale-105">

                            Jelajahi Layanan

                        </button>

                        <button
                            class="border border-white/30 backdrop-blur-md hover:bg-white hover:text-black px-8 py-4 rounded-2xl text-white font-semibold text-lg transition duration-300">

                            Berita Terkini

                        </button>

                    </div>

                    <!-- STATS -->
                    <div class="grid grid-cols-3 gap-6 mt-16">

                        <div class="bg-white/10 backdrop-blur-lg border border-white/10 rounded-3xl p-6">

                            <h3 class="text-4xl font-bold text-green-400 mb-2">
                                27+
                            </h3>

                            <p class="text-gray-300">
                                Kabupaten/Kota
                            </p>

                        </div>

                        <div class="bg-white/10 backdrop-blur-lg border border-white/10 rounded-3xl p-6">

                            <h3 class="text-4xl font-bold text-green-400 mb-2">
                                100+
                            </h3>

                            <p class="text-gray-300">
                                Program Pertanian
                            </p>

                        </div>

                        <div class="bg-white/10 backdrop-blur-lg border border-white/10 rounded-3xl p-6">

                            <h3 class="text-4xl font-bold text-green-400 mb-2">
                                1 Juta+
                            </h3>

                            <p class="text-gray-300">
                                Petani Terbantu
                            </p>

                        </div>

                    </div>

                </div>

                <!-- RIGHT -->
                <div class="relative hidden lg:block" data-aos="fade-left">

                    <!-- MAIN CARD -->
                    <div class="relative z-10 rounded-[40px] overflow-hidden shadow-2xl border border-white/10">

                        <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399"
                            class="w-full h-[900px] object-cover">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>

                        <div class="absolute bottom-0 p-8">

                            <span class="bg-green-500 text-white px-4 py-2 rounded-full text-sm">
                                Program Unggulan
                            </span>

                            <h2 class="text-4xl font-bold text-white mt-5 leading-tight">

                                Swasembada Pangan untuk Jawa Barat Maju

                            </h2>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- BOTTOM GRADIENT -->
        <div class="absolute bottom-0 left-0 w-full h-40 bg-gradient-to-t from-gray-50 to-transparent"></div>

    </section>

    <!-- BERITA SECTION -->
    <section class="py-28 bg-gray-50">

        <div class="max-w-7xl mx-auto px-6">

            <!-- HEADER -->
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between mb-16">

                <div>

                    <span class="text-green-600 font-semibold tracking-widest uppercase">
                        Informasi Terkini
                    </span>

                    <h2 class="text-5xl font-bold text-gray-900 mt-4 leading-tight">
                        Berita & Artikel
                        <br>
                        Distanhorti Jabar
                    </h2>

                </div>

                <button
                    class="mt-6 lg:mt-0 border border-green-600 text-green-600 hover:bg-green-600 hover:text-white transition px-6 py-3 rounded-2xl font-semibold">

                    Lihat Semua Posting

                </button>

            </div>

            <!-- GRID -->
            <div class="grid lg:grid-cols-3 gap-8">

                <!-- FEATURED NEWS -->
                <div class="lg:col-span-2 relative rounded-[40px] overflow-hidden group min-h-[650px]" data-aos="zoom-in">

                    <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>

                    <div class="absolute bottom-0 p-10">

                        <span class="bg-green-500 text-white px-5 py-2 rounded-full text-sm font-semibold">
                            Berita Utama
                        </span>

                        <h3 class="text-4xl font-bold text-white mt-6 leading-tight max-w-3xl">

                            Tanam Padi Serentak di 14 Provinsi,
                            Indramayu Siap Jadi Tulang Punggung
                            Pangan Nasional

                        </h3>

                        <div class="flex items-center gap-4 mt-6 text-gray-300">

                            <span>Kamis, 24 April 2025</span>

                            <span>•</span>

                            <span>Sinar Tani</span>

                        </div>

                        <button
                            class="mt-8 bg-white text-black hover:bg-green-500 hover:text-white transition px-6 py-3 rounded-2xl font-semibold">

                            Baca Selengkapnya

                        </button>

                    </div>

                </div>

                <!-- SIDE NEWS -->
                <div class="space-y-8" data-aos="fade-up">

                    <!-- ITEM -->
                    <div class="bg-white rounded-3xl p-5 shadow-md hover:shadow-2xl transition duration-300 group">

                        <div class="flex gap-5">

                            <img src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854"
                                class="w-32 h-32 rounded-2xl object-cover group-hover:scale-105 transition">

                            <div>

                                <span class="text-green-600 text-sm font-semibold">
                                    Artikel
                                </span>

                                <h3 class="font-bold text-xl mt-2 leading-snug">

                                    Evaluasi dan Kaji Ulang Latihan Kader

                                </h3>

                                <p class="text-gray-500 text-sm mt-3">
                                    Senin, 13 Oktober 2025
                                </p>

                            </div>

                        </div>

                    </div>

                    <!-- ITEM -->
                    <div class="bg-white rounded-3xl p-5 shadow-md hover:shadow-2xl transition duration-300 group">

                        <div class="flex gap-5">

                            <img src="https://images.unsplash.com/photo-1523741543316-beb7fc7023d8"
                                class="w-32 h-32 rounded-2xl object-cover group-hover:scale-105 transition">

                            <div>

                                <span class="text-green-600 text-sm font-semibold">
                                    Berita
                                </span>

                                <h3 class="font-bold text-xl mt-2 leading-snug">

                                    Hadiri Panen Jagung di Garut

                                </h3>

                                <p class="text-gray-500 text-sm mt-3">
                                    Kamis, 24 April 2025
                                </p>

                            </div>

                        </div>

                    </div>

                    <!-- ITEM -->
                    <div class="bg-white rounded-3xl p-5 shadow-md hover:shadow-2xl transition duration-300 group">

                        <div class="flex gap-5">

                            <img src="https://images.unsplash.com/photo-1492496913980-501348b61469"
                                class="w-32 h-32 rounded-2xl object-cover group-hover:scale-105 transition">

                            <div>

                                <span class="text-green-600 text-sm font-semibold">
                                    Berita
                                </span>

                                <h3 class="font-bold text-xl mt-2 leading-snug">

                                    Program Ketahanan Pangan Kabupaten Bogor

                                </h3>

                                <p class="text-gray-500 text-sm mt-3">
                                    Senin, 14 April 2025
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- LAYANAN SECTION -->
    <section class="relative py-32 overflow-hidden bg-gradient-to-b from-white to-green-50">

        <!-- BACKGROUND DECORATION -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-green-200 rounded-full blur-3xl opacity-20"></div>

        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-green-300 rounded-full blur-3xl opacity-20"></div>

        <div class="relative max-w-7xl mx-auto px-6">

            <!-- HEADER -->
            <div class="text-center mb-20">

                <span class="text-green-600 uppercase tracking-[0.3em] font-semibold">
                    Digital Services
                </span>

                <h2 class="text-5xl lg:text-6xl font-bold text-gray-900 mt-5 leading-tight">

                    Layanan
                    <span class="text-green-600">
                        Distanhorti Jabar
                    </span>

                </h2>

                <p class="text-gray-500 text-xl mt-6 max-w-3xl mx-auto leading-relaxed">

                    Dinas Tanaman Pangan dan Hortikultura Provinsi Jawa Barat
                    menyediakan berbagai layanan digital modern untuk mendukung
                    kebutuhan masyarakat dan sektor pertanian.

                </p>

            </div>

            <!-- GRID -->
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8" data-aos="fade-up">

                <!-- CARD 1 -->
                <a href="https://instagram.com" target="_blank"
                    class="group relative bg-white/70 backdrop-blur-xl border border-white/50 rounded-[35px] p-10 shadow-xl hover:shadow-2xl hover:-translate-y-3 transition duration-500 overflow-hidden">

                    <div class="absolute top-0 right-0 w-40 h-40 bg-green-100 rounded-full blur-3xl opacity-50"></div>

                    <div class="relative z-10">

                        <div
                            class="w-20 h-20 rounded-3xl bg-green-100 flex items-center justify-center text-4xl mb-8 group-hover:scale-110 transition">
                            🧪
                        </div>

                        <h3 class="text-3xl font-bold text-gray-900 mb-5">
                            Kimia Agro
                        </h3>

                        <p class="text-gray-600 leading-relaxed mb-8">

                            Sistem Manajemen Informasi Laboratorium
                            Pertanian Terpadu berbasis digital.

                        </p>

                        <div class="flex items-center text-green-600 font-semibold gap-2">

                            Selengkapnya

                            <span class="group-hover:translate-x-2 transition">
                                →
                            </span>

                        </div>

                    </div>

                </a>

                <!-- CARD 2 -->
                <a href="https://instagram.com" target="_blank"
                    class="group relative bg-white/70 backdrop-blur-xl border border-white/50 rounded-[35px] p-10 shadow-xl hover:shadow-2xl hover:-translate-y-3 transition duration-500 overflow-hidden">

                    <div class="absolute top-0 right-0 w-40 h-40 bg-green-100 rounded-full blur-3xl opacity-50"></div>

                    <div class="relative z-10">

                        <div
                            class="w-20 h-20 rounded-3xl bg-green-100 flex items-center justify-center text-4xl mb-8 group-hover:scale-110 transition">
                            🌾
                        </div>

                        <h3 class="text-3xl font-bold text-gray-900 mb-5">
                            SERBETPANON
                        </h3>

                        <p class="text-gray-600 leading-relaxed mb-8">

                            Sertifikasi Benih Tanaman Pangan Online
                            yang cepat dan mudah diakses masyarakat.

                        </p>

                        <div class="flex items-center text-green-600 font-semibold gap-2">

                            Selengkapnya

                            <span class="group-hover:translate-x-2 transition">
                                →
                            </span>

                        </div>

                    </div>

                </a>

                <!-- CARD 3 -->
                <a href="https://instagram.com" target="_blank"
                    class="group relative bg-white/70 backdrop-blur-xl border border-white/50 rounded-[35px] p-10 shadow-xl hover:shadow-2xl hover:-translate-y-3 transition duration-500 overflow-hidden">

                    <div class="absolute top-0 right-0 w-40 h-40 bg-green-100 rounded-full blur-3xl opacity-50"></div>

                    <div class="relative z-10">

                        <div
                            class="w-20 h-20 rounded-3xl bg-green-100 flex items-center justify-center text-4xl mb-8 group-hover:scale-110 transition">
                            🌱
                        </div>

                        <h3 class="text-3xl font-bold text-gray-900 mb-5">
                            KASOHOR
                        </h3>

                        <p class="text-gray-600 leading-relaxed mb-8">

                            Layanan Online Sertifikasi Benih
                            Hortikultura berbasis digital.

                        </p>

                        <div class="flex items-center text-green-600 font-semibold gap-2">

                            Selengkapnya

                            <span class="group-hover:translate-x-2 transition">
                                →
                            </span>

                        </div>

                    </div>

                </a>

                <!-- CARD 4 -->
                <a href="https://instagram.com" target="_blank"
                    class="group relative bg-white/70 backdrop-blur-xl border border-white/50 rounded-[35px] p-10 shadow-xl hover:shadow-2xl hover:-translate-y-3 transition duration-500 overflow-hidden">

                    <div class="absolute top-0 right-0 w-40 h-40 bg-green-100 rounded-full blur-3xl opacity-50"></div>

                    <div class="relative z-10">

                        <div
                            class="w-20 h-20 rounded-3xl bg-green-100 flex items-center justify-center text-4xl mb-8 group-hover:scale-110 transition">
                            🚜
                        </div>

                        <h3 class="text-3xl font-bold text-gray-900 mb-5">
                            Registrasi Lahan
                        </h3>

                        <p class="text-gray-600 leading-relaxed mb-8">

                            Pendataan dan registrasi lahan hortikultura
                            secara online dan terintegrasi.

                        </p>

                        <div class="flex items-center text-green-600 font-semibold gap-2">

                            Selengkapnya

                            <span class="group-hover:translate-x-2 transition">
                                →
                            </span>

                        </div>

                    </div>

                </a>

                <!-- CARD 5 -->
                <a href="https://instagram.com" target="_blank"
                    class="group relative bg-white/70 backdrop-blur-xl border border-white/50 rounded-[35px] p-10 shadow-xl hover:shadow-2xl hover:-translate-y-3 transition duration-500 overflow-hidden">

                    <div class="absolute top-0 right-0 w-40 h-40 bg-green-100 rounded-full blur-3xl opacity-50"></div>

                    <div class="relative z-10">

                        <div
                            class="w-20 h-20 rounded-3xl bg-green-100 flex items-center justify-center text-4xl mb-8 group-hover:scale-110 transition">
                            📊
                        </div>

                        <h3 class="text-3xl font-bold text-gray-900 mb-5">
                            Sistem Pengawasan
                        </h3>

                        <p class="text-gray-600 leading-relaxed mb-8">

                            Monitoring dan pengawasan benih tanaman
                            pangan berbasis sistem digital.

                        </p>

                        <div class="flex items-center text-green-600 font-semibold gap-2">

                            Selengkapnya

                            <span class="group-hover:translate-x-2 transition">
                                →
                            </span>

                        </div>

                    </div>

                </a>

                <!-- CARD 6 -->
                <a href="https://instagram.com" target="_blank"
                    class="group relative bg-gradient-to-br from-green-600 to-green-800 rounded-[35px] p-10 shadow-2xl hover:-translate-y-3 transition duration-500 overflow-hidden text-white">

                    <div class="absolute -top-10 -right-10 w-48 h-48 bg-white/10 rounded-full"></div>

                    <div class="relative z-10">

                        <div
                            class="w-20 h-20 rounded-3xl bg-white/20 flex items-center justify-center text-4xl mb-8 group-hover:scale-110 transition">
                            💬
                        </div>

                        <h3 class="text-3xl font-bold mb-5">
                            Sapawarga
                        </h3>

                        <p class="text-white/80 leading-relaxed mb-8">

                            Platform komunikasi digital masyarakat
                            dengan Pemerintah Provinsi Jawa Barat.

                        </p>

                        <div class="flex items-center font-semibold gap-2">

                            Selengkapnya

                            <span class="group-hover:translate-x-2 transition">
                                →
                            </span>

                        </div>

                    </div>

                </a>

            </div>

        </div>

    </section>

    <!-- GALERI SECTION -->
<section class="relative py-32 bg-gray-950 overflow-hidden">

    <!-- BACKGROUND -->
    <div class="absolute top-0 left-0 w-full h-full">

        <div class="absolute top-0 left-0 w-96 h-96 bg-green-500/20 rounded-full blur-3xl"></div>

        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-green-400/10 rounded-full blur-3xl"></div>

    </div>

    <div class="relative max-w-7xl mx-auto px-6">

        <!-- HEADER -->
        <div class="text-center mb-20">

            <span class="text-green-400 uppercase tracking-[0.3em] font-semibold">
                Documentation
            </span>

            <h2 class="text-5xl lg:text-6xl font-bold text-white mt-5">

                Galeri
                <span class="text-green-400">
                    Distanhorti Jabar
                </span>

            </h2>

            <p class="text-gray-400 text-xl mt-6 max-w-3xl mx-auto leading-relaxed">

                Dokumentasi kegiatan, program unggulan,
                dan berbagai momen terbaik Dinas Tanaman
                Pangan dan Hortikultura Provinsi Jawa Barat.

            </p>

        </div>

        <!-- MASONRY GRID -->
        <div class="columns-1 md:columns-2 xl:columns-3 gap-6 space-y-6" data-aos="fade-up" >

            <!-- ITEM -->
            <div class="group relative overflow-hidden rounded-[35px]">

                <img
                    src="https://images.unsplash.com/photo-1464226184884-fa280b87c399"
                    class="w-full object-cover group-hover:scale-110 transition duration-700"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="absolute bottom-0 p-8 translate-y-10 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition duration-500">

                    <span class="bg-green-500 text-white px-4 py-2 rounded-full text-sm">
                        Pertanian
                    </span>

                    <h3 class="text-3xl font-bold text-white mt-5">

                        Program Swasembada Pangan

                    </h3>

                </div>

            </div>

            <!-- ITEM -->
            <div class="group relative overflow-hidden rounded-[35px]">

                <img
                    src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854"
                    class="w-full object-cover group-hover:scale-110 transition duration-700"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="absolute bottom-0 p-8 translate-y-10 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition duration-500">

                    <span class="bg-green-500 text-white px-4 py-2 rounded-full text-sm">
                        Hortikultura
                    </span>

                    <h3 class="text-3xl font-bold text-white mt-5">

                        Pengembangan Lahan Hijau

                    </h3>

                </div>

            </div>

            <!-- ITEM -->
            <div class="group relative overflow-hidden rounded-[35px]">

                <img
                    src="https://images.unsplash.com/photo-1523741543316-beb7fc7023d8"
                    class="w-full object-cover group-hover:scale-110 transition duration-700"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="absolute bottom-0 p-8 translate-y-10 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition duration-500">

                    <span class="bg-green-500 text-white px-4 py-2 rounded-full text-sm">
                        Jagung
                    </span>

                    <h3 class="text-3xl font-bold text-white mt-5">

                        Panen Jagung Bersama

                    </h3>

                </div>

            </div>

            <!-- ITEM -->
            <div class="group relative overflow-hidden rounded-[35px]">

                <img
                    src="https://images.unsplash.com/photo-1492496913980-501348b61469"
                    class="w-full object-cover group-hover:scale-110 transition duration-700"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="absolute bottom-0 p-8 translate-y-10 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition duration-500">

                    <span class="bg-green-500 text-white px-4 py-2 rounded-full text-sm">
                        Petani
                    </span>

                    <h3 class="text-3xl font-bold text-white mt-5">

                        Edukasi Petani Modern

                    </h3>

                </div>

            </div>

            <!-- ITEM -->
            <div class="group relative overflow-hidden rounded-[35px]">

                <img
                    src="https://images.unsplash.com/photo-1472396961693-142e6e269027"
                    class="w-full object-cover group-hover:scale-110 transition duration-700"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="absolute bottom-0 p-8 translate-y-10 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition duration-500">

                    <span class="bg-green-500 text-white px-4 py-2 rounded-full text-sm">
                        Alam
                    </span>

                    <h3 class="text-3xl font-bold text-white mt-5">

                        Keindahan Pertanian Jawa Barat

                    </h3>

                </div>

            </div>

            <!-- ITEM -->
            <div class="group relative overflow-hidden rounded-[35px]">

                <img
                    src="https://images.unsplash.com/photo-1506744038136-46273834b3fb"
                    class="w-full object-cover group-hover:scale-110 transition duration-700"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="absolute bottom-0 p-8 translate-y-10 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition duration-500">

                    <span class="bg-green-500 text-white px-4 py-2 rounded-full text-sm">
                        Program
                    </span>

                    <h3 class="text-3xl font-bold text-white mt-5">

                        Pengembangan Wilayah Hijau

                    </h3>

                </div>

            </div>

        </div>

    </div>

</section>

    <!-- FOOTER -->
<footer data-aos="fade-up" class="relative bg-[#08120D] overflow-hidden text-white pt-28">

    <!-- BACKGROUND EFFECT -->
    <div class="absolute top-0 left-0 w-full h-full">

        <div class="absolute top-0 left-0 w-96 h-96 bg-green-500/10 rounded-full blur-3xl"></div>

        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-green-400/10 rounded-full blur-3xl"></div>

    </div>

    <div class="relative max-w-7xl mx-auto px-6">

        <!-- TOP -->
        <div class="grid lg:grid-cols-5 gap-16 pb-20 border-b border-white/10">

            <!-- BRAND -->
            <div class="lg:col-span-2">

                <div class="flex items-center gap-4 mb-8">

                    <div class="w-16 h-16 rounded-3xl bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center text-3xl font-bold shadow-2xl">
                        🌾
                    </div>

                    <div>

                        <h2 class="text-3xl font-bold">
                            Distanhorti
                        </h2>

                        <p class="text-green-300">
                            Provinsi Jawa Barat
                        </p>

                    </div>

                </div>

                <p class="text-gray-400 leading-relaxed text-lg mb-10 max-w-xl">

                    Dinas Tanaman Pangan dan Hortikultura Provinsi Jawa Barat
                    berkomitmen mendukung ketahanan pangan, pengembangan
                    pertanian modern, dan pelayanan publik berbasis digital.

                </p>

                <!-- CONTACT -->
                <div class="space-y-6">

                    <div class="flex items-start gap-4">

                        <div class="w-12 h-12 rounded-2xl bg-white/5 flex items-center justify-center text-xl">
                            📍
                        </div>

                        <div>

                            <h4 class="font-semibold text-lg mb-1">
                                Alamat
                            </h4>

                            <p class="text-gray-400 leading-relaxed">
                                Jalan Surapati No. 71, Kelurahan Sadang Serang,
                                Kecamatan Coblong, Kota Bandung
                            </p>

                        </div>

                    </div>

                    <div class="flex items-start gap-4">

                        <div class="w-12 h-12 rounded-2xl bg-white/5 flex items-center justify-center text-xl">
                            ✉️
                        </div>

                        <div>

                            <h4 class="font-semibold text-lg mb-1">
                                Email
                            </h4>

                            <p class="text-gray-400">
                                distanhorti@jabarprov.go.id
                            </p>

                        </div>

                    </div>

                    <div class="flex items-start gap-4">

                        <div class="w-12 h-12 rounded-2xl bg-white/5 flex items-center justify-center text-xl">
                            ☎️
                        </div>

                        <div>

                            <h4 class="font-semibold text-lg mb-1">
                                Nomor Telepon
                            </h4>

                            <p class="text-gray-400">
                                (022)2503884
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- SITEMAP -->
            <div>

                <h3 class="text-2xl font-bold mb-8">
                    Tentang Kami
                </h3>

                <div class="space-y-5">

                    <a href="/sejarah"
                       class="block text-gray-400 hover:text-green-400 transition">

                        Sejarah

                    </a>

                    <a href="/struktur-organisasi"
                       class="block text-gray-400 hover:text-green-400 transition">

                        Struktur Organisasi

                    </a>

                    <a href="/tupoksi"
                       class="block text-gray-400 hover:text-green-400 transition">

                        Tugas Pokok dan Fungsi

                    </a>

                </div>

                <h3 class="text-2xl font-bold mt-14 mb-8">
                    Program
                </h3>

                <div class="space-y-5">

                    <a href="/perda-organik"
                       class="block text-gray-400 hover:text-green-400 transition">

                        Perda Pertanian Organik

                    </a>

                    <a href="https://instagram.com"
                       target="_blank"
                       class="block text-gray-400 hover:text-green-400 transition">

                        Healthy Culture Run

                    </a>

                </div>

            </div>

            <!-- INFORMASI -->
            <div>

                <h3 class="text-2xl font-bold mb-8">
                    Informasi Publik
                </h3>

                <div class="space-y-5">

                    <a href="/kontak-kami"
                       class="block text-gray-400 hover:text-green-400 transition">

                        Kontak Kami

                    </a>

                    <a href="/dokumen-kinerja"
                       class="block text-gray-400 hover:text-green-400 transition">

                        Dokumen Kinerja

                    </a>

                    <a href="https://instagram.com"
                       target="_blank"
                       class="block text-gray-400 hover:text-green-400 transition">

                        Survey Kepuasan Masyarakat

                    </a>

                </div>

                <h3 class="text-2xl font-bold mt-14 mb-8">
                    PPID
                </h3>

                <div class="space-y-5">

                    <a href="/permohonan-informasi"
                       class="block text-gray-400 hover:text-green-400 transition">

                        Permohonan Informasi

                    </a>

                    <a href="https://instagram.com"
                       target="_blank"
                       class="block text-gray-400 hover:text-green-400 transition">

                        SP4N

                    </a>

                </div>

            </div>

            <!-- LAYANAN -->
            <div>

                <h3 class="text-2xl font-bold mb-8">
                    Layanan
                </h3>

                <div class="space-y-5">

                    <a href="https://instagram.com"
                       target="_blank"
                       class="block text-gray-400 hover:text-green-400 transition">

                        Registrasi Lahan Hortikultura

                    </a>

                    <a href="https://instagram.com"
                       target="_blank"
                       class="block text-gray-400 hover:text-green-400 transition">

                        Kimia Agro Integrated

                    </a>

                    <a href="https://instagram.com"
                       target="_blank"
                       class="block text-gray-400 hover:text-green-400 transition">

                        Sertifikasi Benih Tanaman

                    </a>

                    <a href="https://instagram.com"
                       target="_blank"
                       class="block text-gray-400 hover:text-green-400 transition">

                        Sistem Pengawasan Benih

                    </a>

                    <a href="https://instagram.com"
                       target="_blank"
                       class="block text-gray-400 hover:text-green-400 transition">

                        Sertifikasi Benih Hortikultura

                    </a>

                    <a href="https://instagram.com"
                       target="_blank"
                       class="block text-gray-400 hover:text-green-400 transition">

                        Sapawarga

                    </a>

                </div>

            </div>

        </div>

        <!-- BOTTOM -->
        <div class="py-10 flex flex-col lg:flex-row items-center justify-between gap-6">

            <p class="text-gray-500 text-center lg:text-left">

                Copyright © Distanhorti Jabar 2024.
                All Rights Reserved.

            </p>

            <!-- SOCIAL -->
            <div class="flex items-center gap-4">

                <a href="#"
                   class="w-14 h-14 rounded-2xl bg-white/5 hover:bg-green-600 transition flex items-center justify-center text-2xl">

                    📷

                </a>

                <a href="#"
                   class="w-14 h-14 rounded-2xl bg-white/5 hover:bg-green-600 transition flex items-center justify-center text-2xl">

                    ▶️

                </a>

                <a href="#"
                   class="w-14 h-14 rounded-2xl bg-white/5 hover:bg-green-600 transition flex items-center justify-center text-2xl">

                    🎵

                </a>

                <a href="#"
                   class="w-14 h-14 rounded-2xl bg-white/5 hover:bg-green-600 transition flex items-center justify-center text-2xl">

                    📘

                </a>

            </div>

        </div>

    </div>

</footer>
</body>

</html>
