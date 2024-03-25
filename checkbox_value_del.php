<?PHP
include('dbcon.php');
session_start();
 
if(isset($_POST['submit'])){
   if(!empty($_POST['check_list'])) {
    // Counting number of checked checkboxes.
    $checked_count = count($_POST['check_list']);
    //echo "You have selected following ".$checked_count." option(s): <br/>";
   // Loop to store and display values of individual checked checkbox.
      foreach($_POST['check_list'] as $selected) {
      

                            
			 $sqlinsert=mysqli_query($conn,"DELETE from tbl_booking WHERE 
											idproduk='$selected' AND
											idpengguna='$_SESSION[login_idpengguna]'
											");
            
      
     }
     echo "<script>
        alert('Rekod Berjaya dibuang daripada Troli.');
        window.location.href='bakul_list.php';
        </script>";
}
else{
     echo "<script>
        alert('Sila Pilih Item untuk dibuang daripada Troli.');
        window.location.href='bakul_list.php';
        </script>";
}
}
?>
