<html>
<head>
<title>Dosya Yukle...</title>
</head>


<body>
    <form action="" method="post" enctype="multipart/form-data">
        
    <input type="text" name="isim" id="isim" > <br />
<input type="password" name="parola" id="parola"><br/>
<input type="submit" value="Gönder">

</form>

</body>
</html>

<?php 

session_start();



$kullanici = $_POST["isim"];
$sifre = $_POST["parola"];

if($_SESSION['bilet'])
{
    $hash = hash_init('sha1');
    
    hash_update( $hash, $kullanici.$sifre );
    
    $bilet = hash_final($hash);

    if($bilet == $_SESSION['bilet']) {

        echo "Kullanıcı Girişi Başarılı..";

        session_destroy();

    }

}
else
{

if ($kullanici && $sifre)
{

$hash = hash_init('sha1');

hash_update( $hash, $kullanici.$sifre );

$bilet = hash_final($hash);

$_SESSION['kullanici'] = $kullanici;
$_SESSION['sifre'] = $sifre;
$_SESSION['bilet'] = $bilet;

echo "Kod Üretildi : " . $bilet;

}
else
{
    echo "Kod Üretilmesi için Metin Girin.";
}


}


?>

