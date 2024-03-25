<?php 
//CRUD -CREATE

//CONNECT DATABASE
include ('dbcon.php');
$f_idproduk=$_GET['f_idproduk'];

//DATA DARIPADA DATABASE
$v_namaproduk=$_POST['f_namaproduk'];
$v_descproduk=$_POST['f_descproduk'];
$v_idkategori=$_POST['f_idkategori'];
$v_hargaproduk=$_POST['f_hargaproduk'];



$sql = "UPDATE tbl_produk SET
        namaproduk='$v_namaproduk', descproduk='$v_descproduk',hargaproduk='$v_hargaproduk',idkategori='$v_idkategori'
        WHERE idproduk='$f_idproduk' ";

if (mysqli_query($conn, $sql)) {
       echo "<script>
        alert('Kemaskini berjaya.');
        window.location.href='produk.php';
        </script>";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 ?>
