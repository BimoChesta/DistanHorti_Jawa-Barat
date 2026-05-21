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
    <!-- HERO -->
<section class="relative pt-40 pb-24 overflow-hidden bg-gradient-to-br from-green-700 via-green-800 to-green-950">

    <!-- BG -->
    <div class="absolute inset-0">

        <div class="absolute top-0 left-0 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>

        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-green-400/10 rounded-full blur-3xl"></div>

    </div>

    <div class="relative max-w-7xl mx-auto px-6">

        <!-- BREADCRUMB -->
        <div class="flex items-center gap-3 text-green-200 mb-8" data-aos="fade-up">

            <a href="/" class="hover:text-white transition">
                Beranda
            </a>

            <span>/</span>

            <span class="text-white">
                Perda Penyelenggaraan Pertanian Organik
            </span>

        </div>

        <!-- TITLE -->
        <div data-aos="fade-up">

            <span class="uppercase tracking-[0.3em] text-green-300 font-semibold">
                Organic Agriculture
            </span>

            <h1 class="text-5xl lg:text-7xl font-bold text-white mt-6 leading-tight max-w-5xl">

                Perda Penyelenggaraan
                Pertanian Organik

            </h1>

            <p class="text-green-100 text-xl leading-relaxed mt-8 max-w-4xl">

                Pertanian Organik adalah manajemen produksi yang holistik
                untuk meningkatkan dan mengembangkan kesehatan agroekosistem,
                keanekaragaman hayati, siklus biologi, dan aktivitas biologi tanah.

            </p>

        </div>

    </div>

</section>

<!-- CONTENT -->
<section class="py-24 overflow-hidden bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        <!-- INTRO -->
        <div
            class="bg-white rounded-[40px] shadow-xl p-10 lg:p-14 mb-16"
            data-aos="fade-up"
        >

            <span class="uppercase tracking-[0.3em] text-green-600 font-semibold">
                Pertanian Organik
            </span>

            <h2 class="text-4xl font-bold mt-5 mb-8">
                Perda Penyelenggaraan Pertanian Organik
            </h2>

            <p class="text-gray-600 text-lg leading-relaxed mb-8">

                Pertanian Organik adalah manajemen produksi yang holistik
                untuk meningkatkan dan mengembangkan kesehatan agroekosistem
                dengan memperhatikan aspek lingkungan, keberlanjutan,
                dan kualitas hasil pertanian.

            </p>

            <div class="bg-green-50 border border-green-100 rounded-3xl p-8">

                <p class="text-gray-700 leading-relaxed text-lg">

                    Peraturan Daerah Provinsi Jawa Barat Nomor 11 Tahun 2024
                    tanggal 14 Oktober 2024 tentang Penyelenggaraan
                    Pertanian Organik Tanaman Pangan dan Tanaman Hortikultura.

                </p>

            </div>

        </div>

        <!-- LATAR BELAKANG -->
        <div
            class="bg-white rounded-[40px] shadow-xl p-10 lg:p-14 mb-16"
            data-aos="fade-up"
        >

            <h2 class="text-4xl font-bold mb-10">
                Latar Belakang
            </h2>

            <div class="space-y-6 text-gray-600 text-lg leading-relaxed">

                <div class="flex gap-4">

                    <div class="w-3 h-3 rounded-full bg-green-600 mt-3"></div>

                    <p>
                        Kondisi lahan pertanian di Jawa Barat sebanyak 88%
                        mengalami kondisi sakit berat dan sakit.
                    </p>

                </div>

                <div class="flex gap-4">

                    <div class="w-3 h-3 rounded-full bg-green-600 mt-3"></div>

                    <p>
                        Luas budidaya pertanian organik masih sangat rendah
                        dibandingkan total luas baku sawah.
                    </p>

                </div>

                <div class="flex gap-4">

                    <div class="w-3 h-3 rounded-full bg-green-600 mt-3"></div>

                    <p>
                        Kesadaran dan pengetahuan petani terhadap
                        pertanian organik masih rendah.
                    </p>

                </div>

                <div class="flex gap-4">

                    <div class="w-3 h-3 rounded-full bg-green-600 mt-3"></div>

                    <p>
                        Peluang pasar produk organik masih terbatas
                        dan perlu dikembangkan lebih luas.
                    </p>

                </div>

                <div class="flex gap-4">

                    <div class="w-3 h-3 rounded-full bg-green-600 mt-3"></div>

                    <p>
                        Produktivitas padi di Jawa Barat masih perlu
                        ditingkatkan secara berkelanjutan.
                    </p>

                </div>

            </div>

        </div>

        <!-- TUJUAN -->
        <div
            class="bg-white rounded-[40px] shadow-xl p-10 lg:p-14 mb-16"
            data-aos="fade-up"
        >

            <h2 class="text-4xl font-bold mb-10">
                Tujuan Disusunnya Perda
            </h2>

            <div class="grid lg:grid-cols-3 gap-8">

                <!-- CARD -->
                <div class="rounded-3xl bg-green-50 p-8 border border-green-100">

                    <div class="text-5xl mb-6">
                        🌱
                    </div>

                    <h3 class="text-2xl font-bold mb-4">
                        Pertanian Berkelanjutan
                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Mendorong penerapan pertanian ramah lingkungan
                        dan berkelanjutan berbasis kesehatan ekosistem.

                    </p>

                </div>

                <!-- CARD -->
                <div class="rounded-3xl bg-green-50 p-8 border border-green-100">

                    <div class="text-5xl mb-6">
                        🌾
                    </div>

                    <h3 class="text-2xl font-bold mb-4">
                        Produktivitas
                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Meningkatkan kualitas dan produktivitas hasil
                        pertanian melalui sistem pertanian organik.

                    </p>

                </div>

                <!-- CARD -->
                <div class="rounded-3xl bg-green-50 p-8 border border-green-100">

                    <div class="text-5xl mb-6">
                        ♻️
                    </div>

                    <h3 class="text-2xl font-bold mb-4">
                        Agroekosistem
                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Meningkatkan kesehatan agroekosistem dan
                        menjaga keseimbangan lingkungan pertanian.

                    </p>

                </div>

            </div>

        </div>

        <!-- DASAR HUKUM -->
