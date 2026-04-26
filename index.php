<?php
// 1. Koneksi ke Database
include "koneksi.php";

// 2. Logika Tambah Mata Kuliah (INSERT ke Database)
if (isset($_POST['tambah_matkul'])) {
    $nama = htmlspecialchars($_POST['nama_matkul']);
    $status = htmlspecialchars($_POST['status_matkul']);

    // Query SQL untuk menyimpan data
    $query_tambah = "INSERT INTO mata_kuliah (nama_matkul, status_matkul) VALUES ('$nama', '$status')";
    $hasil = mysqli_query($conn, $query_tambah);

    if ($hasil) {
        // Refresh halaman agar data baru langsung muncul di tabel
        echo "<script>alert('Mata Kuliah Berhasil Ditambahkan!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menambah data: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Lab Web - Teknik Informatika UMMI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Portofolio Mahasiswa</h1>
        <p>Teknik Informatika UMMI</p>
    </header>

    <main class="container">
        <section class="card">
            <img src="foto.jpg" alt="Foto Profil" class="profile-img">
            
            <h2 id="nama-user">Asep Hikmat Miptahudin</h2>
            
            <div class="identitas">
                <p><strong>NIM:</strong> 2430511015</p>
                <p><strong>Kelas:</strong> 4A</p>
                <p><strong>Hobi:</strong> Otomotif</p>
            </div>
            
            <p class="bio">Fullstack Developer Enthusiast</p>
            
            <div class="stats">
                <table>
                    <thead>
                        <tr>
                            <th>Mata Kuliah</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        // Mengambil data dari tabel mata_kuliah
                        $query_tampil = mysqli_query($conn, "SELECT * FROM mata_kuliah");
                        while($data = mysqli_fetch_assoc($query_tampil)) {
                        ?>
                        <tr>
                            <td><?php echo $data['nama_matkul']; ?></td>
                            <td><?php echo $data['status_matkul']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="form-tambah" style="margin-top: 20px; border-top: 1px dashed #ccc; padding-top: 15px; text-align: left;">
                <h4 style="margin-bottom: 10px;">Tambah Mata Kuliah Baru</h4>
                <form method="POST" action="">
                    <input type="text" name="nama_matkul" placeholder="Nama Mata Kuliah" required style="width: 100%; margin-bottom: 10px; padding: 8px;">
                    
                    <select name="status_matkul" style="width: 100%; margin-bottom: 10px; padding: 8px;">
                        <option value="Aktif">Aktif</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                    
                    <button type="submit" name="tambah_matkul" style="background-color: #27ae60; width: 100%; color: white; border: none; padding: 10px; border-radius: 5px; cursor: pointer;">
                        Simpan ke Database
                    </button>
                </form>
            </div>

            <hr style="margin: 20px 0; border: 0; border-top: 1px solid #eee;">

            <div class="form-update">
                <input type="text" id="input-nama" placeholder="Ketik nama baru...">
                <button id="btn-ubah-nama">Update Nama</button>
            </div>

            <button id="btn-interaksi">Ubah Mode Tampilan</button>
            
            <p id="pesan-log"></p>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 - Hikmat Miptahudin</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>