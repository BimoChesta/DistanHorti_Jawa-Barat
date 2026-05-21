<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Sejarah Distanhorti Jabar
    </title>
</head>

<body class="bg-gray-50 text-gray-800">

    @include('partials.navbar')

    <!-- HERO -->
    <section class="relative pt-40 pb-24 overflow-hidden bg-gradient-to-br from-green-700 via-green-800 to-green-950">

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
                    Sejarah
                </span>

            </div>

            <!-- TITLE -->
            <div data-aos="fade-up">

                <span class="uppercase tracking-[0.3em] text-green-300 font-semibold">
                    History
                </span>

                <h1 class="text-5xl lg:text-7xl font-bold text-white mt-6 leading-tight max-w-5xl">

                    Sejarah
                    Dinas Tanaman Pangan
                    dan Hortikultura
                    Provinsi Jawa Barat

                </h1>

                <p class="text-green-100 text-xl leading-relaxed mt-8 max-w-4xl">

                    Perjalanan panjang Dinas Tanaman Pangan dan Hortikultura
                    Provinsi Jawa Barat dalam mendukung pembangunan pertanian,
                    ketahanan pangan, dan kesejahteraan masyarakat.

                </p>

            </div>

        </div>

    </section>

    <!-- CONTENT -->
    <section class="py-24">

        <div class="max-w-5xl mx-auto px-6">

            <!-- LATAR BELAKANG -->
            <div
                class="bg-white rounded-[40px] shadow-xl p-10 lg:p-16 mb-20"
                data-aos="fade-up"
            >

                <span class="text-green-600 uppercase tracking-[0.3em] font-semibold">
                    Latar Belakang
                </span>

                <h2 class="text-4xl font-bold mt-5 mb-10">
                    Sejarah Awal Distanhorti Jabar
                </h2>

                <div class="space-y-8 text-gray-600 leading-relaxed text-lg">

                    <p>
                        Kegiatan sub sektor pertanian tanaman pangan dan
                        hortikultura di Jawa Barat sejak jaman penjajahan
                        sampai saat ini telah mengalami perkembangan yang
                        menggembirakan baik dilihat dari segi pencapaian
                        populasi, produksi, konsumsi, penyerapan tenaga kerja,
                        pendapatan petani, permintaan masyarakat, investasi
                        maupun sumbangan bagi devisa negara.
                    </p>

                    <p>
                        Perkembangan tersebut tidak terlepas dari keberadaan
                        Dinas Tanaman Pangan dan Hortikultura Provinsi Jawa Barat
                        dalam peranannya untuk meningkatkan produksi, populasi,
                        konsumsi dan pemasaran produk-produk pertanian tanaman
                        pangan dan hortikultura.
                    </p>

                </div>

            </div>

            <!-- TIMELINE -->
            <div class="relative">

                <!-- LINE -->
                <div class="absolute left-5 top-0 bottom-0 w-1 bg-green-200"></div>

                <!-- ITEM -->
                <div
                    class="relative pl-20 mb-20"
                    data-aos="fade-right"
                >

                    <div class="absolute left-0 top-0 w-12 h-12 rounded-full bg-green-600 border-8 border-green-100"></div>

                    <div class="bg-white rounded-[35px] shadow-xl p-10">

                        <span class="text-green-600 font-semibold uppercase tracking-widest">
                            Zaman Kolonialisasi Belanda
                        </span>

                        <h3 class="text-4xl font-bold mt-4 mb-8">
                            Landbouw Voorlichtings Dienst (LVD)
                        </h3>

                        <div class="space-y-6 text-gray-600 leading-relaxed text-lg">

                            <p>
                                Pada masa kolonialisasi Belanda, lembaga yang
                                menyelenggarakan pembinaan pertanian di Jawa Barat
                                adalah Provinciale Landbouw Voorlichtings Dienst
                                (LVD) yang diperkirakan telah berdiri sejak tahun 1912.
                            </p>

                            <p>
                                Fungsi lembaga ini adalah memberikan pembinaan
                                terhadap para petani pribumi untuk meningkatkan
                                produksi pertanian serta pengelolaan tanaman
                                pangan, hortikultura, dan perkebunan.
                            </p>

                            <ul class="list-disc ml-6 space-y-3">

                                <li>Bagian Tanaman Rakyat</li>

                                <li>Bagian Tanaman Keras</li>

                                <li>Balai Benih Padi Cihea didirikan tahun 1921</li>

                                <li>Lembaga pendidikan pertanian di Sukabumi, Bogor, dan Sumedang</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <!-- ITEM -->
                <div
                    class="relative pl-20 mb-20"
                    data-aos="fade-left"
                >

                    <div class="absolute left-0 top-0 w-12 h-12 rounded-full bg-green-600 border-8 border-green-100"></div>

                    <div class="bg-white rounded-[35px] shadow-xl p-10">

                        <span class="text-green-600 font-semibold uppercase tracking-widest">
                            Zaman Kolonialisasi Jepang
                        </span>

                        <h3 class="text-4xl font-bold mt-4 mb-8">
                            NORINKA
                        </h3>

                        <div class="space-y-6 text-gray-600 leading-relaxed text-lg">

                            <p>
                                Pada masa kolonial Jepang, pembinaan pertanian
                                dilaksanakan oleh NORINKA yang bernaung dibawah
                                pemerintahan Jepang.
                            </p>

                            <p>
                                Program pertanian difokuskan untuk memenuhi
                                kebutuhan pangan dan mensuplai kebutuhan perang
                                tentara Jepang.
                            </p>

                            <ul class="list-disc ml-6 space-y-3">

                                <li>Pengelolaan Balai Benih Padi Cihea dilanjutkan</li>

                                <li>Perubahan nama sekolah pertanian</li>

                                <li>Pembinaan produksi pangan masyarakat</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <!-- ITEM -->
                <div
                    class="relative pl-20 mb-20"
                    data-aos="fade-right"
                >

                    <div class="absolute left-0 top-0 w-12 h-12 rounded-full bg-green-600 border-8 border-green-100"></div>

                    <div class="bg-white rounded-[35px] shadow-xl p-10">

                        <span class="text-green-600 font-semibold uppercase tracking-widest">
                            Zaman Kemerdekaan
                        </span>

                        <h3 class="text-4xl font-bold mt-4 mb-8">
                            Jawatan Pertanian Republik Indonesia
                        </h3>

                        <div class="space-y-6 text-gray-600 leading-relaxed text-lg">

                            <p>
                                Setelah Indonesia merdeka tahun 1945,
                                dibentuk Jawatan Pertanian Republik Indonesia
                                dibawah Departemen Kemakmuran.
                            </p>

                            <p>
                                Fokus utama lembaga ini adalah meningkatkan
                                produksi pertanian dan kesejahteraan petani.
                            </p>

                            <ul class="list-disc ml-6 space-y-3">

                                <li>Pengembangan Balai Benih Cihea</li>

                                <li>Pendidikan Mantri Pertanian</li>

                                <li>Pembinaan pertanian rakyat</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <!-- ITEM -->
                <div
                    class="relative pl-20"
                    data-aos="fade-left"
                >

                    <div class="absolute left-0 top-0 w-12 h-12 rounded-full bg-green-600 border-8 border-green-100"></div>

                    <div class="bg-gradient-to-br from-green-700 to-green-900 rounded-[35px] shadow-2xl p-10 text-white">

                        <span class="uppercase tracking-[0.3em] text-green-200 font-semibold">
                            2017 - Sekarang
                        </span>

                        <h3 class="text-4xl font-bold mt-4 mb-8">
                            Dinas Tanaman Pangan dan Hortikultura
                        </h3>

                        <div class="space-y-6 text-green-100 leading-relaxed text-lg">

                            <p>
                                Berdasarkan Peraturan Gubernur Nomor 57 Tahun 2017,
                                nomenklatur Dinas Pertanian dan Tanaman Pangan
                                Provinsi Jawa Barat berubah menjadi
                                Dinas Tanaman Pangan dan Hortikultura
                                Provinsi Jawa Barat.
                            </p>

                            <p>
                                Hingga saat ini Distanhorti Jabar terus
                                berkomitmen mendukung ketahanan pangan,
                                pertanian modern, serta pelayanan publik
                                berbasis digital.
                            </p>

                            <ul class="list-disc ml-6 space-y-3">

                                <li>UPTD Balai Benih Padi dan Palawija</li>

                                <li>UPTD Balai Benih Hortikultura</li>

                                <li>UPTD Balai Pengawasan dan Sertifikasi Benih</li>

                                <li>UPTD Balai Pelatihan Tanaman Pangan dan Hortikultura</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- SOCIAL MEDIA -->
    <section class="pb-28">

        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-16" data-aos="fade-up">

                <span class="uppercase tracking-[0.3em] text-green-600 font-semibold">
                    Social Media
                </span>

                <h2 class="text-5xl font-bold mt-5">
                    Distanhorti Jabar
                </h2>

            </div>

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
                        Instagram
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-8">

                        Explore informasi ter-update dan konten menarik
                        dari Distanhorti Jabar.

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
                        Twitter
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-8">

                        Temukan konten terbaik tentang pertanian
                        di Jawa Barat.

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
                        Youtube
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-8">

                        Official Youtube Channel Distanhorti
                        Provinsi Jawa Barat.

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
