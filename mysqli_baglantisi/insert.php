<?php 

$s = "127.0.0.1";
$k = "root";
$p = "000000";
$v = "deneme";

$baglan = mysqli_connect($s,$k,$p,$v);

$komut = "insert into deneme (isim,parola,aktif) values (?,?,?)";

$kmt = $baglan->prepare($komut);

// s = string - i = integer
$kmt->bind_param("ssi",$deger1,$deger2,$deger3);

// ekleme işlemi başlar
$deger1 = "adem";
$deger2 = "1234";
$deger3 = "1";

$kmt->execute();
// ekleme işlemi tamamdır bu aralık defalarca yapılabilir

mysqli_close($baglan);

?>