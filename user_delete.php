<?PHP
//session_start();
 include('dbcon.php');
//L1. mengambil data yang dihantar secara get pada link padam
$idpengguna=$_GET['username'];



mysqli_query($conn,"delete from  tbl_pengguna where idpengguna='$idpengguna' ");



         echo"<script>alert('Rekod Telah Dihapuskan');
   window.location.href='./user_list.php';
    </script>";


?>
