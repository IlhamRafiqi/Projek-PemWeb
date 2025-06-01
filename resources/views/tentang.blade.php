<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Salman MM Teknik - Tentang</title>
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        .nav-link {
            @apply text-green-100 hover:text-white transition font-medium;
        }
        .nav-link.active {
            @apply font-bold text-white;
        }
        /* Contoh CSS untuk transisi pudar (fade) */
        .transition-fade {
            opacity: 1;
            transition: opacity 0.25s ease-in-out; /* Sesuaikan durasi dan timing function */
        }

        html.is-animating .transition-fade {
            opacity: 0;
        }
    </style>
</head>
<body class="bg-white text-green-900 font-sans pt-16">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });
        });
    </script>

    <!-- Header -->
    <header class="bg-green-800 text-white px-8 py-3 flex justify-between items-center border-b border-green-900/10 fixed top-0 left-0 w-full z-20">
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
            <a href="/" class="nav-link">Beranda</a>
            <a href="/inventaris-guest" class="nav-link">Inventaris</a>
            <a href="/tentang" class="nav-link active"><b>Tentang</b></a>
            <a href="/kontak" class="nav-link">Kontak</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="relative h-[400px] flex items-center justify-center">
        <div class="absolute inset-0">
            <img src="/images/SalmanPengurus.jpg" alt="Hero Background" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black/50"></div>
        </div>
        <div class="relative z-10 text-center text-white" data-aos="fade-up">
            <h2 class="text-5xl font-extrabold mb-4">Tentang Kami</h2>
            <p class="text-xl">Mengenal Lebih Dekat Organisasi Salam Persaudaraan Mahasiswa Muslim</p>
        </div>
    </section>

    <!-- Section Penjelasan -->
    <section class="bg-[#e3f0e0] py-16">
        <div class="max-w-5xl mx-auto px-8">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="flex-1" data-aos="fade-right">
                    <h3 class="text-3xl font-extrabold mb-6 text-green-800">Apa itu Salman MM Teknik?</h3>
                    <p class="text-green-900/80 leading-relaxed mb-6">
                        SALMAN MM Teknik adalah organisasi mahasiswa muslim yang berfokus pada pengembangan potensi mahasiswa teknik. Kami berkomitmen untuk membangun persaudaraan yang kuat dan mengembangkan kemampuan teknis serta spiritual mahasiswa.
                    </p>
                    <p class="text-green-900/80 leading-relaxed">
                        Melalui berbagai program dan kegiatan, kami berusaha menciptakan lingkungan yang mendukung untuk pengembangan diri dan kontribusi positif bagi masyarakat.
                    </p>
                </div>
                <div class="flex-1 flex justify-center" data-aos="fade-left">
                    <img src="/images/LogoSalman.png" alt="Logo Salman" class="w-64 h-64 object-contain" />
                </div>
            </div>
        </div>
    </section>

    <!-- Section Visi dan Misi -->
    <section class="py-16">
        <div class="max-w-5xl mx-auto px-8">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Visi -->
                <div class="bg-white rounded-2xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-2xl font-extrabold mb-6 text-green-800">Visi</h3>
                    <p class="text-green-900/80 leading-relaxed">
                        Menjadi organisasi mahasiswa muslim yang unggul dalam pengembangan potensi teknik dan spiritual, serta berkontribusi positif bagi masyarakat.
                    </p>
                </div>
                <!-- Misi -->
                <div class="bg-white rounded-2xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-2xl font-extrabold mb-6 text-green-800">Misi</h3>
                    <ul class="text-green-900/80 leading-relaxed space-y-3">
                        <li>1. Membangun persaudaraan yang kuat antar mahasiswa muslim teknik</li>
                        <li>2. Mengembangkan kemampuan teknis dan spiritual mahasiswa</li>
                        <li>3. Menciptakan program yang bermanfaat bagi masyarakat</li>
                        <li>4. Menjalin kerjasama dengan berbagai pihak untuk pengembangan organisasi</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Struktur Kepengurusan -->
    <section class="bg-[#e3f0e0] py-16">
        <div class="max-w-5xl mx-auto px-8">
            <h3 class="text-3xl font-extrabold mb-12 text-green-800 text-center" data-aos="fade-up">Struktur Kepengurusan</h3>
            <div class="flex justify-center" data-aos="zoom-in">
                <img src="/images/strukturpengurus.png" alt="Struktur Kepengurusan" class="max-w-4xl w-full rounded-lg shadow-lg" />
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-800 text-white py-4 text-center text-sm border-t border-green-900/10">
        <div class="flex flex-col md:flex-row justify-between items-center max-w-5xl mx-auto px-4">
            <div>© 2025 SALMAN - Sistem Inventaris</div>
            <div class="text-green-300 mt-1 md:mt-0">Total Aset: Rp 45.500.000</div>
        </div>
    </footer>
</body>
</html> 