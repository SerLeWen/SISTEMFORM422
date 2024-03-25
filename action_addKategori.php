<?php 
//CRUD -CREATE

//CONNECT DATABASE
include ('dbcon.php');


//DATA DARIPADA DATABASE
$v_namakategori=$_POST['f_namakategori'];
$v_statuskategori=$_POST['f_statuskategori'];



$sql = "INSERT INTO tbl_kategori(`namakategori`,`statuskategori`)
                         VALUES ('$v_namakategori','$v_statuskategori')";

if (mysqli_query($conn, $sql)) {

     echo "<script>
        alert('Rekod Baharu Berjaya dimasukkan.');
        window.location.href='kategori.php';
        </script>";
    
}

mysqli_close($conn);
 ?>
