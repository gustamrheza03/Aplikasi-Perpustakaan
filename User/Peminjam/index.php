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

  <link rel="stylesheet" href="../Stisla/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../Stisla/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../Stisla/assets/css/style.css">
  <link rel="stylesheet" href="../Stisla/assets/css/components.css">
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
            <a href="../Dashboard/dashboard.php" onclick="location.href=this.href+'?id_user='+tampil;return false;">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="../Dashboard/dashboard.php" onclick="location.href=this.href+'?id_user='+tampil;return false;">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li class="active"><a class="nav-link" href="../Dashboard/dashboard.php" onclick="location.href=this.href+'?id_user='+tampil;return false;">General Dashboard</a></li>
              </ul>
            </li>
            <li class="menu-header">Master Data</li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Menu</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="../Siswa/index.php">Student</a></li>
                <li><a class="nav-link" href="../Buku/index.php">Book</a></li>
                <li><a class="nav-link" href="index.php">Peminjam</a></li>
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
            <h1>DataTables</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">DataTables</div>
            </div>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Basic DataTables</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nisn</th>
                            <th>Nama</th>
                            <th>Asal Sekolah</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no = 1; 
                          $query = "SELECT * FROM peminjam";
                          $exe = mysqli_query($conn, $query);
                          $total = mysqli_num_rows($exe);
                          while ($row = mysqli_fetch_array($exe)) {
                            $id_peminjam = $row['id_peminjam'];
                            ?>
                            <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $row['nisn']; ?></td>
                              <td><?php echo $row['nama']; ?></td>
                              <td><?php echo $row['asal_sekolah']; ?></td>
                              <td><?php echo $row['alamat']; ?></td>                              
                              <td><a href="detail.php?id_peminjam=<?=$row['id_peminjam'];?>" class="btn btn-secondary">Detail</a></td>
                            </tr>
                            <?php
                          } 
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>           
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2019 <div class="bullet"></div> By <a href="http://www.smkjakartapusat1.sch.id/Tentang-Kami/Profil-Sekolah.html">Najwa</a>
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
  <script src="../Stisla/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <script src="../Stisla/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="../Stisla/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../Stisla/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
  <!-- Template JS File -->
  <script src="../Stisla/assets/js/scripts.js"></script>
  <script src="../Stisla/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../Stisla/assets/js/page/modules-datatables.js"></script>  
</body>
</html>
<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(nisn){
    document.getElementById('nama').value = prdName[nisn].nama;
    document.getElementById('asal_sekolah').value = prdName[nisn].asal_sekolah;
    document.getElementById('alamat').value = prdName[nisn].alamat;
};
</script>