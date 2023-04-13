<?php
// Mulai session
session_start();

// Proses form jika form telah di-submit
if(isset($_POST['submit'])){
    // Ambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

    // Simpan data ke dalam session
    $_SESSION['nama'] = $nama;
    $_SESSION['alamat'] = $alamat;
    $_SESSION['tanggal_lahir'] = $tanggal_lahir;
    $_SESSION['jenis_kelamin'] = $jenis_kelamin;
    $_SESSION['agama'] = $agama;

    // Redirect ke halaman lain
    header("Location: hasil_biodata.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Biodata dengan Session</title>
</head>
<body>
    <h1>Formulir Biodata dengan Session</h1>

    <form method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" required></textarea><br><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" required><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" id="jenis_kelamin_laki" required>
        <label for="jenis_kelamin_laki">Laki-laki</label>
        <input type="radio" name="jenis_kelamin" value="Perempuan" id="jenis_kelamin_perempuan" required>
        <label for="jenis_kelamin_perempuan">Perempuan</label><br><br>

        <label for="agama">Agama:</label>
        <select name="agama" id="agama" required>
            <option value="">- Pilih Agama -</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
        </select><br><br>

        <input type="submit" name="submit" value="Kirim">
    </form>
</body>
</html>
