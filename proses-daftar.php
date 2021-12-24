<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nis = $_POST['nis'];
    $pwd = md5($_POST['nama']);
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat-lahir'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $kelas = $_POST['kelas'];
    $tanggal_lahir = $_POST['tanggal-lahir'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    // Rename nama fotonya dengan menambahkan tanggal dan jam upload
    $fotobaru = date('dmYHis').$foto;

    // Set path folder tempat menyimpan fotonya
    $path = "images/".$fotobaru;

    if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak

    // buat query Proses simpan ke Database
    $sql = "INSERT INTO siswa (nis, nama, agama, jenis_kelamin, tempat_lahir, tanggal_lahir, kelas, foto, password)
        VALUE ('$nis', '$nama', '$agama', '$jk', '$tempat_lahir', '$tanggal_lahir', '$kelas', '$path', '$pwd')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php');
    }
    }
} else {
    die("Akses dilarang...");
}


?>