<?php 

$s = "127.0.0.1";
$k = "root";
$p = "000000";
$v = "deneme";

$baglan = mysqli_connect($s,$k,$p,$v);

$komut = "select * from deneme";

// sorgulama işlemi 

$baglan->query("drop table deneme");

$baglan->query("create table deneme ( `id` INT NOT NULL AUTO_INCREMENT , `isim` VARCHAR(20) NOT NULL , `parola` VARCHAR(20) NOT NULL , `aktif` BIT(1) NOT NULL , PRIMARY KEY (`id`))");

mysqli_close($baglan);

?>