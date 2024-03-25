<?PHP
//sediakan form untuk upload
/**
echo"
<center>
<br>

<form name='form1' id='form1' method='POST' action='upload.php' enctype='multipart/form-data'>

<input type='file' name='file' required/>
<button type='submit' name='btn-upload'>upload</button>
</form>

<p><a href='download/upload.csv' download>MuatTurun Format Fail</a></p>
</center>";
              */
//menyemak samada terdapat fail yg dihantar melalui post.
//bertujuan mengelakkan ralatpada kali pertama fail import dibuka
if(isset($_POST['btn-upload'])){
    include('dbcon.php');
    $namafailsementara=$_FILES["file"]["tmp_name"];
    $namafail=$_FILES['file']['name'];
    $jenisfail=pathinfo($namafail,PATHINFO_EXTENSION);

if($_FILES["file"]["size"]>0 AND $jenisfail=="csv")
{
    $failyangdataingindiupload=fopen($namafailsementara,"r");
    $counter=1;
    while(($getData =fgetcsv($failyangdataingindiupload,10000,","))!==FALSE)
    {
        if($counter>1){

            $result=mysqli_query($conn,"INSERT into tbl_pengguna
            (idpengguna,namapengguna,emailpengguna,passwordpengguna,jenispengguna)
            values
            ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."')");
           echo"<script>alert('Tahniah, Import fail berjaya.');
            window.location.href='user_list.php';</script>";
        }
        $counter++;
    }
    fclose($failyangdataingindiupload);

}
else
   echo"<script>alert('Hanya Fail .csv yang dibenarkan.');   window.location.href='user_upload.php';</script>";
}
?>
