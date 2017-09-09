<html>
<head>
<title>Dosya Yukle...</title>
</head>


<body>
    <form action="" method="post" enctype="multipart/form-data">
        
<input type="file" name="dosya" id="dosya">
<input type="submit" value="Gönder">

</form>

</body>
</html>

<?php 

$dizin = "./";

foreach($_FILES["dosya"]["error"] as $hatakodu => $hata)
{
    if($hata == UPLOAD_ERR_OK)
    {
        $gecici = $_FILES["dosya"]["tmp_name"][$hatakodu];

        $dosyaadi = $_FILES["dosya"]["name"][$hatakodu];

        $dosya = basename($dosyaadi);

        if(move_uploaded_file($gecici,$dizin . "/". $dosya))
        {
            echo "Dosya Yüklendi : $gecici";
        }
        else
        {
            echo "Dosya Yüklenemedi..!";
        }
    }
}



?>

