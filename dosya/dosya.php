<?php 

// uzak sunucudan dosya okurken
$dosya = file('https://google.com');

foreach($dosya as $satirsayisi => $satir)
{
    echo $satirsayisi . " - " . htmlspecialchars($satir) . "<br />";
}

// sunucu üzerinde mevcut dosya okurken
$dosya = file('dosyaoku.php');

foreach($dosya as $satir)
{
    echo $satir . "<br />";
}

// öznitelik ayarlarken
chmod("dosyaoku.php",0755);
// ya da 
chmod("dosyaoku.php","+rwx");

// dizin silerken
rmdir('dosyaoku');

// isim değişirken
rename('dosyaoku.php','dosya.php');

// dizin oluştururken
mkdir("dizin",07777,false,"");





fclose($dosya);
?>