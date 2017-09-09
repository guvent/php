<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php

$frmget['1'] = $_POST['frtext1'];
$frmget['2'] = $_POST['frtext2'];
$frmget['3'] = $_POST['frtext4'];
$frmget['4'] = $_POST['frtext3'];


$frdata = '
<?php 
$frname = "'. $frmget['1'] .'";  
$frslog = "'. $frmget['2'] .'"; 
$fradres = "'. $frmget['3'] .'"; 
$frtelefon = "'. $frmget['4'] .'"; 
?>';

$setfile = fopen ("../../system/info.php",'w');

fwrite($setfile ,$frdata);
fclose($setfile);

// if(error_get_last()) {	die (error_get_last()); } else {

	 echo '<meta http-equiv="refresh" content="3 url=step6.php" />';

//}

?>


</head>

<body>
<h2>Ba&#351;ar&#305;l&#305;... L&uuml;tfen Bekleyin...
</h2>
</body>
</html>