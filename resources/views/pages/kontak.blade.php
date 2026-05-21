<!DOCTYPE html>
<html lang="en">
<head>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Kontak Kami
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
                    Kontak Kami
                </span>

            </div>

            <!-- TITLE -->
            <div data-aos="fade-up">

                <span class="uppercase tracking-[0.3em] text-green-300 font-semibold">
                    Contact Information
                </span>

                <h1 class="text-5xl lg:text-7xl font-bold text-white mt-6 leading-tight max-w-5xl">

                    Hubungi
                    Distanhorti Jabar

                </h1>

                <p class="text-green-100 text-xl leading-relaxed mt-8 max-w-4xl">

                    Berbagai media untuk menghubungi Dinas Tanaman Pangan
                    dan Hortikultura Provinsi Jawa Barat
                    Jl. Surapati No.71 Bandung.

                </p>

            </div>

        </div>

    </section>

    <!-- CONTACT -->
    <section class="py-24 overflow-hidden">

        <div class="max-w-7xl mx-auto px-6">

            <!-- HEADER -->
            <div
                class="text-center mb-16"
                data-aos="fade-up"
            >

                <span class="uppercase tracking-[0.3em] text-green-600 font-semibold">
                    Contact Media
                </span>

                <h2 class="text-5xl font-bold mt-5">
                    Hubungi Kami Melalui
                </h2>

            </div>

            <!-- SEARCH -->
            <div
                class="max-w-2xl mx-auto mb-20"
                data-aos="fade-up"
            >

                <div class="relative">

                    <input
                        type="text"
                        placeholder="Cari informasi kontak..."
                        class="w-full h-16 rounded-3xl border border-gray-200 bg-white px-8 pr-16 text-lg shadow-lg focus:outline-none focus:ring-4 focus:ring-green-200"
                    >

                    <div class="absolute top-1/2 right-6 -translate-y-1/2 text-2xl">
                        🔍
                    </div>

                </div>

            </div>

            <!-- CONTACT GRID -->
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">

                <!-- PHONE -->
                <div
                    class="group bg-white rounded-[35px] p-10 shadow-xl hover:shadow-2xl hover:-translate-y-3 transition duration-500"
                    data-aos="fade-up"
                >

                    <div class="w-24 h-24 rounded-[30px] bg-green-100 flex items-center justify-center text-5xl mb-8 group-hover:scale-110 transition">
                        📞
                    </div>

                    <span class="uppercase tracking-widest text-green-600 font-semibold">
                        No Telepon
                    </span>

                    <h3 class="text-3xl font-bold mt-5 mb-6">
                        (022) 250 3884
                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Hubungi layanan resmi Distanhorti Provinsi Jawa Barat
                        melalui nomor telepon kantor.

                    </p>

                </div>

                <!-- EMAIL -->
                <a
                    href="mailto:distanhorti@jabarprov.go.id"
                    class="group bg-white rounded-[35px] p-10 shadow-xl hover:shadow-2xl hover:-translate-y-3 transition duration-500"
                    data-aos="fade-up"
                >

                    <div class="w-24 h-24 rounded-[30px] bg-green-100 flex items-center justify-center text-5xl mb-8 group-hover:scale-110 transition">
                        ✉️
                    </div>

                    <span class="uppercase tracking-widest text-green-600 font-semibold">
                        Email
                    </span>

                    <h3 class="text-3xl font-bold mt-5 mb-6">
                        Email Resmi
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-8">

                        Kirim pesan dan bersurat melalui
                        email resmi kami.

                    </p>

                    <span class="text-green-600 font-semibold">
                        Selengkapnya →
                    </span>

                </a>

                <!-- INSTAGRAM -->
                <a
                    href="https://instagram.com"
                    target="_blank"
                    class="group bg-white rounded-[35px] p-10 shadow-xl hover:shadow-2xl hover:-translate-y-3 transition duration-500"
                    data-aos="fade-up"
                >

                    <div class="w-24 h-24 rounded-[30px] bg-green-100 flex items-center justify-center text-5xl mb-8 group-hover:scale-110 transition">
                        📷
                    </div>

                    <span class="uppercase tracking-widest text-green-600 font-semibold">
                        Instagram
                    </span>

                    <h3 class="text-3xl font-bold mt-5 mb-6">
                        Instagram Distanhorti
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-8">

                        Explore informasi ter-update dan keseruan
                        konten menarik di sosial media yang dikelola
                        Humas Dinas Tanaman Pangan dan Hortikultura
                        Provinsi Jawa Barat.

                    </p>

                    <span class="text-green-600 font-semibold">
                        Selengkapnya →
                    </span>

                </a>

            </div>

            <!-- PAGINATION STYLE -->
            <div
                class="mt-24 flex flex-col lg:flex-row items-center justify-between gap-8"
                data-aos="fade-up"
            >

                <div class="text-gray-600 text-lg">

                    Menampilkan
                    <span class="font-bold text-gray-900">
                        3
                    </span>
                    item dari total
                    <span class="font-bold text-gray-900">
                        3
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

    @include('partials.footer')

</body>
</html>
