<?php

$resim = imagecreate(150, 60);


$renk = imagecolorallocate($resim, 255, 255, 255);

$cizgirenk = imagecolorallocate($resim,rand(50,255),rand(50,255),rand(50,255));

$yazirenk = imagecolorallocate($resim, 0, 0, 255);


switch(rand(0,3))
{
    case 0:

    $yazitipi = './fandf.ttf';
    
    break;

    case 1:
    
        $yazitipi = './arial.ttf';
        
        break;
    case 2:

        $yazitipi = './epicride.ttf';
    
    break;
    
    case 3:

        $yazitipi = './Commanders.ttf';
    
    break;

    
    
}

$soldan = 10;

imageline($resim,rand(0,10),rand(0,20),rand(20,150),rand(20,50),$cizgirenk);

imageline($resim,rand(20,20),rand(20,30),rand(20,150),rand(20,50),$cizgirenk);

imageline($resim,rand(10,20),rand(10,30),rand(20,150),rand(20,50),$cizgirenk);


for($i=0;$i<6;$i++) {

imagettftext($resim,30,0, (20*$i) + ($soldan + rand(0,10) ) ,( 30 + rand(5,20) ),$yazirenk, $yazitipi , rand(0,9));

}

header('Content-type: image/png');

imagepng($resim);
imagedestroy($resim);

?>


