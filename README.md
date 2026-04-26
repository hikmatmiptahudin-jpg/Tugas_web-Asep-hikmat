# Tugas Lab Pemrograman Web: Portofolio Digital (V2 - Database Integrated)

## Deskripsi Proyek
Proyek ini adalah pengembangan dari tugas portofolio digital sebelumnya. Pada versi ini, aplikasi telah diintegrasikan dengan **database MySQL** menggunakan **PHP** untuk mengelola data mata kuliah secara dinamis.

### Identitas Mahasiswa
- **Nama**: Asep Hikmat Miptahudin
- **NIM**: 2430511015
- **Kelas**: 4A
- **Instansi**: Teknik Informatika UMMI

### Fitur Utama & Pembaruan
- **Dynamic Table**: Data mata kuliah kini diambil langsung dari database MySQL menggunakan query PHP.
- **Tambah Data (Insert)**: Fitur baru untuk menambahkan mata kuliah dan statusnya langsung ke database melalui form di halaman web.
- **Dark Mode**: Fitur interaktif untuk mengubah tema tampilan kartu secara dinamis (JavaScript).
- **Responsive Design**: Tampilan tetap optimal di perangkat mobile maupun desktop.

### Teknologi yang Digunakan
- **PHP**: Backend processing dan pengolahan logika database.
- **MySQL**: Penyimpanan data mata kuliah secara permanen.
- **HTML5 & CSS3**: Struktur halaman dan desain antarmuka (UI).
- **JavaScript**: Manipulasi DOM untuk interaksi mode gelap dan update nama.

### Cara Menjalankan Secara Lokal
1. Aktifkan **Apache** dan **MySQL** pada panel kontrol Laragon/XAMPP.
2. Buat database bernama `db_portofolio` melalui phpMyAdmin.
3. Buat tabel `mata_kuliah` dengan struktur: `id` (INT, AI), `nama_matkul` (VARCHAR), dan `status_matkul` (VARCHAR).
4. Pastikan file `koneksi.php` sudah sesuai dengan pengaturan database lokal Anda.
5. Akses melalui browser di alamat `http://localhost/tugas_pemrograman/`.

