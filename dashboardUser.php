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
  .coupon{
	  border: 5px dotted #bbb;
	  width: 95%;
	  border-radius: 15px;
	  margin: 0 auto;
	  max-width:2000px;
  }
  
  .contain{
	  padding: 20px 20px;
	  background-color: #f1f1f1;
	}
	
  .contain-expire{
	  padding: 2px 15px;
	  background-color: #f1f1f1;
	}	
	
  .promo{
	  background: #ccc;
	  padding: 1px;
	}

   .expire{
	   color: red;
   }
   
   .claim-button {
		position: absolute;
		top: 30px;
		right: 50px;
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
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Ali
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Speaker ini sesuai dan berharga RM 499</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Muthu
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message..Waiting Reply</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user6-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Malcolm
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I could give you a discount of 10% on this speaker</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
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
            <h1 class="m-0">Dashboard Pengguna</h1>
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
          <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <!-- Profile section -->
	 <div class="row">
      <div class="col-md-4">
        <div class="card card-primary">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle"
                   src="dist/img/avatar5.png"
                   alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">UserName</h3>

            <p class="text-muted text-center">Email</p>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Orders</b> <a class="float-right">5</a>
              </li>
              <li class="list-group-item">
                <b>Wishlist</b> <a class="float-right">3</a>
              </li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <!-- /.Profile section -->

          <div class="col-md-4">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>3</h3>

                <p>Order History</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>

          <!-- ./col -->

            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>5<sup style="font-size: 20px"></sup></h3>

                <p>Rating</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
		 </div>
	
		  
	<div class="content">
      <div class="container-fluid">
	  <p></p>
		<div class="row mb-2">
			<div class="col-sm-6">
			<h3 class="m-0">All Speakers</h3>
			<p></p>
			</div>
		 <div class="row">
          <div class="col">
            <div class="card">
              <img src="./images/Product1.png" class="card-img-top" alt="Speaker 1" height="277">
              <div class="card-body">
                <h5>JBL Flip 5 Portable Waterproof</h5>
                <p>Bluetooth - 12 hours battery-life - IPX7 waterproof - 540g in weight - Suitable for Every Ages </p>
                <button class="btn btn-primary">Learn More</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="./images/Product2.png" class="card-img-top" alt="Speaker 2" height="275">
              <div class="card-body">
                <h5>Vinnfier Xenon 8BTR 2.1</h5>
                <p>Bluetooth Frequency Response: 40Hz - 150Hz Built-in OCL Amplifier 3" full range satellites - Suitable for All Ages</p>
                <button class="btn btn-primary">Learn More</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="./images/Product3.png" class="card-img-top" alt="Speaker 3"	height="277">
              <div class="card-body">
                <h5>JBL JR POP Kids Portable</h5>
                <p>Bluetooth - 5 hours battery-life - IPX7 waterproof - 120g in weight - Suitable for Every Ages </p>
                <button class="btn btn-primary">Learn More</button>
              </div>
			</div>
		   </div>
		  <div class="col">
           <div class="card">
              <img src="./images/Featured.png" class="card-img-top" alt="Speaker 4" height="277">
              <div class="card-body">
                <h5>JBL JR POP Kids Portable</h5>
                <p>Bluetooth - 5 hours battery-life - IPX7 waterproof - 120g in weight - Suitable for Every Ages </p>
                <button class="btn btn-primary">Learn More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
	<div class = "row">
		<div class = "col-md-6">
		  <div class="card">
		        <div class="card-header border-0">
                <div class="d-flex justify-content-between">

				  <h3 class="container"><strong>Visit our Store:</strong></h3>

				</div>
				</div>
		  <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span>
			
					<div class="mapouter">
<div class="mapouter"><div class="gmap_canvas"><iframe width="665" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=batu pahat&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co"></a><br><style>.mapouter{position:relative;text-align:right;height:510px;width:665px;}</style><a href="https://embedgooglemap.2yu.co"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:510px;width:665px;}</style></div></div></center>
					</span>
					
	
					</div>
				</div>
        </div>
        <!-- /.row -->
		</div>
	   </div>
      <!-- /.container-fluid -->
	   <div class = "col-md-6">
			<div class="coupon">
				<div class="contain">
					<h3>Sistem AuDio</h3>
					<a href="#" class="btn btn-primary btn-sm claim-btn ; claim-button">Claim Now</a>
				</div>
				<img src="./images/JBLFLIP5Carou.png" alt="JBLFLIP5" style="width:100%">
				<div class="container" style="background-color:white">
					<center><h3><b>20% OFF YOUR PURCHASE</b></h3>
					<p>Grab the discount offer now! Valid until 3 March 2023 in all of our franchised stores around the world! T&C applied.</p>
					</center>
				</div>
				<div class="contain-expire">
					<p>Use Promo Code: <span class="promo">BOH232</span></p>
					<p class="expire">Expires: Mar 03, 2023</p>
				</div>
			</div>
		</div>
	 </div>
	</div>
    <!-- /.content -->
  </div>
					

 </div>
 </div>
  </section>
           
 <div>
  <!-- /.content-wrapper -->
    <?php
     include "footer.php";
  ?>
 </div>
</body>
</html>
