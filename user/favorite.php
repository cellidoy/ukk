<?php
	session_start();
	if($_SESSION['level']==""){
		header("location:../login.php");
  }elseif($_SESSION['level'] == "admin"){
    header("location:../index.php");
  }elseif($_SESSION['level'] == "petugas"){
    header("location:../index.php");
  }
include '../koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
     <link rel="icon" href="assets/img/perpus.png">
    <title>Koleksi</title>
     <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">
  <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body{
        background-image: url('');
        background-repeat: no-repeat;
        background-size: cover;
      }
      
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
    <link href="../assets/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <form action="">
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">PERPUSTAKAAN SMK MW9</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="btn btn-danger" href="../logout.php">Keluar</a>
    </li>
  </ul>
</nav>
</form>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="buku.php">
              <span data-feather="calendar"></span>
              Buku
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pinjam.php">
              <span data-feather="layers"></span>
              Peminjaman
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="favorite.php">
              <span data-feather="plus-circle"></span>
              Koleksi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ulasan.php">
              <span data-feather="feather"></span>
              Ulasan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="anggota.php">
              <span data-feather="users"></span>
              Anggota
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Koleksi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          <img src="../assets/img/favorite.gif" style="width: 100px; border-radius: 50%;">
          </div>

        </div>
      </div>


      
      <h2 align="center">Koleksi Anda</h2>
      <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
            <th bgcolor="white">No</th>
            <th bgcolor="white">Gambar</th>
            <th bgcolor="white">Judul</th>
            <th bgcolor="white">Penulis</th>
            <th bgcolor="white">Penerbit</th>
            <th bgcolor="white">Tahun Terbit</th>
            <th bgcolor="white">Aksi</th>
        </thead>
        <tbody>
            <?php
            $id = $_SESSION['userid'];
            $result = mysqli_query($connect,"SELECT * FROM koleksipribadi LEFT JOIN user ON user.userid = koleksipribadi.userid LEFT JOIN buku ON buku.bukuid = koleksipribadi.bukuid WHERE koleksipribadi.userid='$id'");
            $no = 1;
            while ($favorite=mysqli_fetch_array($result)) {
                $buku_id = $favorite['bukuid'];
                $judul = $favorite['judul'];
                $penulis = $favorite['penulis'];
                $penerbit = $favorite['penerbit'];
                $tahun = $favorite['tahunterbit'];
            ?>
            <tr>
            <td><?php echo $no++?></td>
            <td><img src="<?php echo $favorite['gambar']; ?>" alt="Gambar Buku" style="width: 80px;"></td>
            <td><?php echo $judul?></td>
            <td><?php echo $penulis?></td>
            <td><?php echo $penerbit?></td>
            <td><?php echo $tahun?></td>
            <td><a class="btn btn-success" href="lihat.php?id=<?php echo $favorite['bukuid']; ?>">Lihat</a>
                <a class="btn btn-danger" href="hapus-favorite.php?id=<?php echo $favorite['koleksiid']; ?>">Hapus</a>
            </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/js/bootstrap.bundle.min.js"></script>

      
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="../assets/js/dashboard.js"></script>
  </body>
</html>
