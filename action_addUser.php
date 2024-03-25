<?php 
//CRUD -CREATE

//CONNECT DATABASE
include ('dbcon.php');


//DATA DARIPADA DATABASE
$v_idpengguna=$_POST['f_idpengguna'];
$v_namapengguna=$_POST['f_namapengguna'];
$v_emailpengguna=$_POST['f_emailpengguna'];
$v_passwordpengguna=$_POST['f_passwordpengguna'];
$v_jenispengguna=$_POST['f_jenispengguna'];


$semakuser=mysqli_query($conn,"SELECT idpengguna FROM tbl_pengguna WHERE idpengguna= '$v_idpengguna' ");
if(mysqli_num_rows($semakuser)==1)
{
   die("<script>alert('ID PENGGUNA ($v_idpengguna) telah WUJUD di dalam pangkalan data');
   window.location.href='user_add.php';
   </script>");

}



$sql = "INSERT INTO tbl_pengguna(`idpengguna`, `namapengguna`,`emailpengguna`, `passwordpengguna`, `jenispengguna`)
                         VALUES ('$v_idpengguna','$v_namapengguna','$v_emailpengguna','$v_passwordpengguna','$v_jenispengguna')";

if (mysqli_query($conn, $sql)) {

    
    
     echo "<script>
        alert('Rekod Baharu Berjaya dimasukkan.');
        window.location.href='user_list.php';
        </script>";
    
}

mysqli_close($conn);
 ?>
