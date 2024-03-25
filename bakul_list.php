<?php
require("keselamatan.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISTEM AuDio</title>


<style>
div.gallery {
  margin: 20px;
  border: 1px solid #ccc;
  float: left;
  width: 200px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>




  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed"  text="<?PHP echo $_SESSION['warnatulisan']; ?>">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboardUser.php" class="nav-link">Home</a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
   <?php
       include './sidebarUser.php';

 ?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bakul Saya</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bakul Saya</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <!-- Main content -->
	<form action="checkbox_value_del.php" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Senarai Bakul Saya </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
    

                      <?php
                        include('dbcon.php');

                       $sql="SELECT * FROM tbl_booking WHERE idpengguna='$_SESSION[login_idpengguna]'";
                       $result=mysqli_query($conn,$sql);
                           if(mysqli_num_rows($result)>0){
                                while ($row=mysqli_fetch_assoc($result)) { 
                                   ?>
                                    
									<?php
                                         $sql1="SELECT namakategori,namaproduk,descproduk,hargaproduk,gambarproduk,idproduk FROM tbl_kategori,tbl_produk 
										       where tbl_kategori.idkategori=tbl_produk.idkategori AND idproduk=$row[idproduk]";
                                         $result1=mysqli_query($conn,$sql1);
                                         $row1=mysqli_fetch_assoc($result1);
										   $gambar="images/$row1[gambarproduk]"; 
                                         ?>
									<div class="gallery">
									   <a target="_blank" href="<?php echo $gambar ?>">
									     <img src="<?php echo $gambar ?>" alt="<?php echo $row1['namaproduk'] ?>" width="600" height="400">
									   </a>
									<div class="desc">
									   <?php 
									      echo " $row1[namaproduk]<br>
										         $row1[descproduk]<br>
										         $row1[hargaproduk]<br>
										         $row1[namakategori] <br>
												 <input type=checkbox name=check_list[] value='$row1[idproduk]'>";
									   
									   
									   ?>
									</div>
									
						</div>
                              <?php
                           }
                           }else{
                            echo "0 result";
                            }
                            mysqli_close($conn);

                      ?>



              </div>  
              <!-- /.card-body -->
            </div><input type="submit" name="submit" Value="Delete"/>&nbsp&nbsp
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php
     include "footer.php";
  ?>
</body>
</html>
