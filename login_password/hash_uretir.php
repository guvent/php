<html>
<head>
<title>Dosya Yukle...</title>
</head>


<body>
    <form action="" method="post" enctype="multipart/form-data">
        
<input type="text" name="parola" id="parola">
<input type="submit" value="Gönder">

</form>

</body>
</html>

<?php 

if ($_POST["parola"])
{

$hash = hash_init('sha1');

hash_update($hash, $_POST["parola"]);

echo "Kod Üretildi : " . hash_final($hash);

}
else
{
    echo "Kod Üretilmesi için Metin Girin.";
}

?>

