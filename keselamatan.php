<?php
session_start();
//mulakan sesi login

if(!isset($_SESSION['login_userName']) ) {
    //jika belum login, lencongkan ke fail ini
    header('Location: login.php');
    exit();}


if(empty($_SESSION["warnatulisan"]))
{
    $_SESSION["warnatulisan"]="#000000";
}
?>