 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt=" " class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Simple Sistem</span>
    </a>    -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./images/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["login_userName"];?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		  

		  
		  <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-search fa-fw"></i>
              <p>
                Carian
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./laporanUser.php" class="nav-link">
                  <i class="nav-icon fa fa-search-plus"></i></i>	
                  <p>Query</p>
                </a>
             </li>
			 
		   <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-shopping-cart"></i>
              <p>
                Bakul Saya
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./bakul_list.php" class="nav-link">
                  <i class="nav-icon fa fa-cart-plus"></i></i>	
                  <p>Bakul</p>
                </a>
             </li>
			 </ul>
		

             <!--

          <li class="nav-header">Registration</li>
          <li class="nav-item">
            <a href="add_class.php" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Class
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="add_user.php" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                User
              </p>
            </a>
          </li>   -->
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fa fa-sign-out-alt"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
