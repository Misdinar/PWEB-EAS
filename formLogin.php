<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login E-Sekolah</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
    <div class="container-fluid py-5 mx-auto px-5">
        <div class="card border-0">
            <div class="row d-flex">
                <div class ="col-lg-6">
                    <div class="pb-1">
                        <div class="row">
                            <img class="logo" src="img/logo.png" alt="logo">
                        </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 borderline">
                            <img class="image" src="img/13113.jpg" alt="ilustrasi">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <h1 class="row mb-4 px-3 text-center">Welcome to E-Sekolah</h1>                            
                        <div class="row px-3 mb-4">
                            <div class="line"></div>
                        </div>
                        <form action="login.php" method="post">
                            <div class="row px-3">
                                <label for="user" class="mb-1">
                                    <h6 class="mb-0 text-sm">Username Anda</h6>
                                </label>
                                <input type="text" name="user" id="user" class="mb-4" placeholder="Masukkan username anda!" required>
                            </div>
                            <div class="row px-3">
                                <label for="password" class="mb-1">
                                    <h6 class="mb-0 text-sm">Password Anda</h6>
                                </label>
                                <input type="password" name="password" id="password" class="mb-4" placeholder="Masukkan password anda!" required>
                            </div>
                            <div class="row mb-3 px-3">
                                <button type="submit" class="btn btn-blue text-center" name="login" id="login" value="login">Login</button>
                            </div>
                        </form>
                        <div class="row px-3 mb-4">
                                <a href="https://wa.me/6285247944248?text=Saya%20ingin%20membuat%20akun%20E-Sekolah" class="ml-auto mb-0 text-sm">Belum punya akun? Hubungi admin!</a>
                                
                        </div>
                        <div class="row px-3 mb-4">
                                <a href="https://pwebeas.000webhostapp.com/tryjadwal/formLogin.php" class="ml-auto mb-0 text-sm">Login sebagai Siswa!</a>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-1">
        <center>
            <small class="ml-4 text-white">
                Copyright &copy; YPVDP 2021 All rights reserved.
            </small>
        </center>
    </div>
</body>
</html>