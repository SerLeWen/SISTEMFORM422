<?php 
//CRUD -CREATE

//CONNECT DATABASE
include ('dbcon.php');


//DATA DARIPADA DATABASE
$v_idkategori=$_GET['f_idkategori'];
$v_namakategori=$_POST['f_namakategori'];
$v_statuskategori=$_POST['f_statuskategori'];


 $sql = "UPDATE tbl_kategori SET
        namakategori='$v_namakategori', statuskategori='$v_statuskategori'
        WHERE idkategori='$v_idkategori' ";

if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Kemaskini berjaya.');
        window.location.href='kategori.php';
        </script>";
	   

    
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 ?>
