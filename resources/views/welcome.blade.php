<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distanhorti Jabar</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-md fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <div class="text-2xl font-bold text-green-700">
                Distanhorti
            </div>

            <ul class="hidden md:flex gap-8 font-medium">
                <li><a href="#" class="hover:text-green-600">Tentang Kami</a></li>
                <li><a href="#" class="hover:text-green-600">Informasi Publik</a></li>
                <li><a href="#" class="hover:text-green-600">PPID</a></li>
                <li><a href="#" class="hover:text-green-600">Layanan</a></li>
                <li><a href="#" class="hover:text-green-600">Program</a></li>
            </ul>

        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="relative h-screen flex items-center justify-center text-white">

        <img
            src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854"
            class="absolute w-full h-full object-cover"
        >

        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative z-10 text-center px-6 max-w-4xl">

            <h1 class="text-5xl md:text-7xl font-bold leading-tight mb-6">
                Dinas Tanaman Pangan dan Hortikultura Provinsi Jawa Barat
            </h1>

            <p class="text-lg md:text-xl text-gray-200 leading-relaxed">
                Distanhorti Jabar mempunyai tugas pokok menyelenggarakan
                perumusan kebijakan teknis tanaman pangan dan tanaman
                hortikultura serta mendukung ketahanan pangan di Jawa Barat.
            </p>

            <div class="mt-8 flex justify-center gap-4">
                <button class="bg-green-600 hover:bg-green-700 px-6 py-3 rounded-xl font-semibold">
                    Lihat Layanan
                </button>

                <button class="border border-white hover:bg-white hover:text-black px-6 py-3 rounded-xl font-semibold">
                    Berita Terkini
                </button>
            </div>

        </div>

    </section>

    <!-- BERITA -->
    <section class="py-24 bg-white">

        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-16">
                <h2 class="text-5xl font-bold text-gray-900 mb-4">
                    Berita Distanhorti
                </h2>

                <p class="text-gray-500 text-lg">
                    Informasi dan berita terbaru dari Distanhorti Jawa Barat
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">

                <!-- CARD -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:-translate-y-2 transition duration-300">

                    <img
                        src="https://images.unsplash.com/photo-1464226184884-fa280b87c399"
                        class="h-60 w-full object-cover"
                    >

                    <div class="p-6">

                        <span class="text-sm text-green-600 font-semibold">
                            Berita
                        </span>

                        <h3 class="text-2xl font-bold mt-3 mb-4">
                            Tanam Padi Serentak di 14 Provinsi
                        </h3>

                        <p class="text-gray-500 mb-4">
                            Kamis, 24 April 2025
                        </p>

                        <button class="text-green-600 font-semibold">
                            Baca Selengkapnya →
                        </button>

                    </div>

                </div>

                <!-- CARD -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:-translate-y-2 transition duration-300">

                    <img
                        src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854"
                        class="h-60 w-full object-cover"
                    >

                    <div class="p-6">

                        <span class="text-sm text-green-600 font-semibold">
                            Artikel
                        </span>

                        <h3 class="text-2xl font-bold mt-3 mb-4">
                            Evaluasi dan Kaji Ulang Latihan Kader
                        </h3>

                        <p class="text-gray-500 mb-4">
                            Senin, 13 Oktober 2025
                        </p>

                        <button class="text-green-600 font-semibold">
                            Baca Selengkapnya →
                        </button>

                    </div>

                </div>

                <!-- CARD -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:-translate-y-2 transition duration-300">

                    <img
                        src="https://images.unsplash.com/photo-1523741543316-beb7fc7023d8"
                        class="h-60 w-full object-cover"
                    >

                    <div class="p-6">

                        <span class="text-sm text-green-600 font-semibold">
                            Berita
                        </span>

                        <h3 class="text-2xl font-bold mt-3 mb-4">
                            Hadiri Panen Jagung di Garut
                        </h3>

                        <p class="text-gray-500 mb-4">
                            Kamis, 24 April 2025
                        </p>

                        <button class="text-green-600 font-semibold">
                            Baca Selengkapnya →
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- LAYANAN -->
    <section class="py-24 bg-gray-100">

        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-16">

                <h2 class="text-5xl font-bold mb-4">
                    Layanan Distanhorti
                </h2>

                <p class="text-gray-500 text-lg">
                    Berbagai layanan publik untuk masyarakat Jawa Barat
                </p>

            </div>

            <div class="grid md:grid-cols-3 gap-8">

                <div class="bg-white p-10 rounded-3xl shadow-md hover:shadow-xl transition">
                    <h3 class="text-3xl font-bold mb-4 text-green-700">
                        Kimia Agro
                    </h3>

                    <p class="text-gray-600 mb-6">
                        Sistem Manajemen Informasi Laboratorium Pertanian Terpadu
                    </p>

                    <button class="text-green-600 font-semibold">
                        Selengkapnya →
                    </button>
                </div>

                <div class="bg-white p-10 rounded-3xl shadow-md hover:shadow-xl transition">
                    <h3 class="text-3xl font-bold mb-4 text-green-700">
                        SERBETPANON
                    </h3>

                    <p class="text-gray-600 mb-6">
                        Sertifikasi Benih Tanaman Pangan Online
                    </p>

                    <button class="text-green-600 font-semibold">
                        Selengkapnya →
                    </button>
                </div>

                <div class="bg-white p-10 rounded-3xl shadow-md hover:shadow-xl transition">
                    <h3 class="text-3xl font-bold mb-4 text-green-700">
                        KASOHOR
                    </h3>

                    <p class="text-gray-600 mb-6">
                        Layanan Online Sertifikasi Benih Hortikultura
                    </p>

                    <button class="text-green-600 font-semibold">
                        Selengkapnya →
                    </button>
                </div>

            </div>

        </div>

    </section>

    <!-- GALERI -->
    <section class="py-24 bg-white">

        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-16">

                <h2 class="text-5xl font-bold mb-4">
                    Galeri Distanhorti
                </h2>

                <p class="text-gray-500 text-lg max-w-3xl mx-auto">
                    Dokumentasi kegiatan dan program Distanhorti Jawa Barat
                </p>

            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

                <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399"
                    class="rounded-3xl h-72 w-full object-cover hover:scale-105 transition duration-300">

                <img src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854"
                    class="rounded-3xl h-72 w-full object-cover hover:scale-105 transition duration-300">

                <img src="https://images.unsplash.com/photo-1523741543316-beb7fc7023d8"
                    class="rounded-3xl h-72 w-full object-cover hover:scale-105 transition duration-300">

                <img src="https://images.unsplash.com/photo-1492496913980-501348b61469"
                    class="rounded-3xl h-72 w-full object-cover hover:scale-105 transition duration-300">

            </div>

        </div>

    </section>

    <!-- FOOTER -->
    <footer class="bg-green-700 text-white py-16">

        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-12">

            <div>
                <h3 class="text-3xl font-bold mb-6">
                    Distanhorti
                </h3>

                <p class="text-green-100">
                    Dinas Tanaman Pangan dan Hortikultura Provinsi Jawa Barat
                </p>
            </div>

            <div>
                <h4 class="font-bold text-xl mb-4">
                    Alamat
                </h4>

                <p class="text-green-100">
                    Jalan Surapati No.71 Bandung
                </p>
            </div>

            <div>
                <h4 class="font-bold text-xl mb-4">
                    Kontak
                </h4>

                <p class="text-green-100">
                    distanhorti@jabarprov.go.id
                </p>

                <p class="text-green-100 mt-2">
                    (022)2503884
                </p>
            </div>

            <div>
                <h4 class="font-bold text-xl mb-4">
                    Sosial Media
                </h4>

                <div class="flex gap-4 text-2xl">
                    <span>📘</span>
                    <span>📷</span>
                    <span>▶️</span>
                    <span>🎵</span>
                </div>
            </div>

        </div>

        <div class="text-center mt-16 text-green-100">
            Copyright © Distanhorti Jabar 2024
        </div>

    </footer>

</body>
</html>
