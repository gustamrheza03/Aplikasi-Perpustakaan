<?php
include "../Proses/hakadmin.php";
?>
<?php
include '../../koneksi.php';
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

  <link rel="stylesheet" href="../Stisla/node_modules/izitoast/dist/css/iziToast.min.css">
  <link rel="stylesheet" href="../Stisla/node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../Stisla/node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../Stisla/node_modules/fullcalendar/dist/fullcalendar.min.css">
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../Stisla/node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../Stisla/node_modules/weathericons/css/weather-icons.min.css">
  <link rel="stylesheet" href="../Stisla/node_modules/weathericons/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="../Stisla/node_modules/summernote/dist/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../Stisla/assets/css/style.css">
  <link rel="stylesheet" href="../Stisla/assets/css/components.css">
  <script src="../Stisla/node_modules/chart.js/dist/Chart.js"></script>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../Stisla/assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../Stisla/assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <?php 
        include '../../koneksi.php';
        $id_user = @$_GET['id_user'];
        $query = "SELECT * FROM user WHERE id_user='$id_user'";
        $exe = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($exe);
        ?>       
        <script type="text/javascript">
          var tampil = localStorage.getItem('id_user');
          var tampil2 = localStorage.getItem('username');
          console.log("Siapa nama orang yang login tadi : ", tampil2);
          console.log("Berapa id tersebut : ", tampil);
        </script>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../Stisla/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><script type="text/javascript">document.write(tampil2);</script></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title"></div>
              <div class="dropdown-divider"></div>
              <a href="../../proses/logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="dashboard.php" onclick="location.href=this.href+'?id_user='+tampil;return false;">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="dashboard.php" onclick="location.href=this.href+'?id_user='+tampil;return false;">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li class="active"><a class="nav-link" href="dashboard.php" onclick="location.href=this.href+'?id_user='+tampil;return false;">General Dashboard</a></li>
              </ul>
            </li>
            <li class="menu-header">Master Data</li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Menu</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="../Siswa/index.php">Student</a></li>
                <li><a class="nav-link" href="../Buku/index.php">Book</a></li>
                <li><a class="nav-link" href="../Peminjam/index.php">Peminjam</a></li>
                <li><a class="nav-link" href="../Petugas/index.php">Petugas</a></li>                
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
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  &nbsp;<i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Data Siswa</h4>
                    <?php 
                    $query = "SELECT COUNT(*) AS nama FROM siswa";
                    $exe = mysqli_query($conn,$query);
                    $bu = mysqli_fetch_array($exe);
                    ?>
                    <h3><?php echo $bu['nama']; ?></h3>                    
                  </div>
                  <a href="../Siswa/index.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  &nbsp;<i class="fas fa-book" aria-hidden="true"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Data Buku</h4>
                  </div>
                  <?php 
                  $query = "SELECT COUNT(*) AS judul FROM buku";
                  $exe = mysqli_query($conn,$query);
                  $bu = mysqli_fetch_array($exe);
                  ?>
                  <h3><?php echo $bu['judul']; ?></h3>
                  <a href="../Buku/index.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>                  
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  &nbsp;<i class="fas fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Data Peminjam</h4>
                  </div>
                  <?php 
                  $query = "SELECT COUNT(*) AS nama FROM peminjam";
                  $exe = mysqli_query($conn,$query);
                  $bu = mysqli_fetch_array($exe);
                  ?>
                  <h3><?php echo $bu['nama']; ?></h3>
                  <a href="../Peminjam/index.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>                  
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  &nbsp;<i class="fas fa-user-friends"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Data Petugas</h4>
                  </div>
                  <?php 
                  $query = "SELECT COUNT(*) AS nama FROM petugas";
                  $exe = mysqli_query($conn,$query);
                  $bu = mysqli_fetch_array($exe);
                  ?>
                  <h3><?php echo $bu['nama']; ?></h3>
                  <a href="../Petugas/index.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>                  
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Doughnut Chart</h4>
                </div>
                <div class="card-body">
                  <canvas id="MyDoughnutChart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Pie Chart</h4>
                </div>
                <div class="card-body">
                  <canvas id="MyPieChart"></canvas>
                </div>
              </div>
            </div>
          </div>                    
        </div>
      </section>
    </div>
    <footer class="main-footer">
      <div class="footer-left">
        Copyright &copy; 2019 <div class="bullet"></div> By <a href="http://www.smkjakartapusat1.sch.id/">Najwa</a>
      </div>
      <div class="footer-right">
        
      </div>
    </footer>
  </div>
