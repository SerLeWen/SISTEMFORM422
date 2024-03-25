<?PHP
//session_start();
 include('dbcon.php');
//L1. mengambil data yang dihantar secara get pada link padam
$idproduk=$_GET['idproduk'];



mysqli_query($conn,"delete from tbl_produk where idproduk='$idproduk' ");



         echo"<script>alert('Rekod Telah Dihapuskan');
   window.location.href='./produk.php';
    </script>";


?>
