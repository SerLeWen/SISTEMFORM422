<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISTEM AuDio Sign Up</title>

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
<body>
 <div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"/>
  </div>

  <!-- Navbar -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

      <!-- /.sidebar-menu -->
    <!-- /.sidebar -->

  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
   <div class = "content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-12">
			<center>
            <h1 class="m-0">Pengguna Baharu</h1>
			</center>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <!-- left column -->	
          <div class="col-sm-4">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pendaftaran Pengguna Baharu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="action_register.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputClassName">ID Pengguna</label>
                    <input type="text" class="form-control" id="inputClassName" placeholder="Masukkanan ID Pengguna" name="f_idpengguna">
                    <label for="inputClassName">Nama Pengguna</label>
                    <input type="text" class="form-control" id="inputEmailName" placeholder="Masukkanan Nama Pengguna" name="f_namapengguna">
                    <label for="inputClassName">Email</label>
                    <input type="email" class="form-control" id="inputEmailName" placeholder="Masukkanan Email" name="f_emailpengguna">
                    <label for="inputClassName">Password</label>
                    <input type="text" class="form-control" id="inputpasswordName" placeholder="Masukkan Password" name="f_passwordpengguna">
 

                    
                   <!-- <input type="text" class="form-control" id="inputRolesName" placeholder="Enter Roles id" name="f_roles_id"> -->
                  </div>
                </div>
                <!-- /.card-body -->
				
                <div class="card-footer">
				 <div class = "row">
					<div class="col-6">
						<center>
							
							<a href="./login.php" class="btn btn-primary" style="width:70px ; background-color:grey ; button-back">Back</a>
						</center>
					</div>
					<div class="col-6">
						<center>
							<button type="submit" class="btn btn-primary">Submit</button>
						</center>
					</div>

				 </div>
                </div>
              </form>
            </div>
            <!-- /.card -->

           
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
	  </div>
    </section>
    <!-- /.content -->
 </div>
</div>
</body>

  <!-- /.content-wrapper -->
<footer class="main-footer">
	<strong>Copyright &copy;  2023 SISTEMAuDio </strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>SPM Tahun</b> 2023/2024
    </div>
</footer>

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

</html>
