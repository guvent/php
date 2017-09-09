<?php 

$dizin = ('./');

if(is_dir($dizin))
{
    $dizinac = opendir($dizin);

    while($okunan = readdir($dizinac) !== false)
    {
        echo  $okunan . " - " . filetype($okunan) . " - " . filesize($okunan) . "<br />" ;
    }

    closedir($dizinac);
}

?>