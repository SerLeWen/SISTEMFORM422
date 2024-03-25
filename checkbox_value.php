<?PHP
include('dbcon.php');
session_start();

 $today=date('Y-m-d');
 
if(isset($_POST['submit'])){
   if(!empty($_POST['check_list'])) {
    // Counting number of checked checkboxes.
    $checked_count = count($_POST['check_list']);
    //echo "You have selected following ".$checked_count." option(s): <br/>";
   // Loop to store and display values of individual checked checkbox.
      foreach($_POST['check_list'] as $selected) {
      
	       $semakdata=mysqli_query($conn,"SELECT * FROM tbl_booking WHERE 
	            idpengguna= '$_SESSION[login_idpengguna]' AND idproduk='$selected'");
             
			 if(mysqli_num_rows($semakdata)==0){
                            
			 $sqlinsert=mysqli_query($conn,"INSERT into tbl_booking (idproduk,idpengguna,tarikh) VALUES
                                    ('$selected','$_SESSION[login_idpengguna]','$today')  ");
            }
      
     }
     echo "<script>
        alert('Rekod Berjaya ditambah dalam Troli.');
        window.location.href='laporanUser.php';
        </script>";
}
else{
     echo "<script>
        alert('Sila Pilih Item untuk ditambah dalam Troli.');
        window.location.href='laporanUser.php';
        </script>";
}
}
?>
