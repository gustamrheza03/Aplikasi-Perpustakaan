<?php
include "../../Proses/hakadmin.php";
?>
<?php
include '../../../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" href="../../Stisla/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../Stisla/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../../Stisla/assets/css/style.css">
  <link rel="stylesheet" href="../../Stisla/assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
        </form>
        <script type="text/javascript">
          var tampil = localStorage.getItem('id_user');
          var tampil2 = localStorage.getItem('username');
          console.log("Siapa nama orang yang login tadi : ", tampil2);
          console.log("Berapa id tersebut : ", tampil);
        </script>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../../Stisla/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><script type="text/javascript">document.write(tampil2);</script></div></a>
            <div class="dropdown-menu dropdown-menu-right">
             
              <div class="dropdown-divider"></div>
              <a href="../../../Proses/logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="../../Dashboard/dashboard.php" onclick="location.href=this.href+'?id_user='+tampil;return false;">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="../../Dashboard/dashboard.php" onclick="location.href=this.href+'?id_user='+tampil;return false;">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li class="active"><a class="nav-link" href="../../Dashboard/dashboard.php" onclick="location.href=this.href+'?id_user='+tampil;return false;">General Dashboard</a></li>
              </ul>
            </li>
            <li class="menu-header">Master Data</li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Menu</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="../../Siswa/index.php">Student</a></li>
                <li><a class="nav-link" href="../index.php">Book</a></li>
                <li><a class="nav-link" href="../../User/index.php">User</a></li>
                <li><a class="nav-link" href="../../Peminjam/index.php">Peminjam</a></li>
                <li><a class="nav-link" href="../../Petugas/index.php">Petugas</a></li>                
              </ul>
            </li>
            <li class="menu-header">Daftar Buku</li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Menu</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link beep beep-sidebar" href="../index.php">Semua</a></li>
              </ul>
            </li>                                    
            <li class="menu-header">Laporan</li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Menu</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link beep beep-sidebar" href="../../Transaksi/data_peminjaman.php">Data Peminjaman</a></li>
                <li><a class="nav-link beep beep-sidebar" href="../../Transaksi/data_pengembalian.php">Data Pengembalian</a></li>
              </ul>
            </li>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="http://www.smkjakartapusat1.sch.id/" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> SMK Jakarta Pusat 1
            </a>
          </div>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Article</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Components</a></div>
              <div class="breadcrumb-item">Article</div>
            </div>
          </div>

            <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link" href="../index.php">Semua <span class="badge badge-white">
                        <?php 
                        $query = "SELECT COUNT(*) AS jenis_buku FROM buku";
                        $exe = mysqli_query($conn,$query);
                        $bu = mysqli_fetch_array($exe);
                        ?>
                        <?php echo $bu['jenis_buku']; ?>                          
                        </span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../Novel/index.php">Novel <span class="badge badge-white">
                        <?php 
                        $query = "SELECT COUNT(*) AS jenis_buku FROM buku WHERE jenis_buku = 'Novel'";
                        $exe = mysqli_query($conn,$query);
                        $bu = mysqli_fetch_array($exe);
                        ?>
                        <?php echo $bu['jenis_buku']; ?>                          
                        </span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="index.php">Komik <span class="badge badge-white">
                        <?php 
                        $query = "SELECT COUNT(*) AS jenis_buku FROM buku WHERE jenis_buku = 'Komik'";
                        $exe = mysqli_query($conn,$query);
                        $bu = mysqli_fetch_array($exe);
                        ?>
                        <?php echo $bu['jenis_buku']; ?>
                        </span></a>
                      </li>      
                      <li class="nav-item">
                        <a class="nav-link" href="../Biografi/index.php">Biografi <span class="badge badge-white">
                        <?php 
                        $query = "SELECT COUNT(*) AS jenis_buku FROM buku WHERE jenis_buku = 'Biografi'";
                        $exe = mysqli_query($conn,$query);
                        $bu = mysqli_fetch_array($exe);
                        ?>
                        <?php echo $bu['jenis_buku']; ?>                          
                        </span></a>
                      </li>                                      
                      <li class="nav-item">
                        <a class="nav-link" href="../Dongeng/index.php">Dongeng <span class="badge badge-white">
                        <?php 
                        $query = "SELECT COUNT(*) AS jenis_buku FROM buku WHERE jenis_buku = 'Dongeng'";
                        $exe = mysqli_query($conn,$query);
                        $bu = mysqli_fetch_array($exe);
                        ?>
                        <?php echo $bu['jenis_buku']; ?>                          
                        </span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../Pemrograman/index.php">Pemrograman <span class="badge badge-white">
                        <?php 
                        $query = "SELECT COUNT(*) AS jenis_buku FROM buku WHERE jenis_buku = 'Pemrograman'";
                        $exe = mysqli_query($conn,$query);
                        $bu = mysqli_fetch_array($exe);
                        ?>
                        <?php echo $bu['jenis_buku']; ?>                          
                        </span></a>
                      </li>                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <div class="section-body">
            <div class="row">
              <?php 
              include '../../../koneksi.php';
              $query = "SELECT * FROM buku WHERE jenis_buku='Komik'";
              $exe = mysqli_query($conn,$query);
              $no=1;
          //proses menampilkan data
              while($rows=mysqli_fetch_object($exe)){
                ?>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                  <article class="article">
                    <div class="article-header">
                      <div class="article-image" data-background="../../Buku/file/<?=$rows->fileName?>">
                      </div>
                      <div class="article-title">
                        <h2><a href="#"><?=$rows->jenis_buku?></a></h2>
                      </div>
                    </div>
                    <div class="article-details">
                      <p>Judul: <?=$rows->judul?></p>
                      <p>Pengarang: <?=$rows->pengarang?></p>
                      <p>Penerbit: <?=$rows->penerbit?></p>
                      <div class="article-cta">
                        <a href="detail.php?id_buku=<?=$rows->id_buku?>" class="btn btn-primary">Read More</a>
                      </div>
                    </div>
                  </article>
                </div>
                <?php $no++; } ?>                  
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2019 <div class="bullet"></div>By <a href="http://www.smkjakartapusat1.sch.id/">Najwa</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../../Stisla/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <script src="../../Stisla/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="../../Stisla/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../Stisla/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
  <!-- Template JS File -->
  <script src="../../Stisla/assets/js/scripts.js"></script>
  <script src="../../Stisla/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../../Stisla/assets/js/page/modules-datatables.js"></script>  
</body>
</html>
