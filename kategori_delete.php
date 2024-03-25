<?PHP
//session_start();
 include('dbcon.php');
//L1. mengambil data yang dihantar secara get pada link padam
$idkategori=$_GET['idkategori'];



mysqli_query($conn,"delete from  tbl_kategori where idkategori='$idkategori' ");



         echo"<script>alert('Rekod Telah Dihapuskan');
   window.location.href='./kategori.php';
    </script>";


?>
