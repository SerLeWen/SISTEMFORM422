<?php
require("keselamatan.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISTEM AuDio ADD USER</title>

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
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
     <?php   require("top.php"); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
   <?php
       include './sidebar.php';

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
            <h1 class="m-0">Pengguna Baharu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Pengguna</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pendaftaran Pengguna Baharu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="action_addUser.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputClassName">ID Pengguna</label>
                    <input type="text" class="form-control" id="inputClassName" placeholder="Masukkan ID Pengguna" name="f_idpengguna">
                    <label for="inputClassName">Nama Pengguna</label>
                    <input type="text" class="form-control" id="inputEmailName" placeholder="Masukkan Nama Pengguna" name="f_namapengguna">
                    <label for="inputClassName">Email</label>
                    <input type="email" class="form-control" id="inputEmailName" placeholder="Masukkan Email" name="f_emailpengguna">
                    <label for="inputClassName">Password</label>
                    <input type="text" class="form-control" id="inputpasswordName" placeholder="Masukkan Password" name="f_passwordpengguna">
                    <label for="inputClassName">Jenis Pengguna</label>
                      <select name="f_jenispengguna" class="form-control" id="inputRolesName">
                    <?php
                     include('dbcon.php');
                    
                      $sql="SELECT * FROM tbl_jenispengguna";
                      $result=mysqli_query($conn,$sql);
                    
                     $sql = mysqli_query($condb, "SELECT * FROM tbl_jenispengguna");
                     while ($row=mysqli_fetch_assoc($result)) {
                         echo "<option value='".$row['jenispengguna']."'>" . $row['namajenispengguna'] . "</option>";
                     }
        ?>
                  </select>
                    
                    
                    
                   <!-- <input type="text" class="form-control" id="inputRolesName" placeholder="Enter Roles id" name="f_roles_id"> -->
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
     <?php
     include "footer.php";
  ?>
</body>
</html>
