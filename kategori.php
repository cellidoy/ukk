<!doctype html>
<html lang="en">
  <head>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">
    <!-- Bootstrap core CSS -->
     <link rel="icon" href="assets/img/perpus.png">
    <title>Tambah Buku</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<form class="form-signin" action="kategori-proses.php" method="post">
  <img class="mb-4" src="../assets/img/logo_buku.jpg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Tambahkan Kategori Baru</h1>
  <label for="inputEmail" class="sr-only">Nama Kategori</label>
  <input type="text" id="inputEmail" class="form-control" placeholder="Nama Kategori" name="kategori" required>
  <div class="checkbox mb-3">
  </div>
  <button class="btn btn-lg btn-success btn-block" type="submit" required>Tambah</button>
  <br>
  <a href="buku.php" class="btn btn-lg btn-primary"><< Kembali</a>
</form>


    
  </body>
</html>