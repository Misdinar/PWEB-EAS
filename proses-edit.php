<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$id = $_POST['id'];
	$nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat-lahir'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $kelas = $_POST['kelas'];
    $tanggal_lahir = $_POST['tanggal-lahir'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

	// Cek apakah user ingin mengubah fotonya atau tidak
    if(empty($foto)){ // Jika user tidak memilih file foto pada form
    // Lakukan proses update tanpa mengubah fotonya
      $sql = "UPDATE siswa SET nis='$nis', nama='$nama', agama='$agama', jenis_kelamin='$jk', tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir', kelas='$kelas' WHERE id=$id";
      $query = mysqli_query($koneksi, $sql);
      // apakah query update berhasil?
      if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: index.php');
      } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
      }
    } else{ // Jika user memilih foto / mengisi input file foto pada form
      // Lakukan proses update termasuk mengganti foto sebelumnya
      // Rename nama fotonya dengan menambahkan tanggal dan jam upload
     
      $fotobaru = date('dmYHis').$foto;

    // Set path folder tempat menyimpan fotonya
      $path = "images/".$fotobaru;
      // buat query update
      if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak

        $sql = "SELECT foto FROM siswa WHERE id=$id";
        $query = mysqli_query($koneksi, $sql);
        $data = mysqli_fetch_array($query);

        if(is_file($data['foto'])) // Jika foto ada
        unlink($data['foto']); // Hapus file foto sebelumnya yang ada di folder images
    // buat query
    $sql = "UPDATE siswa SET nis='$nis', nama='$nama', agama='$agama', kelas='$kelas', jenis_kelamin='$jk', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', foto='$path' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: form-edit.php');
    }
    }
  }
}else {
    die("Akses dilarang...");
}
	
// 	// buat query update
// 	$sql = "UPDATE siswa SET nama='$nama', tempat_lahir='$tempatlahir', kelas='$kelas' WHERE id=$id";
// 	$query = mysqli_query($koneksi, $sql);
	
// 	// apakah query update berhasil?

//     // echo mysql_errno($koneksi) . ": " . mysql_error($koneksi). "\n";
//     // echo $id.$nama.$tempatlahir.$kelas;
//     // header('Location: index.php');

// 	if( $query ) {
		
// 		header('Location: index.php');
// 	} else {
// 		// kalau gagal tampilkan pesan
// 		die("Gagal menyimpan perubahan...");
// 	}
	
	
// // } else {
// // 	die("Akses dilarang...");
// }

// ?>