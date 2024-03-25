<?php
include('dbcon.php');


$v_ul_id = $_POST['ul_id'];
$v_fullName = $_POST['ul_fullName'];
$v_email = $_POST['ul_email'];
$v_password = $_POST['ul_password'];


 echo  $sql="UPDATE tbl_user_lis SET `ul_fullname`='$v_fullName',`ul_email`='$v_email',`ul_password`='$v_password'  WHERE ul_id='$v_ul_id'";

  if(mysqli_query($conn,$sql)){
    echo"new record uodated successfully";
    }else{
    echo "Error updating record :".mysqli_error($conn);
   }

mysqli_close($conn);
?>
