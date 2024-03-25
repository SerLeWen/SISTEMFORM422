<?php 
//CRUD -CREATE

//CONNECT DATABASE
include ('dbcon.php');


//DATA DARIPADA DATABASE
$v_idpengguna=$_GET['f_username'];
$v_namapengguna=$_POST['f_namapengguna'];
$v_emailpengguna=$_POST['f_emailpengguna'];
$v_passwordpengguna=$_POST['f_passwordpengguna'];
$v_jenispengguna=$_POST['f_jenispengguna'];


 $sql = "UPDATE tbl_pengguna SET
        namapengguna='$v_namapengguna', emailpengguna='$v_emailpengguna', idpengguna='$v_idpengguna', passwordpengguna='$v_passwordpengguna', jenispengguna='$v_jenispengguna'
        WHERE idpengguna='$v_idpengguna' ";

if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Kemaskini berjaya.');
        window.location.href='user_list.php';
        </script>";
	   

    
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 ?>
