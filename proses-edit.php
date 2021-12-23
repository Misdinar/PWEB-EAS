<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$tempatlahir=$_POST['tempat-lahir'];
    $kelas=$_POST['kelas'];
	
	
	// buat query update
	$sql = "UPDATE siswa SET nama='$nama', tempat_lahir='$tempatlahir', kelas='$kelas' WHERE id=$id";
	$query = mysqli_query($koneksi, $sql);
	
	// apakah query update berhasil?

    // echo mysql_errno($koneksi) . ": " . mysql_error($koneksi). "\n";
    // echo $id.$nama.$tempatlahir.$kelas;
    // header('Location: index.php');

	if( $query ) {
		
		header('Location: index.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
// } else {
// 	die("Akses dilarang...");
}

?>