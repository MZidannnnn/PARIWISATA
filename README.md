# Web Pariwisata

Ini adalah proyek website pariwisata yang dikembangkan menggunakan PHP, CSS, Bootstrap, dan jQuery. Proyek ini mencakup beberapa fitur untuk mengelola paket wisata dan pemesanan.

### Fitur Utama:
1. **Halaman Beranda**:  
   - Menampilkan halaman utama dengan navigasi menu.
   - Menampilkan daftar paket wisata, gambar, deskripsi, dan video promosi dari YouTube.

2. **Form Pemesanan Paket Wisata**:  
   - Pengguna dapat melakukan pemesanan paket wisata melalui form yang tersedia.
   
3. **Modifikasi Pemesanan Paket Wisata**:  
   - Pengguna dapat mengedit dan menghapus pesanan wisata yang sudah dibuat.

### Teknologi yang Digunakan:
- **Front-end**: HTML, CSS, JavaScript, PHP, jQuery
- **Back-end**: PHP
- **Basis Data**: MariaDB (`wisata_db`)

### Aturan Validasi:
- Jika form pemesanan tidak lengkap, akan muncul pesan peringatan.
- Harga paket wisata dihitung berdasarkan jenis pelayanan yang dipilih, seperti:
  - Penginapan: Rp 1.000.000
  - Transportasi: Rp 1.200.000
  - Makanan: Rp 500.000
- Contoh Perhitungan:  
  Jika paket perjalanan untuk 2 hari dengan 2 peserta, dan memilih penginapan serta transportasi, maka:  
  Harga paket = 1.000.000 + 1.200.000 = 2.200.000  
  Total biaya = 2 hari x 2 peserta x 2.200.000 = 4.800.000

### Database
Nama database yang digunakan adalah `wisata_db`.  
- **File SQL**: File SQL terletak di dalam folder `database`.  
- **Cara Import SQL**: Sebelum mengimpor file SQL, buat terlebih dahulu database baru dengan nama `wisata_db`. Setelah itu, Anda bisa melakukan import pada file SQL yang disediakan.

### Login
Informasi login untuk masuk ke dalam sistem:  
- **Username**: `admin`  
- **Password**: `admin`

### Gambar Preview
Gambar-gambar preview halaman web tersedia di folder `perviewGambarWeb`.
