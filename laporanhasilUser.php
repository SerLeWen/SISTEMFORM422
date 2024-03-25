<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISTEM AuDio</title>

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
            <h1 class="m-0">Carian</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Carian</li>
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
                <h3 class="card-title">Carian</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php
              include('dbcon.php');
              $v_idkategori=$_GET['f_idkategori'];
              $v_hargaproduk=$_GET['f_hargaproduk'];
              $v_namaproduk =$_GET['f_namaproduk'];
              ?>
                
    <form action="checkbox_value.php" method="post">
                 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Hasil Carian</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>NAMA PRODUK</th>
					<th>KETERANGAN</th>
					<th>HARGA (RM)</th>
                    <th>NAMA KATAGORI</th>
                    <th>GAMBAR</th>
					<th><center>TINDAKAN</center></th>
                  </tr>
                  </thead>
                  <tbody>

                      <?php

						if($v_hargaproduk=='1'){
						   $sqlbr="<= '100'"; 
						}else if ($v_hargaproduk=='2'){
						   $sqlbr=">= '101' AND hargaproduk <'300'"; 
						}else if ($v_hargaproduk=='3'){
						   $sqlbr=">= '301' AND hargaproduk <'500'"; 
						}else if ($v_hargaproduk=='4'){
						   $sqlbr=">= '501' AND hargaproduk <'700'"; 
						}else if ($v_hargaproduk=='5'){
						   $sqlbr=">= '701' AND hargaproduk <'900'"; 
						}else if ($v_hargaproduk=='6'){
						   $sqlbr=">= '901' "; 
						}else{
						   $v_hargaproduk="%";
						   $sqlbr="LIKE '$v_hargaproduk'"; 
						}
					  
                         $sql="SELECT * FROM tbl_kategori AS B,tbl_produk AS A 
					              WHERE A.idkategori=B.idkategori AND 
								  namaproduk LIKE '$v_namaproduk' AND 
								  hargaproduk $sqlbr AND 
								  B.idkategori LIKE '$v_idkategori' ";
							
                       $result=mysqli_query($conn,$sql);
                           if(mysqli_num_rows($result)>0){
								while ($row=mysqli_fetch_assoc($result)) { ?> 


                                    <tr>
                                      <td><?php echo $row["namaproduk"]; ?></td>
									  <td><?php echo $row["descproduk"]; ?></td>
                                      <td><?php echo $row["hargaproduk"]; ?></td>
                                      <td><?php echo $row["namakategori"]; ?></td>
                                      <td><?php echo "<img src=./images/$row[gambarproduk] height=50 width=50>"; ?></td>
									  <td align="center"><?php 
									  echo "<img src=./images/trolley.png height=30 width=30>&nbsp;&nbsp;"; 
									  echo "<input type=checkbox name=check_list[] value='$row[idproduk]'>";?>
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
                    <th>NAMA PRODUK</th>
					<th>KETERANGAN</th>
					<th>HARGA (RM)</th>
                    <th>NAMA KATAGORI</th>
                    <th>GAMBAR</th>
					<th><input type="submit" name="submit" Value="Booking"/>&nbsp&nbsp</th></tr>
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
  <footer class="main-footer">
    <strong>Copyright &copy;  2024 Sistem F4</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
