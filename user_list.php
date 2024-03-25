<?php
require("keselamatan.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISTEM AuDio USER LIST</title>

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
            <h1 class="m-0">Senarai Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Senarai Pengguna</li>
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
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Senarai Pengguna</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID PENGGUNA</th>
                    <th>NAMA PENGGUNA</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>JENIS PENGGUNA</th>
                    <th>TINDAKAN</th>
                  </tr>
                  </thead>
                  <tbody>

                      <?php
                        include('dbcon.php');

                       $sql="SELECT * FROM tbl_pengguna";
                       $result=mysqli_query($conn,$sql);
                           if(mysqli_num_rows($result)>0){
                                while ($row=mysqli_fetch_assoc($result)) { ?>

                                    <tr>
                                      <td><?php echo $row["idpengguna"]; ?></td>
                                      <td><?php echo $row["namapengguna"]; ?></td>
                                      <td><?php echo $row["emailpengguna"]; ?></td>
                                      <td><?php echo $row["passwordpengguna"]; ?></td>
                                      <td><?php

                                         $sql1="SELECT namajenispengguna FROM tbl_jenispengguna where jenispengguna='$row[jenispengguna]' ";
                                         $result1=mysqli_query($conn,$sql1);
                                         $row1=mysqli_fetch_assoc($result1);
                                         echo $row1['namajenispengguna'] ;?></td>

                                    <td align=center>

                                        <a href='user_update.php?username=<?php echo $row['idpengguna']?>'><img src=./images/edit.png WIDTH=30 HEIGHT=30></a>   ||
                                        <a href="user_delete.php?username=<?php echo $row['idpengguna']?>" onclick="return confirm('Are you sure to delete?') "><img src=./images/delete.png WIDTH=30 HEIGHT=30></a>

                                    </td>
                                   </tr>
                              <?php
                           }
                           }else{
                            echo "0 result";
                            }
                            mysqli_close($conn);

                      ?>



                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID PENGGUNA</th>
                    <th>NAMA PENGGUNA</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>JENIS PENGGUNA</th>
                    <th>TINDAKAN</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
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
