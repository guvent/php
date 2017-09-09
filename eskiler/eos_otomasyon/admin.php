<?php 
ob_start();
include("sayfalar/bag.php");

session_start();
 
if(!isset($_SESSION["login"])){
    header("location:indexx.html");
}
else {

	
   
    
$ad=$_SESSION['user'];
$sorgu=mysqli_query($vt,"select * from ogrencikullanicibilgi where kullaniciAdi=$ad");
while($ogrenci=mysqli_fetch_array($sorgu))
{   global $id;
    
	$id= $ogrenci['id'];
	$sorgu1=mysqli_query($vt,"select * from ogrencibilgi where id=$id");
	while($ogrenci1=mysqli_fetch_array($sorgu1))
	{  
	     global $adi , $soyad ,$tc,$tel,$eposta;
		 $adi=$ogrenci1['adi'];
		 $soyad=$ogrenci1['soyad'];
		 $tc=$ogrenci1['tc'];
		 $tel=$ogrenci1['tel'];
		 $eposta=$ogrenci1['eposta'];
	      echo "<center>".$adi." ".$soyad."  hosgeldiniz..! ";
		  echo "<a href=logout.php>Guvenli cikis</a></center>";
	  
	   
		}
	
	
	
		
		
	
}
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css.css" rel="stylesheet" type="text/css" />
<script src="javascript/dashboard.js" language="javascript" type="text/javascript"></script>
<script src="javascript/jquery-2.1.4.min.js" language="javascript" type="text/javascript"></script>
<script src="javascript/responsive-voice.js" language="javascript" type="text/javascript"></script>
<script src="javascript/recognition-voice.js" language="javascript" type="text/javascript"></script>
<script>
setTimeout(function(){oku();},1000);

</script>
<link rel="stylesheet" href="menu.css" type="text/css" media="screen"/>
<link href="profil.css" rel="stylesheet" type="text/css" />
<title>Başlıksız Belge</title>
</head>
<body>
<div class="site">
<div class="icerik">
  <div class="iceriksag">
	    <div class="icsgprofilresimi">
           	  <img src="img/profil.png"/>
           	  <div class="icsgprYazi">
   	      <h3><?php echo $adi.' '.$soyad; ?></h3></div>
        </div>
        <div class="icsgpBilgi">
              <h5><img src="img/fakulteicon.png" /> BÖTE</h5>
              <h5><img src="img/klavyeicon.png" /><?php echo $tc; ?></h5>
              <h5><img src="img/Light-Mail-icon.png" /><?php echo $eposta; ?></h5>
              <h5><img src="img/telicon.png" /><?php echo $tel;?></h5>
              
              
        </div>
          <hr /><br />
            <div><h2><img src="img/yildiz.png" width="74" height="71" />Menüler</h2></div>
            <div class="icsgpMenu">
     
<ul id="menu">   
	                 <li><a href="akademiktakvim.php?d=<?php echo $id; ?>" class="last" id="l1"><div id="OBUM1">Akademik Takvim</div></a></li>
           	<li><a href="dersprogrami.php?d=<?php echo $id; ?>" class="last" id="l2"><div id="OBUM2">Haftalık Ders Programı</div></a></li>
                     <li><a href="sinavprogrami.php?d=<?php echo $id; ?>" class="last" id="l3"><div id="OBUM3">Sınav Programı</div></a></li>
                     <li><a href="devamdurumu.php?d=<?php echo $id; ?>" class="last" id="l4"><div id="OBUM4">Devamsızlık Durumu</div></a></li>
                     <li><a href="alinandersler.php?d=<?php echo $id; ?>" class="last" id="l5"><div id="OBUM5">Alınan Dersler</div></a></li>
            <li><a href="notgoruntuleme.php?d=<?php echo $id; ?>" class="last" id="l6"><div id="OBUM6">Ders Notu Görüntüleme</div></a></li>
                     <li><a href="logout.php" class="last" id="l7"><div id="OBUM7">Çıkış Yap</div></a></li>
                      
			  </ul>
            
            </div>
  </div>
  <div class="iceriksol">
   	    <div class="icslDuyurular">
       	    <div><h6><img src="img/duyuru_icon.png" width="425" height="425" /> Duyuru</h6></div>
            <div style="border:1px solid #09C; border-radius:10px; width:90%; margin-left:5%; margin-bottom:5px; margin-top:-40px;">
            <h4>Sınav Tarihleri / Vize</h4>													
            <div><h1><img src="img/takvim.png" width="1000" height="1000" /> Mayıs 20 - Devamını Oku</h1></div>            
            <div><p>Vize Tarihleri Belli Olmuştur . Vize Tarihlerine Alttaki Pdf Dökümanından Ulaşa Bilirsiniz</p></div>
            </div> 
            
            <div style="border:1px solid #09C; border-radius:10px; width:90%; margin-left:5%; margin-bottom:5px;">
            <h4>Sınav Tarihleri / Vize</h4>													
            <div><h1><img src="img/takvim.png" width="1000" height="1000" /> Mayıs 20 - Devamını Oku</h1></div>            
            <div><p>Vize Tarihleri Belli Olmuştur . Vize Tarihlerine Alttaki Pdf Dökümanından Ulaşa Bilirsiniz</p></div>
            </div> 
            
            
            
        	</div>
            
            <div class="icslSinavProgrami">
            
            <div> <h6><img src="img/Light-Mail-icon.png" width="130" height="85" /> Mesaj</h6></div>            
            <div style="border:1px solid #09C; border-radius:10px; width:90%; margin-left:5%; margin-bottom:5px; margin-top:-40px;">
            <h4>Sınav Tarihleri / Vize</h4>													
            <div><h1><img src="img/takvim.png" width="1000" height="1000" /> Mayıs 20 - Devamını Oku</h1></div>            
            <div><p>Vize Tarihleri Belli Olmuştur . Vize Tarihlerine Alttaki Pdf Dökümanından Ulaşa Bilirsiniz</p></div>
            </div>
            
            <div style="border:1px solid #09C; border-radius:10px; width:90%; margin-left:5%; margin-bottom:5px;">
            <h4>Sınav Tarihleri / Vize</h4>													
            <div><h1><img src="img/takvim.png" width="1000" height="1000" /> Mayıs 20 - Devamını Oku</h1></div>            
            <div><p>Vize Tarihleri Belli Olmuştur . Vize Tarihlerine Alttaki Pdf Dökümanından Ulaşa Bilirsiniz</p></div>
            </div> 
            
            <div style="border:1px solid #09C; border-radius:10px; width:90%; margin-left:5%; margin-bottom:5px;">
            <h4>Sınav Tarihleri / Vize</h4>													
            <div><h1><img src="img/takvim.png" width="1000" height="1000" /> Mayıs 20 - Devamını Oku</h1></div>            
            <div><p>Vize Tarihleri Belli Olmuştur . Vize Tarihlerine Alttaki Pdf Dökümanından Ulaşa Bilirsiniz</p></div>
            </div>  
                       
            
              
            
           
            
           
      </div>        
	</div>
    
</div>
<div class="alt"><br />
      <table width="26%" border="0" align="center">
        <tr>
          <td colspan="4" align="center">Bilişim Üniversitesi Bütün Haklar Saklıdır.</td>
        </tr>
        <tr>
          <td width="34%" align="center"><a href="https://www.facebook.com/Bili%C5%9Fim-%C3%9Cniversitesi-736722539865742/"><img src="img/sface.png" width="20" height="20" /></a>
          <a href="https://www.instagram.com/bilisimuniversitesi/"><img src="img/sinstagram.png" width="20" height="20" /></a>
          <a href="https://twitter.com/bilisimuni"><img src="img/stwitter.png" width="20" height="20" /></a>
          <a href="https://www.youtube.com/channel/UCZtiD0fOL3b-m4EmCSSJ4Yg"><img src="img/syoutube.png" width="20" height="20" /></a></td>
        </tr>
        <tr>
          <td colspan="4" align="center">Css Tasarım Uzmanı</td>
        </tr>
      </table>
	  <label for="results"></label>
<textarea name="results" id="results" hidden=""></textarea>
</div>


</body>

<script>
var OBUMD=new Array();
var a="";
for(var i=1; i<8; i++){		
		OBUMD[i]=document.getElementById('OBUM'+i).textContent;
		a=a+","+OBUMD[i];			
        }

</script>




</html>
