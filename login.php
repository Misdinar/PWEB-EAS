<?php
    include_once "config.php";


    //ambil data dari form
    if($_POST){
        $username = $_POST['user'];
        $pwd = md5($_POST['password']);

        //buat sql untuk mengambil data dari tabel user
        //dengan kondisi username dan pwd
        $sql= "SELECT * FROM admin WHERE username='$username' AND pwd ='$pwd' LIMIT 1";

        //query ke db
        $query=mysqli_query($koneksi, $sql) or die("SQL ERROR, $sql");

        //ambil jumlah record hasil query
        $jmldata=mysqli_num_rows($query);

        //check jumlah data, jika >0 maka ada data dan login berhasil & sebaliknya
        if($jmldata > 0){
            //login berhasil
            //ambil data dan ubah ke array asosiatif
            $data=mysqli_fetch_assoc($query);

            //aktifkan session
            session_start();

            //buat variabel session
            $_SESSION['id']=session_id();

            //redirect ke Home.php
            header("location:index.php");
        }else{
            echo"<script> alert('login gagal, coba lagi!');
            window.location.assign('formLogin.php'); </script>";
        }

    }
?>