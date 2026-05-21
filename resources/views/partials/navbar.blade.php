<nav
    x-data="{ mobileMenu: false }"
    class="fixed top-0 left-0 w-full bg-white/90 backdrop-blur-xl shadow-sm z-50 border-b border-white/20"
>

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex items-center justify-between h-20">

            <!-- LOGO -->
            <a href="/" class="flex items-center gap-4">

                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center text-white text-2xl shadow-xl">
                    🌾
                </div>

                <div>

                    <h1 class="font-bold text-xl text-gray-900">
                        Distanhorti
                    </h1>

                    <p class="text-xs text-gray-500">
                        Provinsi Jawa Barat
                    </p>

                </div>

            </a>

            <!-- DESKTOP MENU -->
            <div class="hidden lg:flex items-center gap-10">

                <!-- TENTANG -->
                <div class="relative group">

                <button class="font-medium hover:text-green-600 transition">
                    Tentang Kami
                </button>

                <div class="absolute top-full left-0 pt-4 w-72 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">

                    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">

                        <a href="/sejarah" class="block px-6 py-4 hover:bg-green-50">
                            Sejarah
                        </a>

                        <a href="/struktur-organisasi" class="block px-6 py-4 hover:bg-green-50">
                            Struktur Organisasi
                        </a>

                        <a href="/tupoksi" class="block px-6 py-4 hover:bg-green-50">
                            Tugas Pokok dan Fungsi
                        </a>

                    </div>

                </div>

            </div>

                <!-- INFORMASI -->
                <div class="relative group">

                    <button class="font-medium hover:text-green-600 transition">
                        Informasi Publik
                    </button>

                    <div class="absolute top-full left-0 pt-4 w-72 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">

                    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">

                        <a href="/kontak-kami" class="block px-6 py-4 hover:bg-green-50">
                            Kontak Kami
                        </a>

                        <a href="/dokumen-kinerja" class="block px-6 py-4 hover:bg-green-50">
                            Dokumen Kinerja
                        </a>

                        <a href="https://instagram.com"
                           target="_blank"
                           class="block px-6 py-4 hover:bg-green-50">
                            Survey Kepuasan Masyarakat
                        </a>

                    </div>

                </div>

                </div>

                <!-- PPID -->
                <div class="relative group">

                    <button class="font-medium hover:text-green-600 transition">
                        PPID
                    </button>

                    <div class="absolute top-full left-0 pt-4 w-72 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">

                    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
                        <a href="/permohonan-informasi"
                           class="block px-6 py-4 hover:bg-green-50">

                            Permohonan Informasi

                        </a>

                        <a href="https://instagram.com"
                           target="_blank"
                           class="block px-6 py-4 hover:bg-green-50">

                            SP4N

                        </a>

                    </div>
                    </div>

                </div>

                <!-- LAYANAN -->
                <a href="#layanan"
                   class="font-medium hover:text-green-600 transition">

                    Layanan

                </a>

                <!-- PROGRAM -->
                <div class="relative group">

                    <button class="font-medium hover:text-green-600 transition">
                        Program
                    </button>

                    <div class="absolute top-full left-0 pt-4 w-72 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">

                    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">

                        <a href="/perda-organik"
                           class="block px-6 py-4 hover:bg-green-50">

                            Perda Pertanian Organik

                        </a>

                        <a href="https://instagram.com"
                           target="_blank"
                           class="block px-6 py-4 hover:bg-green-50">

                            Healthy Culture Run

                        </a>

                    </div>

                </div>

            </div>

            <!-- MOBILE BUTTON -->
            <button
                @click="mobileMenu = !mobileMenu"
                class="lg:hidden w-12 h-12 rounded-2xl bg-green-50 flex items-center justify-center text-2xl"
            >

                ☰

            </button>

        </div>

    </div>

    <!-- MOBILE MENU -->
    <div
        x-show="mobileMenu"
        x-transition
        class="lg:hidden bg-white border-t border-gray-100 shadow-2xl"
    >

        <div class="px-6 py-8 space-y-8 max-h-[80vh] overflow-y-auto">

            <!-- TENTANG -->
            <div>

                <h3 class="font-bold text-lg mb-4 text-green-700">
                    Tentang Kami
                </h3>

                <div class="space-y-3 ml-4">

                    <a href="/sejarah" class="block text-gray-600">
                        Sejarah
                    </a>

                    <a href="/struktur-organisasi" class="block text-gray-600">
                        Struktur Organisasi
                    </a>

                    <a href="/tupoksi" class="block text-gray-600">
                        Tugas Pokok dan Fungsi
                    </a>

                </div>

            </div>

            <!-- INFORMASI -->
            <div>

                <h3 class="font-bold text-lg mb-4 text-green-700">
                    Informasi Publik
                </h3>

                <div class="space-y-3 ml-4">

                    <a href="/kontak-kami" class="block text-gray-600">
                        Kontak Kami
                    </a>

                    <a href="/dokumen-kinerja" class="block text-gray-600">
                        Dokumen Kinerja
                    </a>

                    <a href="https://instagram.com"
                       target="_blank"
                       class="block text-gray-600">

                        Survey Kepuasan Masyarakat

                    </a>

                </div>

            </div>

            <!-- PPID -->
            <div>

                <h3 class="font-bold text-lg mb-4 text-green-700">
                    PPID
                </h3>

                <div class="space-y-3 ml-4">

                    <a href="/permohonan-informasi"
                       class="block text-gray-600">

                        Permohonan Informasi

                    </a>

                    <a href="https://instagram.com"
                       target="_blank"
                       class="block text-gray-600">

                        SP4N

                    </a>

                </div>

            </div>

            <!-- PROGRAM -->
            <div>

                <h3 class="font-bold text-lg mb-4 text-green-700">
                    Program
                </h3>

                <div class="space-y-3 ml-4">

                    <a href="/perda-organik"
                       class="block text-gray-600">

                        Perda Pertanian Organik

                    </a>

                    <a href="https://instagram.com"
                       target="_blank"
                       class="block text-gray-600">

                        Healthy Culture Run

                    </a>

                </div>

            </div>

        </div>

    </div>

</nav>
