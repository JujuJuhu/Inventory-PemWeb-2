 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Data Barang</title>

    <!-- boootstrap -->
    <link href="../vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">

     <link href="../vendor/css/bootstrap/bootstrap.css" rel="stylesheet">

    <!-- icon dan fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- tema css -->
    <link href="../css/tampilanadmin.css" rel="stylesheet">

  </head>
  <body>
    <!-- Menu -->
    <div id="wrapper">

      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand">Inventory</a>
          </div>
          <?php 
         	$id = $_GET['kode_brg'];
           include '../koneksi.php';
           $sql = "SELECT * FROM tb_barang WHERE kode_brg = '$id'";
           $query = mysqli_query($koneksi, $sql);
            $r = mysqli_fetch_array($query);

           ?>
          <ul class="nav navbar-top-links navbar-right">
            
          </ul>

        <!-- menu samping -->
        <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                            <li>
                <a href="?m=awal.php">
                  <i class="fa fa-dashboard"></i> Beranda
                </a>
              </li>
              <li>
                <a href="?m=admin&s=awal">
                  <i class="fa fa-user"></i> Data Admin
                </a>
              </li>
               <li>
                <a href="?m=petugas&s=awal">
                  <i class="fa fa-users"></i> Data Petugas
                </a>
              </li>
                            <li>
                <a href="?m=supplier&s=awal">
                  <i class="fa fa-building"></i> Data Supplier
                </a>
              </li>
                            <li>
                <a href="?m=barang&s=awal">
                  <i class="fa fa-archive"></i> Data Barang
                </a>
              </li>

                            <li>
                <a href="?m=barangKeluar&s=awal">
                  <i class="fa fa-cart-arrow-down"></i> Data Barang Keluar
                </a>
              </li>
              <li>
                <a href="logout.php" onclick="return confirm('yakin ingin logout?')">
                  <i class="fa fa-warning"></i> Logout
                </a>
              </li>
              
            </ul>
          </div>
        </div>

      </nav>

      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Edit Data</h1>
          </div>
        </div>

    <div class="row">

    	<form action="?m=barang&s=update" method="POST" enctype="multipart/form-data">
        <div class="form-group">
    <label for="exampleInputEmail1">Kode Barang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="kode_brg" value="<?php echo $r['kode_brg']; ?>" aria-describedby="emailHelp" placeholder="Masukkan Kode Barang">
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Barang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $r['nama_brg']; ?>" name="nama_brg" aria-describedby="emailHelp" placeholder="Masukkan Nama Barang">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Stok Barang</label>
    <input type="text" class="form-control" value="<?php echo $r['stok']; ?>" id="exampleInputEmail1" name="stok" aria-describedby="emailHelp" placeholder="Masukkan Stok Barang">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Satuan Barang</label>
    <select class="form-control" name="satuan_barang" required="">
   <?php 

    include '../koneksi.php';

    $sql = "SELECT * FROM tb_rak";

    $hasil = mysqli_query($koneksi, $sql);

                                                

    while ($data = mysqli_fetch_array($hasil)) {
                                                    
                                                
                                                

      ?>

   
      <option value="<?php echo $data['nama_rak'];?>"><?php echo $data['nama_rak']; ?></option>
      <?php } ?>
                                                   
      </select>


    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Supplier</label>
       <select class="form-control" name="supplier" required="">
   <?php 

    include '../koneksi.php';

    $sql = "SELECT * FROM tb_sup";

    $hasil = mysqli_query($koneksi, $sql);

                                                

    while ($data = mysqli_fetch_array($hasil)) {
                                                    
                                                
                                                

      ?>

   		
      <option value="<?php echo $data['nama_sup'];?>"><?php echo $data['nama_sup']; ?></option>
      <?php } ?>
                                                   
      </select>



    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="simpan" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    	
    </div>

        
<!-- footer -->
<footer class="footer container">
  
  <section class="col-sm-12" style="margin-top: 50px;">
  <div class="col-lg-10 col-lg-offset-1 text-center" position="fixed">
  <br>
  <ul class="list-inline">
  <li>
  <a href="https://www.facebook.com/juju.juhu/" target="_blank"><i class="fa fa-facebook fa-fw fa-2x"></i></a>
  </li>
  <li>
  <a href="https://github.com/JujuJuhu" target="_blank"><i class="fa fa-github fa-fw fa-2x"></i></a>
  </li>
  <li>
  <a href="https://www.linkedin.com/in/jovitakhu/" target="_blank"><i class="fa fa-linkedin fa-fw fa-2x"></i></a>
  </li>
  </ul>
  <hr class="medium">
  <p class="text-muted" style="font-size: 16px;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Jovita Kusuma. All rights reserved</p>
  </div>
  </section>
  </footer>

 

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!--include-->
    <script src="../vendor/css/js/bootstrap.min.js"></script>

  </body>
</html>
