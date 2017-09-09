<?php 
 ob_start();
include("sayfalar/bag.php");

session_start();
 
$kadi = $_POST['kullaniciAdi'];
$sifre = $_POST['kullaniciSifre'];
 
$sql_check = mysqli_query($vt,"select * from ogrencikullanicibilgi where kullaniciAdi='".$kadi."' and kullaniciSifre='".$sifre."'  ") or die(mysql_error());
 
if(mysqli_num_rows($sql_check))  {
	$id=$GET['id'];
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $kadi;
    $_SESSION["pass"] = $sifre;
    header("Refresh: 2; url=admin.php");
}
else {
    if($kadi=="" or $sifre=="") {
        header("location:indexx.html");
    }
    else 
	header("location:indexx.html");
 }

 
ob_end_flush();
?>