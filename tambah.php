<!doctype html>
<html lang="en">
  <head>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">
   <!-- Bootstrap core CSS -->
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
    <link rel="icon" href="assets/img/perpus.png">
    <title>Tambah Buku</title>
     <!-- Custom styles for this template -->
    <link href="../assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<form class="form-signin" action="tambah-proses.php" method="post" enctype="multipart/form-data">
  <img class="mb-4" src="../assets/img/buku.gif" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Tambahkan Buku Baru</h1>
  <select name="kategori" class="btn" style="color: #fff; background: #000000;" required>
  <?php
  include '../koneksi.php';
  $query = mysqli_query($connect,"SELECT * FROM kategoribuku");
  while($kategori=mysqli_fetch_array($query)){
  ?>
  <option value="<?php echo $kategori['kategoriid']; ?>" style="background-color: #fff; color: #343a40;"><?php echo $kategori['namakategori']; ?></option>
  <?php
    }
    ?>
  </select>
  <label for="inputGambar" class="sr-only">Gambar</label>
  <input type="file" id="inputGambar" name="gambar" accept=".png, .jpg, .jpeg" required>
  <label for="inputEmail" class="sr-only">Judul</label>
  <input type="text" id="inputEmail" class="form-control" placeholder="Judul" name="judul" required>
  <label for="inputEmail" class="sr-only">Penulis</label>
  <input type="text" id="inputEmail" class="form-control" placeholder="Penulis" name="penulis" required>
  <label for="inputEmail" class="sr-only">Penerbit</label>
  <input type="text" id="inputEmail" class="form-control" placeholder="penerbit" name="penerbit" required>
  <label for="inputEmail" class="sr-only">Tahun Terbit</label>
  <input type="number" id="inputEmail" class="form-control" placeholder="Tahun Terbit" name="tahun" required>
  <label for="inputEmail" class="sr-only">Stok</label>
  <input type="number" id="inputEmail" class="form-control" placeholder="Stok Buku" name="stok" required>
  <div class="checkbox mb-3">
  </div>
  <button class="btn btn-lg btn-success btn-block" type="submit" required>Simpan</button>
  <br>
  <a href="buku.php" class="btn btn-lg btn-primary"><< Kembali</a>
</form>


    
  </body>
</html>