<section class="py-24 bg-gradient-to-b from-white to-green-50/40 overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADER -->
        <div class="text-center mb-20" data-aos="fade-up">

            <span class="inline-flex items-center gap-4 text-green-700 font-bold tracking-[0.35em] uppercase">

                <div class="w-16 h-[2px] bg-green-500"></div>

                Dasar Hukum

                <div class="w-16 h-[2px] bg-green-500"></div>

            </span>

            <h2 class="text-5xl lg:text-7xl font-black text-gray-900 mt-8 leading-tight">

                Dokumen Pendukung

            </h2>

            <p class="text-gray-600 text-xl leading-relaxed mt-8 max-w-4xl mx-auto">

                Berbagai regulasi dan dokumen pendukung
                penyelenggaraan pertanian organik di Jawa Barat.

            </p>

        </div>

        <!-- GRID -->
        <div class="grid lg:grid-cols-3 gap-10">

            <!-- CARD -->
            <div
                class="group relative bg-white rounded-[40px] border border-gray-100 shadow-xl overflow-hidden hover:-translate-y-3 hover:shadow-2xl transition duration-500"
                data-aos="fade-up"
            >

                <!-- NUMBER -->
                <div class="absolute top-0 left-0">

                    <div class="bg-green-600 text-white font-black text-2xl px-8 py-4 rounded-br-[35px]">

                        01

                    </div>

                </div>

                <!-- CONTENT -->
                <div class="p-10 pt-28">

                    <!-- TOP -->
                    <div class="flex items-start gap-6 mb-8">

                        <!-- ICON -->
                        <div class="w-32 h-32 rounded-[35px] bg-gradient-to-br from-red-50 to-red-100 flex items-center justify-center shrink-0 group-hover:scale-105 transition">

                            <div class="text-center">

                                <div class="text-6xl mb-2">
                                    📄
                                </div>

                                <span class="text-red-600 font-bold text-sm">
                                    PDF
                                </span>

                            </div>

                        </div>

                        <!-- INFO -->
                        <div>

                            <div class="flex items-center gap-3 text-gray-500 mb-5">

                                <span class="text-xl">
                                    ⬇️
                                </span>

                                <span class="font-semibold">
                                    32 Unduhan
                                </span>

                            </div>

                            <h3 class="text-3xl font-black leading-tight mb-5">

                                PERATURAN DAERAH
                                Penyelenggaraan Pertanian Organik

                            </h3>

                            <p class="text-gray-600 leading-relaxed">

                                Penyelenggaraan Pertanian Organik
                                Tanaman Pangan dan Tanaman Hortikultura.

                            </p>

                        </div>

                    </div>

                    <!-- BUTTON -->
                    <div class="grid grid-cols-2 gap-4 mt-10">

                        <button
                            class="h-14 rounded-2xl border-2 border-green-600 text-green-700 font-bold hover:bg-green-50 transition"
                        >

                            Detail

                        </button>

                        <a
                            href="#"
                            class="h-14 rounded-2xl bg-gradient-to-r from-green-600 to-green-700 text-white font-bold flex items-center justify-center shadow-lg hover:scale-[1.03] transition"
                        >

                            Unduh

                        </a>

                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div
                class="group relative bg-white rounded-[40px] border border-gray-100 shadow-xl overflow-hidden hover:-translate-y-3 hover:shadow-2xl transition duration-500"
                data-aos="fade-up"
                data-aos-delay="100"
            >

                <div class="absolute top-0 left-0">

                    <div class="bg-green-600 text-white font-black text-2xl px-8 py-4 rounded-br-[35px]">

                        02

                    </div>

                </div>

                <div class="p-10 pt-28">

                    <div class="flex items-start gap-6 mb-8">

                        <div class="w-32 h-32 rounded-[35px] bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center shrink-0 group-hover:scale-105 transition">

                            <div class="text-center">

                                <div class="text-6xl mb-2">
                                    📄
                                </div>

                                <span class="text-red-600 font-bold text-sm">
                                    PDF
                                </span>

                            </div>

                        </div>

                        <div>

                            <div class="flex items-center gap-3 text-gray-500 mb-5">

                                <span class="text-xl">
                                    ⬇️
                                </span>

                                <span class="font-semibold">
                                    19 Unduhan
                                </span>

                            </div>

                            <h3 class="text-3xl font-black leading-tight mb-5">

                                PerKa BPOM
                                No 1 Tahun 2017

                            </h3>

                            <p class="text-gray-600 leading-relaxed">

                                Tentang Pengawasan
                                Pangan Olahan Organik.

                            </p>

                        </div>

                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-10">

                        <button
                            class="h-14 rounded-2xl border-2 border-green-600 text-green-700 font-bold hover:bg-green-50 transition"
                        >

                            Detail

                        </button>

                        <a
                            href="#"
                            class="h-14 rounded-2xl bg-gradient-to-r from-green-600 to-green-700 text-white font-bold flex items-center justify-center shadow-lg hover:scale-[1.03] transition"
                        >

                            Unduh

                        </a>

                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div
                class="group relative bg-white rounded-[40px] border border-gray-100 shadow-xl overflow-hidden hover:-translate-y-3 hover:shadow-2xl transition duration-500"
                data-aos="fade-up"
                data-aos-delay="200"
            >

                <div class="absolute top-0 left-0">

                    <div class="bg-green-600 text-white font-black text-2xl px-8 py-4 rounded-br-[35px]">

                        03

                    </div>

                </div>

                <div class="p-10 pt-28">

                    <div class="flex items-start gap-6 mb-8">

                        <div class="w-32 h-32 rounded-[35px] bg-gradient-to-br from-green-50 to-green-100 flex items-center justify-center shrink-0 group-hover:scale-105 transition">

                            <div class="text-center">

                                <div class="text-6xl mb-2">
                                    📄
                                </div>

                                <span class="text-red-600 font-bold text-sm">
                                    PDF
                                </span>

                            </div>

                        </div>

                        <div>

                            <div class="flex items-center gap-3 text-gray-500 mb-5">

                                <span class="text-xl">
                                    ⬇️
                                </span>

                                <span class="font-semibold">
                                    39 Unduhan
                                </span>

                            </div>

                            <h3 class="text-3xl font-black leading-tight mb-5">

                                Peraturan Menteri Pertanian
                                Nomor 64 Tahun 2013

                            </h3>

                            <p class="text-gray-600 leading-relaxed">

                                Tentang Sistem
                                Pertanian Organik.

                            </p>

                        </div>

                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-10">

                        <button
                            class="h-14 rounded-2xl border-2 border-green-600 text-green-700 font-bold hover:bg-green-50 transition"
                        >

                            Detail

                        </button>

                        <a
                            href="#"
                            class="h-14 rounded-2xl bg-gradient-to-r from-green-600 to-green-700 text-white font-bold flex items-center justify-center shadow-lg hover:scale-[1.03] transition"
                        >

                            Unduh

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

        <!-- PRODUK ORGANIK -->
        <div class="mt-24" data-aos="fade-up">

            <div class="mb-14">

                <span class="uppercase tracking-[0.3em] text-green-600 font-semibold">
                    Organic Products
                </span>

                <h2 class="text-4xl font-bold mt-4 mb-6">
                    Produk Pertanian Organik
                </h2>

                <p class="text-gray-600 text-lg max-w-4xl leading-relaxed">

                    Temukan berbagai produk pertanian organik berkualitas tinggi
                    hasil karya petani lokal Jawa Barat.

                </p>

            </div>

            <div class="grid lg:grid-cols-2 gap-10">

                <!-- CARD -->
                <div
                    class="group bg-white rounded-[40px] overflow-hidden shadow-xl hover:-translate-y-2 transition duration-500"
                >

                    <div class="h-72 bg-gradient-to-br from-green-200 to-green-400 flex items-center justify-center text-7xl">

                        🌾

                    </div>

                    <div class="p-10">

                        <h3 class="text-3xl font-bold mb-5">
                            Agrospora Pringkasap
                        </h3>

                        <p class="text-gray-600 leading-relaxed mb-8">

                            Beras organik berkualitas tinggi yang diproduksi
                            tanpa bahan kimia dan telah memiliki sertifikasi organik.

                        </p>

                        <a
                            href="https://instagram.com"
                            target="_blank"
                            class="inline-flex items-center gap-3 text-green-700 font-bold text-lg hover:gap-5 transition-all"
                        >

                            Selengkapnya →

                        </a>

                    </div>

                </div>

                <!-- CARD -->
                <div
                    class="group bg-white rounded-[40px] overflow-hidden shadow-xl hover:-translate-y-2 transition duration-500"
                >

                    <div class="h-72 bg-gradient-to-br from-lime-200 to-green-500 flex items-center justify-center text-7xl">

                        🌱

                    </div>

                    <div class="p-10">

                        <h3 class="text-3xl font-bold mb-5">
                            Sarinah Agro Mandiri
                        </h3>

                        <p class="text-gray-600 leading-relaxed mb-8">

                            Menyediakan berbagai pilihan beras organik
                            berkualitas dengan standar terbaik.

                        </p>

                        <a
                            href="https://instagram.com"
                            target="_blank"
                            class="inline-flex items-center gap-3 text-green-700 font-bold text-lg hover:gap-5 transition-all"
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
