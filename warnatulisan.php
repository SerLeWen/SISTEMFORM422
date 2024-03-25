<?php
session_start();
if(!empty($_GET))
{
    $nowarna=$_GET['nowarna'];
    
    switch($nowarna)
    {
        case 1:$_SESSION["warnatulisan"]="#000000"; break;
        case 2:$_SESSION["warnatulisan"]="#FF0000"; break;
        case 3:$_SESSION["warnatulisan"]="#006400"; break;
        case 4:$_SESSION["warnatulisan"]="#0000FF"; break;
    }
    echo "<script>window.history.back()</script>";
}

?>