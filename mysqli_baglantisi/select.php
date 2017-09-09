<?php 

$s = "127.0.0.1";
$k = "root";
$p = "000000";
$v = "deneme";

$baglan = mysqli_connect($s,$k,$p,$v);

$komut = "select * from deneme";

// sorgulama başlar
if($sonuc = $baglan->query($komut)) {
    // sonuc kadar liseleme yapar
    while($satir = $sonuc->fetch_row())
    {
        echo $satir[0] . " - " . $satir[1] . " - " . $satir[2] . " - " . $satir[3] . " <br /> " ;
    }
    
}
// sorgulama tamamdır

mysqli_close($baglan);

?>
