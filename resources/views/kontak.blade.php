<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Salman MM Teknik - Kontak</title>
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
<body class="bg-[#eaf4e6] text-green-900 font-sans pt-16"> {{-- Menggunakan background hijau muda dari gambar dan padding top untuk fixed header --}}
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
    <header class="bg-green-800 text-white px-8 py-3 flex justify-between items-center border-b border-green-900/10 fixed top-0 left-0 w-full z-20"> {{-- Header fixed --}}
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
            <a href="/tentang" class="nav-link">Tentang</a>
            <a href="/kontak" class="nav-link active"><b>Kontak</b></a> {{-- Link Kontak aktif --}}
        </nav>
    </header>

    <!-- Section Kontak -->
    <section class="max-w-5xl mx-auto px-8 py-16">
        <div class="bg-[#f0f7ef] border-4 border-green-400 rounded-3xl p-10 text-center" data-aos="fade-up"> {{-- Kontainer utama kontak --}}
            <h2 class="text-3xl font-extrabold mb-2 text-green-800">Hubungi Kami</h2>
            <p class="text-green-700 text-lg font-medium mb-10">Kami siap membantu kebutuhan teknik dan persaudaraan Anda</p>

            <div class="flex flex-col md:flex-row gap-8 justify-center items-start">
                <!-- Informasi Kontak -->
                <div class="flex-1 space-y-6 w-full md:w-auto">
                    {{-- Item Telepon --}}
                    <div class="bg-white rounded-xl p-6 flex items-center gap-4 transition-all duration-300 hover:shadow-lg hover:scale-105" data-aos="fade-right" data-aos-delay="100">
                        <div class="flex-shrink-0 w-10 h-10 bg-[#eaf4e6] rounded-full flex items-center justify-center text-green-800">
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path d="M18.364 5.636a9 9 0 010 12.728m-2.828-9.9a5 5 0 010 7.07m-12.021-4.243a1 1 0 010-1.414l3.535-3.536a1 1 0 000-1.414l1.768-1.768a1 1 0 00-1.414-1.414l-1.768 1.768a4 4 0 000 5.657l3.536 3.535a4 4 0 005.656 0l1.768-1.768a1 1 0 00-1.414-1.414l-1.768 1.768a5 5 0 01-7.071 0l-3.535-3.536z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-green-800">Telepon</div>
                            <div class="text-green-900">+62 21 1234 5678</div>
                        </div>
                    </div>
                    {{-- Item Email --}}
                    <div class="bg-white rounded-xl p-6 flex items-center gap-4 transition-all duration-300 hover:shadow-lg hover:scale-105" data-aos="fade-right" data-aos-delay="200">
                        <div class="flex-shrink-0 w-10 h-10 bg-[#eaf4e6] rounded-full flex items-center justify-center text-green-800">
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24"><path d="M19 7.5L12 12L5 7.5M3 17V7C3 5.9 3.9 5 5 5H19C20.1 5 21 5.9 21 7V17C21 18.1 20.1 19 19 19H5C3.9 19 3 18.1 3 17Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-green-800">Email</div>
                            <div class="text-green-900">salman@mmteknik.org</div>
                        </div>
                    </div>
                    {{-- Item Alamat --}}
                    <div class="bg-white rounded-xl p-6 flex items-center gap-4 transition-all duration-300 hover:shadow-lg hover:scale-105" data-aos="fade-right" data-aos-delay="300">
                         <div class="flex-shrink-0 w-10 h-10 bg-[#eaf4e6] rounded-full flex items-center justify-center text-green-800">
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24"><path d="M12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 21C15.5 17.8 19 14.5 19 11C19 6.58172 15.866 3 12 3C8.13401 3 5 6.58172 5 11C5 14.5 8.5 17.8 12 21Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-green-800">Alamat</div>
                            <div class="text-green-900">Gedung Salman ITB<br>Jl. Ganesha No. 7<br>Bandung, Jawa Barat</div>
                        </div>
                    </div>
                </div>

                <!-- Form Kirim Pesan -->
                <div class="flex-1 bg-white rounded-xl p-6 w-full md:w-auto transition-all duration-300 hover:shadow-lg" data-aos="fade-left" data-aos-delay="200">
                    <h4 class="font-bold text-green-800 mb-4">Kirim Pesan</h4>
                    <form class="space-y-4">
                        <div>
                            <label for="nama_lengkap" class="sr-only">Nama Lengkap</label>
                            <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" class="w-full border border-green-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400 text-green-900 placeholder-green-700/60 transition-all duration-300 hover:border-green-400">
                        </div>
                        <div>
                            <label for="alamat_email" class="sr-only">Alamat Email</label>
                            <input type="email" id="alamat_email" name="alamat_email" placeholder="Alamat Email" class="w-full border border-green-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400 text-green-900 placeholder-green-700/60 transition-all duration-300 hover:border-green-400">
                        </div>
                        <div>
                            <label for="pesan_anda" class="sr-only">Pesan Anda...</label>
                            <textarea id="pesan_anda" name="pesan_anda" rows="4" placeholder="Pesan Anda..." class="w-full border border-green-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400 text-green-900 placeholder-green-700/60 transition-all duration-300 hover:border-green-400"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 rounded-md transition-all duration-300 hover:scale-105 transform">Kirim</button>
                        </div>
                    </form>
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