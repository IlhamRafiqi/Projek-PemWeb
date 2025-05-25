<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Inventaris - SALMAN</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#f8faf7] text-green-900 font-sans">
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
            <a href="/" class="nav-link">Beranda</a>
            <a href="/inventaris" class="nav-link active font-bold">Inventaris</a>
            <a href="#" class="nav-link">Tentang</a>
            <a href="#" class="nav-link">Kontak</a>
        </nav>
    </header>

    <!-- Subheader -->
    <section class="bg-[#eaf6e6] border-b border-green-200 py-6 px-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h2 class="text-3xl font-extrabold text-green-800 mb-1">Sistem Inventaris</h2>
            <p class="text-green-600 text-base font-medium">Manajemen Aset dan Barang Organisasi SALMAN</p>
        </div>
    </section>

    <!-- Filter & Tambah -->
    <section class="px-8 py-6 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div class="flex flex-1 gap-2 items-center">
            <input type="text" placeholder="Cari barang inventaris..." class="flex-1 border border-green-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400" />
            <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg flex items-center justify-center">
                <svg width="20" height="20" fill="none" viewBox="0 0 20 20"><circle cx="9" cy="9" r="7" stroke="white" stroke-width="2"/><path d="M15 15L18 18" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>
            </button>
        </div>
        <div class="flex gap-2 items-center">
            <button class="border border-green-400 text-green-800 bg-white px-4 py-2 rounded-lg flex items-center gap-2 font-semibold hover:bg-green-50 transition">
                Semua Kategori
                <svg width="18" height="18" fill="none" viewBox="0 0 18 18"><path d="M5 7l4 4 4-4" stroke="#4B7B3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
        </div>
        <div>
            <a href="/tambah-barang" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg font-semibold shadow-md block text-center">+ Tambah Barang</a>
        </div>
    </section>

    <!-- Statistik -->
    <section class="px-8 flex flex-wrap gap-4 mb-6">
        <div class="flex-1 min-w-[180px] bg-green-700 text-white rounded-xl flex flex-col items-center justify-center py-6">
            <div class="text-3xl font-extrabold">156</div>
            <div class="font-semibold mt-1">Total Barang</div>
            <div class="text-sm">Inventaris</div>
        </div>
        <div class="flex-1 min-w-[180px] border-2 border-green-400 rounded-xl flex flex-col items-center justify-center py-6">
            <div class="text-3xl font-extrabold text-green-700">124</div>
            <div class="font-semibold mt-1 text-green-700">Barang Tersedia</div>
            <div class="text-sm text-green-700">Siap Digunakan</div>
        </div>
        <div class="flex-1 min-w-[180px] border-2 border-green-400 rounded-xl flex flex-col items-center justify-center py-6">
            <div class="text-3xl font-extrabold text-orange-500">32</div>
            <div class="font-semibold mt-1 text-orange-500">Sedang Dipinjam</div>
            <div class="text-sm text-orange-500">Dalam Penggunaan</div>
        </div>
        <div class="flex-1 min-w-[180px] border-2 border-green-400 rounded-xl flex flex-col items-center justify-center py-6">
            <div class="text-3xl font-extrabold text-green-700">8</div>
            <div class="font-semibold mt-1 text-green-700">Perlu Perbaikan</div>
            <div class="text-sm text-green-700">Maintenance</div>
        </div>
    </section>

    <!-- Tabel -->
    <section class="px-8 pb-8">
        <div class="bg-white rounded-2xl border border-green-200 overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-green-700 text-white">
                        <th class="py-3 px-4 font-bold text-left whitespace-nowrap min-w-[80px]">KODE</th>
                        <th class="py-3 px-4 font-bold text-left min-w-[200px]">NAMA BARANG</th>
                        <th class="py-3 px-4 font-bold text-left min-w-[110px]">KATEGORI</th>
                        <th class="py-3 px-4 font-bold text-left min-w-[90px]">KONDISI</th>
                        <th class="py-3 px-4 font-bold text-left min-w-[110px]">STATUS</th>
                        <th class="py-3 px-4 font-bold text-left min-w-[90px]">TEMPAT</th>
                        <th class="py-3 px-4 font-bold text-left min-w-[110px]">TANGGAL</th>
                        <th class="py-3 px-4 font-bold text-left min-w-[120px]">PEMINJAM</th>
                        <th class="py-3 px-4 font-bold text-left whitespace-nowrap min-w-[80px]">AKSI</th>
                    </tr>
                </thead>
                <tbody class="text-green-900">
                    <tr class="border-b last:border-b-0">
                        <td class="py-3 px-4 font-bold text-green-700 whitespace-nowrap">SLM001</td>
                        <td class="py-3 px-4">Proyektor Epson EB-X41</td>
                        <td class="py-3 px-4">Elektronik</td>
                        <td class="py-3 px-4"><span class="inline-flex items-center gap-1"><span class="w-3 h-3 rounded-full bg-green-500"></span>Baik</span></td>
                        <td class="py-3 px-4 text-green-700">Tersedia</td>
                        <td class="py-3 px-4">Sekre</td>
                        <td class="py-3 px-4">20/05/2025</td>
                        <td class="py-3 px-4">-</td>
                        <td class="py-3 px-4 flex gap-2 whitespace-nowrap">
                            <button class="bg-green-100 hover:bg-green-200 text-green-700 p-2 rounded"><svg width="16" height="16" fill="none" viewBox="0 0 16 16"><path d="M3 13h10M6 10.5l4-4M10 10.5V6.5H6" stroke="#15803d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                            <button class="bg-red-500 hover:bg-red-600 text-white p-2 rounded"><svg width="16" height="16" fill="none" viewBox="0 0 16 16"><path d="M6 6v4m4-4v4M2 4h12M3 4v10a2 2 0 002 2h6a2 2 0 002-2V4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                        </td>
                    </tr>
                    <tr class="border-b last:border-b-0">
                        <td class="py-3 px-4 font-bold text-green-700 whitespace-nowrap">SLM002</td>
                        <td class="py-3 px-4">Sound System Portable</td>
                        <td class="py-3 px-4">Audio</td>
                        <td class="py-3 px-4"><span class="inline-flex items-center gap-1"><span class="w-3 h-3 rounded-full bg-green-500"></span>Baik</span></td>
                        <td class="py-3 px-4 text-orange-500">Dipinjam</td>
                        <td class="py-3 px-4">Sekre</td>
                        <td class="py-3 px-4">18/05/2025</td>
                        <td class="py-3 px-4">Ahmad Fauzi</td>
                        <td class="py-3 px-4 flex gap-2 whitespace-nowrap">
                            <button class="bg-green-100 hover:bg-green-200 text-green-700 p-2 rounded"><svg width="16" height="16" fill="none" viewBox="0 0 16 16"><path d="M3 13h10M6 10.5l4-4M10 10.5V6.5H6" stroke="#15803d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                            <button class="bg-red-500 hover:bg-red-600 text-white p-2 rounded"><svg width="16" height="16" fill="none" viewBox="0 0 16 16"><path d="M6 6v4m4-4v4M2 4h12M3 4v10a2 2 0 002 2h6a2 2 0 002-2V4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                        </td>
                    </tr>
                    <tr class="border-b last:border-b-0">
                        <td class="py-3 px-4 font-bold text-green-700 whitespace-nowrap">SLM003</td>
                        <td class="py-3 px-4">Kursi Lipat (Set 20 unit)</td>
                        <td class="py-3 px-4">Furniture</td>
                        <td class="py-3 px-4"><span class="inline-flex items-center gap-1"><span class="w-3 h-3 rounded-full bg-green-500"></span>Baik</span></td>
                        <td class="py-3 px-4 text-green-700">Tersedia</td>
                        <td class="py-3 px-4">Sekre</td>
                        <td class="py-3 px-4">15/05/2025</td>
                        <td class="py-3 px-4">-</td>
                        <td class="py-3 px-4 flex gap-2 whitespace-nowrap">
                            <button class="bg-green-100 hover:bg-green-200 text-green-700 p-2 rounded"><svg width="16" height="16" fill="none" viewBox="0 0 16 16"><path d="M3 13h10M6 10.5l4-4M10 10.5V6.5H6" stroke="#15803d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                            <button class="bg-red-500 hover:bg-red-600 text-white p-2 rounded"><svg width="16" height="16" fill="none" viewBox="0 0 16 16"><path d="M6 6v4m4-4v4M2 4h12M3 4v10a2 2 0 002 2h6a2 2 0 002-2V4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                        </td>
                    </tr>
                    <tr class="border-b last:border-b-0">
                        <td class="py-3 px-4 font-bold text-green-700 whitespace-nowrap">SLM004</td>
                        <td class="py-3 px-4">Microphone Wireless</td>
                        <td class="py-3 px-4">Audio</td>
                        <td class="py-3 px-4"><span class="inline-flex items-center gap-1"><span class="w-3 h-3 rounded-full bg-red-500"></span>Rusak</span></td>
                        <td class="py-3 px-4 text-red-500">Perbaikan</td>
                        <td class="py-3 px-4">Mastek</td>
                        <td class="py-3 px-4">10/05/2025</td>
                        <td class="py-3 px-4">-</td>
                        <td class="py-3 px-4 flex gap-2 whitespace-nowrap">
                            <button class="bg-green-100 hover:bg-green-200 text-green-700 p-2 rounded"><svg width="16" height="16" fill="none" viewBox="0 0 16 16"><path d="M3 13h10M6 10.5l4-4M10 10.5V6.5H6" stroke="#15803d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                            <button class="bg-red-500 hover:bg-red-600 text-white p-2 rounded"><svg width="16" height="16" fill="none" viewBox="0 0 16 16"><path d="M6 6v4m4-4v4M2 4h12M3 4v10a2 2 0 002 2h6a2 2 0 002-2V4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                        </td>
                    </tr>
                    <tr class="border-b last:border-b-0">
                        <td class="py-3 px-4 font-bold text-green-700 whitespace-nowrap">SLM005</td>
                        <td class="py-3 px-4">Meja Lipat Kayu</td>
                        <td class="py-3 px-4">Furniture</td>
                        <td class="py-3 px-4"><span class="inline-flex items-center gap-1"><span class="w-3 h-3 rounded-full bg-green-500"></span>Baik</span></td>
                        <td class="py-3 px-4 text-orange-500">Dipinjam</td>
                        <td class="py-3 px-4">Mastek</td>
                        <td class="py-3 px-4">12/05/2025</td>
                        <td class="py-3 px-4">Siti Nurhaliza</td>
                        <td class="py-3 px-4 flex gap-2 whitespace-nowrap">
                            <button class="bg-green-100 hover:bg-green-200 text-green-700 p-2 rounded"><svg width="16" height="16" fill="none" viewBox="0 0 16 16"><path d="M3 13h10M6 10.5l4-4M10 10.5V6.5H6" stroke="#15803d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                            <button class="bg-red-500 hover:bg-red-600 text-white p-2 rounded"><svg width="16" height="16" fill="none" viewBox="0 0 16 16"><path d="M6 6v4m4-4v4M2 4h12M3 4v10a2 2 0 002 2h6a2 2 0 002-2V4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-bold text-green-700 whitespace-nowrap">SLM006</td>
                        <td class="py-3 px-4">Karpet Sajadah (50 pcs)</td>
                        <td class="py-3 px-4">Ibadah</td>
                        <td class="py-3 px-4"><span class="inline-flex items-center gap-1"><span class="w-3 h-3 rounded-full bg-green-500"></span>Baik</span></td>
                        <td class="py-3 px-4 text-green-700">Tersedia</td>
                        <td class="py-3 px-4">Mastek</td>
                        <td class="py-3 px-4">08/05/2025</td>
                        <td class="py-3 px-4">-</td>
                        <td class="py-3 px-4 flex gap-2 whitespace-nowrap">
                            <button class="bg-green-100 hover:bg-green-200 text-green-700 p-2 rounded"><svg width="16" height="16" fill="none" viewBox="0 0 16 16"><path d="M3 13h10M6 10.5l4-4M10 10.5V6.5H6" stroke="#15803d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                            <button class="bg-red-500 hover:bg-red-600 text-white p-2 rounded"><svg width="16" height="16" fill="none" viewBox="0 0 16 16"><path d="M6 6v4m4-4v4M2 4h12M3 4v10a2 2 0 002 2h6a2 2 0 002-2V4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="flex items-center justify-between px-4 py-2 text-xs text-gray-600 border-t border-green-100">
                <div>Menampilkan 1-6 dari 156 barang</div>
                <div class="flex gap-1">
                    <button class="w-8 h-8 rounded bg-green-100 text-green-700 font-bold">1</button>
                    <button class="w-8 h-8 rounded hover:bg-green-100">2</button>
                    <button class="w-8 h-8 rounded hover:bg-green-100">3</button>
                    <span class="px-2">...</span>
                    <button class="w-8 h-8 rounded hover:bg-green-100">26</button>
                </div>
            </div>
        </div>
        <div class="flex justify-end mt-2 text-green-900 font-semibold text-sm">
            Total Aset: <span class="ml-1 text-green-700">Rp 45.500.000</span>
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