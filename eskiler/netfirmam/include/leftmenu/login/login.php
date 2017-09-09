<script type="text/javascript" language="javascript">
function sil()
{
	var us1;
	var us2;
	us1 = document.getElementById("luser").value;
	us2 = document.getElementById("lpass").value;
	if(us1 == "Kullanici Adi...")
	{
		document.getElementById("luser").value = "";
	}
	if(us2 == "Sifre...")
	{
		//document.getElementById("lpass").type = "password";
		document.getElementById("lpass").value = "";
	}
	
}
function gel()
{
	var us1;
	var us2;
	us1 = document.getElementById("luser").value;
	us2 = document.getElementById("lpass").value;
	if(us1 == "")
	{
		document.getElementById("luser").value = "Kullanici Adi...";
	}
	if(us2 == "")
	{
		//document.getElementById("lpass").type = "text";
		document.getElementById("lpass").value = "Sifre...";
	}
	
}

var slidestat;
slidestat = 0;

function sliclic(slistat)
{
	slidestat = slistat;
	
}

function slimove(slimv)
{
	var ux;
	var uxp;
	if(slidestat == 1)  {
		document.body.selected = false;
	ux = event.clientX ;
	ux = ux - document.getElementById(slimv).style.marginLeft - 19;
	if (ux <= 200 ){if ( ux >= 0 ){ // max sinir min sinir ......
	document.getElementById('slideqxb').style.left = ux - 530;
	//document.getElementById('slidexb').value = ux;
	
	/* 0 - 100 arasi deger biçer.... */  ux = ux / 2;  
	
	// elde edilen deger için kullanim alan ------------------------------------
	
	document.getElementById('adminpanel').style.filter = "alpha(opacity=" + ux + ");"; 
	
	
	// elde edilen deger için kullanim alan ------------------------------------
	return ux;
	} else {document.body.selected = true;}}}
	

}
function oordine(slioord)
{
	slidestat = 1;
	slimove(slioord);
	slidestat = 0;
}
</script>

<table  width="190" height="236" border="1" id="lmenu1">
  <tr>
    <th width="159" height="30" align="center" id="lmenu2" scope="row">**  Kullan&#305;c&#305; Giri&#351;i  **</th>
  </tr>
<form action="../../../histry.php" method="post">
<?php
//---------------------------------------------------------

$adminpanel = "";

$upconn = @mysql_connect("localhost","smartgt_firma","102030-g") or die (mysql_error() . "<br/> ---1 ");

$upexec = @mysql_select_db("smartgt_firma") or die (mysql_error() . "<br/> ---2");

//$luad=$_POST["username"]; $lupass=$_POST["password"];
$luad=$_COOKIE["username"]; $lupass=$_COOKIE["password"];

$upcstr = "select * from userlist where userad='$luad'";



if ($luad=="")
{
	yaz("1");
}else{ 
ob_clean();
$upyap = mysql_query($upcstr) ;//or die (mysql_error() . "Kullanici Adi Geçersiz...<br/> ---3");
$gel = mysql_fetch_array($upyap);
ob_end_clean();

if ($lupass == $gel[4])
{ if ($gel[17] == "1")
{
//giris onaylandi..........	
echo '<tr>
    <th align="center" id="lmenu2" scope="row"><p>Hosgeldiniz Sayin<br /><b>'. $gel[3] .'</b></p><p><input id="lsub2" class="lsub" type="submit" value="Çikis Yap..."/></p><br/></th>
  </tr>';
$adminpanel = "";
$adminpanel2 = ""; 
$admincomm =""; 
  
//giris onaylandi..........	  
} else {
if ($gel[17] == "0")
{yaz("1"); echo "<script> alert ('Aktivasyon Islemi Tamamlanmamis! Lütfen Email Kutunuzdaki Akitivasyon Mesajini Okuyunuz...'); </script>";
$adminpanel = ""; 
$adminpanel2 = ""; 
$admincomm = "";
} else {
if ($gel[17] == "2")
{
$ararm = "'1'";
$aram = "'0'";
$admincomm ="onmousemove='tasi('adminpanel')'";
$adminpanel = '<span style="visibility:hidden; position:absolute; left: 123px; width: 896px; height: 581px; top: 43px; z-index:999;" id="adminpanel" name="adminpanel" >
<table width="896" height="580" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <th width="870" height="46" id="admintop" scope="row" onClick="statsm(' . $ararm . ')" onMouseDown="statsm(' . $aram . ')" >Net Firmam Admin Panel...</th>
	<th width="20" onClick="admkapat(' . $ararm . ')" align="center">X</th>
  </tr>
  <tr>
    <th height="504" scope="row">';
$adminpanel2 = '</th>
  </tr>
  <tr scope="row"><th align="center">
 
 </th> </tr>
</table></span> ';

echo '<tr>
    <th align="center" id="lmenu2" scope="row"><p>Hosgeldiniz Sayin<br /><b>'. $gel[3] .'</b></p><p><input id="lsub2" class="lsub" type="submit" value="Çikis Yap..."/></p><p  onclick="admkapat('. $aram .')">Admin Paneli Göster...</p><br/></th>
  </tr>';	
}
}}} else {yaz("1"); }}

function yaz($onay)
{
	if($onay=="1"){
		$onay="0";
echo '<tr>
    <th align="left" id="lmenu2" scope="row">Kullanici Adi :</th>
  </tr>
  <tr>
    <th align="left" id="lmenu2" scope="row"><input id="luser" onblur="gel()" onfocus="sil()" type="text" name="username" value="Kullanici Adi..."/></th>
  </tr>
  <tr>
    <th align="left" id="lmenu2" scope="row">Sifre :</th>
  </tr>
  <tr>
    <th align="left" id="lmenu2" scope="row"><input id="lpass" onblur="gel()" onfocus="sil()"type="password" name="password" value="Sifre..."/></th>
  </tr>
  <tr>
    <th align="left" id="lmenu2" scope="row"><input id="lsub1" class="lsub" type="submit" value="Giris Yap..."/><br/><input type="checkbox">Beni Hatirla...</input><br/><a href="#" id="regstr" onClick="getir(this.id)">Üye Olmak Istiyorum...</a><br/><a href="#" id="rememb" onClick="getir(this.id)">Sifremi Unuttum...</a></th>
  </tr>';
   }
}

  //**/ ?></form>
    <tr>
    <th height="50" align="left" id="lmenu2" scope="row" valign="top"><p><font size="-1" >Online  &Uuml;ye Say&#305;s&#305; : 0 <br/> Online Ziyaretci Say&#305;s&#305; : 0 <br/>Kay&#305;tl&#305;  Kullan&#305;c&#305; Say&#305;s&#305; : 0 <br/> </font></p></th>
  </tr>
      <tr>
    <th height="146" align="left" id="lmenu2" scope="row" valign="top"></th>
  </tr>
</table>

<!--------------
<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FSmart-GT-Network%2F152813024781421&amp;width=180&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=true&amp;header=true&amp;height=400" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:180px; height:400px;" allowTransparency="true"></iframe>


---------------->
<?php  mysql_close($upconn);  ?>