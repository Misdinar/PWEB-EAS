<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="tempat-lahir">tempat lahir: </label>
            <textarea name="tempat-lahir"><?php echo $siswa['tempat_lahir'] ?></textarea>
        </p>

        <p>
            <label for="tanggal-lahir">tanggal lahir: </label>
            <input type="date" id="birthday" name="birthday" value= "<?php echo $siswa['tanggal_lahir'] ?>">
            
        </p>


        <p>
            <label for="kelas">kelas: </label>
            <textarea name="kelas"><?php echo $siswa['kelas'] ?></textarea>
        </p>
       
       
       
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>