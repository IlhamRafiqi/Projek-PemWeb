<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang - Sistem Inventaris</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#f8faf7] text-green-900 font-sans min-h-screen pt-16">
    <!-- Header -->
    <header class="bg-green-800 text-white px-8 py-3 flex justify-between items-center border-b border-green-900/10 fixed top-0 left-0 w-full z-10">
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
            <a href="/tentang" class="nav-link">Tentang</a>
            <a href="/kontak" class="nav-link">Kontak</a>
        </nav>
    </header>

    <main class="max-w-xl mx-auto bg-white rounded-xl shadow-lg mt-10 p-8">
        <h2 class="text-2xl font-bold text-green-800 mb-6 text-center">Tambah Barang Inventaris</h2>
        <form action="#" method="POST" class="space-y-5">
            <div>
                <label class="block mb-1 font-semibold" for="nama">Nama Barang</label>
                <input type="text" id="nama" name="nama" class="w-full border border-green-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400" required>
            </div>
            <div>
                <label class="block mb-1 font-semibold" for="kategori">Kategori</label>
                <select id="kategori" name="kategori" class="w-full border border-green-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400" required>
                    <option value="">Pilih Kategori</option>
                    <option value="Elektronik">Elektronik</option>
                    <option value="Audio">Audio</option>
                    <option value="Furniture">Furniture</option>
                    <option value="Ibadah">Ibadah</option>
                </select>
            </div>
            <div>
                <label class="block mb-1 font-semibold" for="kondisi">Kondisi</label>
                <select id="kondisi" name="kondisi" class="w-full border border-green-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400" required>
                    <option value="">Pilih Kondisi</option>
                    <option value="Baik">Baik</option>
                    <option value="Rusak">Rusak</option>
                </select>
            </div>
            <div>
                <label class="block mb-1 font-semibold" for="status">Status</label>
                <select id="status" name="status" class="w-full border border-green-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400" required>
                    <option value="">Pilih Status</option>
                    <option value="Tersedia">Tersedia</option>
                    <option value="Dipinjam">Dipinjam</option>
                </select>
            </div>
            <div>
                <label class="block mb-1 font-semibold" for="tempat">Tempat</label>
                <select id="tempat" name="tempat" class="w-full border border-green-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400" required>
                    <option value="">Pilih Tempat</option>
                    <option value="Sekre">Sekre</option>
                    <option value="Mastek">Mastek</option>
                </select>
            </div>
            <div>
                <label class="block mb-1 font-semibold" for="tanggal">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" class="w-full border border-green-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400" required>
            </div>
            <div>
                <label class="block mb-1 font-semibold" for="peminjam">Peminjam</label>
                <input type="text" id="peminjam" name="peminjam" class="w-full border border-green-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
            </div>
            <div class="pt-4">
                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 rounded-lg transition">Simpan</button>
            </div>
        </form>
    </main>
</body>
</html> 