<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Salman MM Teknik</title>
    @vite('resources/css/app.css')
    <style>
        /* Custom style untuk menyesuaikan detail gambar */
        .nav-link {
            @apply text-green-100 hover:text-white transition font-medium;
        }
        .nav-link.active {
            @apply font-bold text-white;
        }
        .layanan-icon {
            @apply flex items-center justify-center mb-3;
        }
    </style>
</head>
<body class="bg-[#f0f7ef] text-green-900 font-sans">
    <!-- Header -->
    <header class="bg-green-800 text-white px-8 py-3 flex justify-between items-center border-b border-green-900/10">
        <div class="flex items-center gap-4">
            <div class="w-10 h-10 rounded-full overflow-hidden bg-white flex items-center justify-center">
                <img src="/images/LogoKabinet.png" alt="Logo Kabinet" class="object-contain w-full h-full" />
            </div>
            <div>
                <h1 class="text-xl font-bold leading-tight">SALMAN MM TEKNIK</h1>
                <p class="text-xs leading-none">Salam Persaudaraan Mahasiswa Muslim Teknik</p>
            </div>
        </div>
        <nav class="space-x-8 text-base flex items-center">
            <a href="#" class="nav-link active"><b>Beranda</b></a>
            <a href="/inventaris-guest" class="nav-link">Inventaris</a>
            <a href="/tentang" class="nav-link">Tentang</a>
            <a href="#" class="nav-link">Kontak</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="flex flex-col md:flex-row items-center justify-center px-8 py-16 gap-16">
        <div class="flex items-center justify-center overflow-hidden">
            <img src="/images/LogoSalman.png" alt="Logo Salman" class="object-contain w-[340px] h-[340px]" />
        </div>
        <div class="max-w-md min-w-[380px]">
            <h2 class="text-6xl font-extrabold mb-2 leading-tight whitespace-nowrap">Selamat Datang</h2>
            <p class="text-xl mb-3 leading-tight">di Website SALMAN</p>
            <p class="text-green-600 font-bold text-lg mb-2">Salam Persaudaraan Mahasiswa Muslim</p>
            <p class="text-base text-green-900/80 mb-8">
                Bergabunglah dengan komunitas mahasiswa muslim yang berkomitmen membangun persaudaraan dan mengembangkan potensi diri.
            </p>
            <a href="#" class="inline-flex items-center gap-3 bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-8 rounded-full shadow-md text-lg transition">
                Kontak Kami
                <span class="inline-flex items-center justify-center w-7 h-7 bg-green-700 rounded-full ml-2">
                    <svg width="18" height="18" fill="none" viewBox="0 0 18 18"><path d="M7 13l5-4-5-4" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
            </a>
        </div>
    </section>

    <!-- Layanan -->
    <section class="bg-white py-14">
        <h3 class="text-center text-2xl font-extrabold mb-14 text-green-800" style="letter-spacing:-1px;">Layanan Kami</h3>
        <div class="flex justify-center gap-4 px-4 flex-wrap">
            <!-- Card 1 -->
            <div class="border-4 border-green-400 rounded-2xl bg-[#ecf6ec] p-5 w-60 flex flex-col justify-center transition-shadow duration-200 hover:shadow-lg">
                <div class="flex items-start gap-3">
                    <span class="mt-1">
                        <!-- Ikon inventaris -->
                        <svg width="40" height="40" fill="none" viewBox="0 0 48 48"><rect x="8" y="14" width="32" height="20" rx="4" fill="#5BA14A"/><rect x="14" y="10" width="12" height="8" rx="2" fill="#5BA14A"/><rect x="14" y="18" width="20" height="3" rx="1.5" fill="#fff"/><rect x="14" y="23" width="12" height="3" rx="1.5" fill="#fff"/><rect x="14" y="28" width="8" height="3" rx="1.5" fill="#fff"/></svg>
                    </span>
                    <div>
                        <div class="text-green-800 font-extrabold text-base leading-tight mb-2">Sistem<br>Inventaris</div>
                        <div class="text-gray-600 text-xs leading-snug mt-2">Kelola aset dan barang<br>organisasi dengan mudah</div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="border-4 border-green-400 rounded-2xl bg-[#ecf6ec] p-5 w-60 flex flex-col justify-center transition-shadow duration-200 hover:shadow-lg">
                <div class="flex items-start gap-3">
                    <span class="mt-1">
                        <!-- Ikon profil organisasi -->
                        <svg width="40" height="40" fill="none" viewBox="0 0 48 48"><circle cx="24" cy="24" r="12" fill="#5BA14A"/><circle cx="24" cy="24" r="6" fill="#fff"/></svg>
                    </span>
                    <div>
                        <div class="text-green-800 font-extrabold text-base leading-tight mb-2">Profil<br>Organisasi</div>
                        <div class="text-gray-600 text-xs leading-snug mt-2">Visi, misi, dan struktur<br>kepengurusan SALMAN</div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="border-4 border-green-400 rounded-2xl bg-[#ecf6ec] p-5 w-60 flex flex-col justify-center transition-shadow duration-200 hover:shadow-lg">
                <div class="flex items-start gap-3">
                    <span class="mt-1">
                        <!-- Ikon komunitas muslim -->
                        <svg width="40" height="40" fill="none" viewBox="0 0 48 48"><ellipse cx="16" cy="24" rx="8" ry="8" fill="#5BA14A"/><ellipse cx="32" cy="24" rx="8" ry="8" fill="#5BA14A"/><ellipse cx="24" cy="24" rx="8" ry="8" fill="#5BA14A"/></svg>
                    </span>
                    <div>
                        <div class="text-green-800 font-extrabold text-base leading-tight mb-2">Komunitas<br>Muslim</div>
                        <div class="text-gray-600 text-xs leading-snug mt-2 whitespace-nowrap">Jaringan mahasiswa muslim</div>
                        <div class="text-gray-600 text-xs leading-snug">yang saling mendukung</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-800 text-white py-4 text-center text-sm border-t border-green-900/10">
        <div class="flex flex-col md:flex-row justify-between items-center max-w-5xl mx-auto px-4">
            <div>© 2025 SALMAN - Salam Persaudaraan Mahasiswa Muslim</div>
            <div class="text-green-300 mt-1 md:mt-0">Membangun Persaudaraan</div>
        </div>
    </footer>
</body>
</html>
