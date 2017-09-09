<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">

.setbtn
{
	position:absolute;
	right:5%;
	bottom:5%;
	

}
body
{

	border:hidden;
	background:none;
	

	}


</style>
<?php

$vtname = $_POST['input'];
$vtuser = $_POST['input1'];
$vtpass = $_POST['input2'];
$vtserver = $_POST['input3'];

$vtconn = @mysql_connect($vtserver,$vtuser,$vtpass);

$vtslct = @mysql_select_db($vtname,$vtconn);

if (mysql_error())
{
	
	echo ('<meta http-equiv="refresh" content="3 url=step2.php"');
	
}
else
{
	echo ('<meta http-equiv="refresh" content="3 url=step4.php"');
	crfile($vtserver,$vtuser,$vtpass,$vtname);
}

function crfile($vtserver,$vtuser,$vtpass,$vtname)
{
	
$crdata = '<?php 
$vtconn = @mysql_connect("'.$vtserver.'","'.$vtuser.'","'.$vtpass.'"); 
$vtslct = @mysql_select_db("'.$vtname.'",$vtconn);
?>';

 //echo $crdata;

@mkdir("../../system/",0755);

$setfile = fopen ("../../system/connect.php",'w');

	fwrite($setfile ,$crdata);
fclose($setfile);


}

?>
</head>

<body>
<h2>
<?php

if (mysql_error())
{
	
	echo ("Baglanti Hatasi Lütfen Bilgilerinizi Kontrol Edin... : " . mysql_errno() . " - " . mysql_error() . "<br/> Lüfren Bekleyin");

}
else
{
	echo ("Basarili... Lütfen Bekleyin...");
}

@mysql_close($vtconn);
?>
</h2>

</body>
</html>