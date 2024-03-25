<?php
// Start the session
session_start();

//connect to database
include 'dbcon.php';

$v_username = $_POST['f_username'];
$v_password = $_POST['f_password'];
$sql = "SELECT * FROM tbl_pengguna U JOIN tbl_jenispengguna R ON U.jenispengguna = R.jenispengguna where U.namapengguna = '$v_username' and U.passwordpengguna = '$v_password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
   while($row = mysqli_fetch_assoc($result)) {
   // Set session variables
    $_SESSION["login_userName"] =  $row["namapengguna"];
    $_SESSION["login_userRole"] = $row["jenispengguna"];
	$_SESSION["login_idpengguna"] = $row["idpengguna"];
	$user_Role = $_SESSION["login_userRole"];
	$pengguna = $_SESSION["login_userName"];
	//echo "here". $user_Role;

	switch ($user_Role) {
	  case 1:
	    echo "You are an admin!";
	    ?>
	    <script>window.location.replace("dashboard.php");</script>
	    <?php
	    break;
	  case 2:
	    echo "You are a user!";
	    ?>
	    <script>window.location.replace("dashboardUser.php");</script>
	    <?php
	    break;
	  default:
	    echo "You doesnot have roles";
	}//tutup switch

}//tutup while

}//tutup if num rows > 0
else {
  //echo "Harap Maaf.. Sila masukkan Username dan katalaluan yang Tepat";
  echo"<script>alert('Login Gagal.'); window.history.back();</script>";
}

mysqli_close($conn);
?>
