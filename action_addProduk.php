<?php 
//CRUD -CREATE

//CONNECT DATABASE
include ('dbcon.php');


//DATA DARIPADA DATABASE
$target_dir = "../images/";
$v_namaproduk=$_POST['f_namaproduk'];
$v_descproduk=$_POST['f_descproduk'];
$v_idkategori=$_POST['f_idkategori'];
$v_hargaproduk=$_POST['f_hargaproduk'];
//$v_gambar_id=$_POST['f_gambarproduk'];


//START HERE

        $target_dir = "images/";
        if (!file_exists($target_dir))
        mkdir($target_dir,0755);
        //gambar akan di simpan di folder gambar
        $target_path = $target_dir . basename($_FILES['f_gambarproduk']['name']);

        //nama gambar
        $nama_gambar=$_FILES['f_gambarproduk']['name'];
        //ukuran gambar
        $ukuran_gambar = $_FILES['f_gambarproduk']['size'];

        $fileinfo = @getimagesize($_FILES["f_gambarproduk"]["tmp_name"]);
        //lebar gambar
        $width = $fileinfo[0];
        //tinggi gambar
        $height = $fileinfo[1];
        if($ukuran_gambar > 81920){
            echo 'Ukuran gambar melebihi 80kb';
        }else if ($width > "480" || $height > "640") {
             echo 'Ukuran gambar harus 480x640';
        }else{
            if (move_uploaded_file($_FILES['f_gambarproduk']['tmp_name'], $target_path)) {

              echo  $sql=mysqli_query($conn,"INSERT INTO tbl_produk(namaproduk,descproduk,idkategori,hargaproduk, gambarproduk)
                             VALUES ('$v_namaproduk','$v_descproduk','$v_idkategori','$v_hargaproduk','$nama_gambar')");
				
				echo "<script>
				    alert('$sql dan Simpan data berhasil');
					window.location.href='produk.php';
					</script>";
            } else {
				   echo "<script>
					alert('Simpan data gagal');
					window.location.href='produk.php';
					</script>";
            }
        }


 ?>