</div>
<script >
  var ctx = document.getElementById("MyDoughnutChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["SMK", "SMA"],      
      datasets: [{
        label: '',
        data: [
        <?php 
        $jumlah_smk = mysqli_query($conn,"SELECT * FROM siswa WHERE asal_sekolah LIKE 'SMK%'");
        echo mysqli_num_rows($jumlah_smk);
        ?>, 
        <?php 
        $jumlah_sma = mysqli_query($conn,"SELECT * FROM siswa WHERE asal_sekolah LIKE 'SMA%'");
        echo mysqli_num_rows($jumlah_sma);
        ?>           
        ],
        backgroundColor: [
        '#fc544b',
        '#6777ef',
        ],
      }],
    },
    options: {
      responsive: true,
      legend: {
        position: 'bottom',
      },
    }
  });
</script>
<script>
  var ctx = document.getElementById("MyPieChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["Novel", "Komik", "Dongeng", "Biografi", "Pemrograman"],      
      datasets: [{
        label: '',
        data: [
        <?php 
        $jumlah_novel = mysqli_query($conn,"SELECT * FROM buku WHERE jenis_buku='Novel'");
        echo mysqli_num_rows($jumlah_novel);
        ?>, 
        <?php 
        $jumlah_komik = mysqli_query($conn,"SELECT * FROM buku WHERE jenis_buku='Komik'");
        echo mysqli_num_rows($jumlah_komik);
        ?>,
        <?php 
        $jumlah_dongeng = mysqli_query($conn,"SELECT * FROM buku WHERE jenis_buku='Dongeng'");
        echo mysqli_num_rows($jumlah_dongeng);
        ?>, 
        <?php 
        $jumlah_biografi = mysqli_query($conn,"SELECT * FROM buku WHERE jenis_buku='Biografi'");
        echo mysqli_num_rows($jumlah_biografi);
        ?>,
        <?php 
        $jumlah_pemrograman = mysqli_query($conn,"SELECT * FROM buku WHERE jenis_buku='Pemrograman'");
        echo mysqli_num_rows($jumlah_pemrograman);
        ?>                                                                
        ],
        backgroundColor: [
        '#63ed7a',
        '#ffa426',
        '#fc544b',
        '#6777ef',
        'yellow',
        ],
      }],
    },
    options: {
      responsive: true,
      legend: {
        position: 'bottom',
      },
    }
  });  
</script>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="../Stisla/assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="../Stisla/node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
<script src="../Stisla/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="../Stisla/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../Stisla/node_modules/summernote/dist/summernote-bs4.js"></script>
<script src="../Stisla/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="../Stisla/node_modules/izitoast/dist/js/iziToast.min.js"></script>
<script src="../Stisla/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="../Stisla/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../Stisla/node_modules/jqvmap/dist/maps/jquery.vmap.indonesia.js"></script>

<script src="../Stisla/node_modules/fullcalendar/dist/fullcalendar.min.js"></script>
<!-- Template JS File -->
<script src="../Stisla/assets/js/scripts.js"></script>
<script src="../Stisla/assets/js/custom.js"></script>

<!-- Page Specific JS File -->
<script src="../Stisla/assets/js/page/modules-vector-map.js"></script>
<script src="../Stisla/assets/js/page/modules-calendar.js"></script>
<script src="../Stisla/assets/js/page/index-0.js"></script>
<script src="../Stisla/assets/js/page/modules-chartjs.js"></script>
</body>
</html>
