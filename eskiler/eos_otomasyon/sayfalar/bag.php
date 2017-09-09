<?php


$vt=mysqli_connect("eos.tacettinuysal.com","eosbote_root","123456.","eosbote_otomasyon");
mysqli_set_charset($vt, "utf8");
// Bağlantı Kontrol
if (mysqli_connect_errno())
  {
  echo "Bağlantı sırasında hata oluştu: " . mysqli_connect_error();
  }
else{
	
	//echo "Baglantı başarı ile kuruldu";
}




?>