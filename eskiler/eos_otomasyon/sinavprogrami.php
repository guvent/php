<?php

include("sayfalar/bag.php");
global $id;
$id=$_GET['d'];

global $adDizi;
global $basDizi;
global $bitDizi;

$sorgu2=mysqli_query($vt,"select * from sinavprogrami where id");
while($ogrenci2=mysqli_fetch_array($sorgu2))
	{  
	     
		$adDizi[]=$ogrenci2['dersAdi'];
		$basDizi[]=$ogrenci2['sinavTarihi'];
		$bitDizi[]=$ogrenci2['sinavSuresi'];
		 
	  
	   
		}

$sorgu1=mysqli_query($vt,"select * from ogrencibilgi where id=$id");
	while($ogrenci1=mysqli_fetch_array($sorgu1))
	{  
	     global $adi , $soyad ,$tc,$tel,$eposta;
		 $adi=$ogrenci1['adi'];
		 $soyad=$ogrenci1['soyad'];
		 $tc=$ogrenci1['tc'];
		 $tel=$ogrenci1['tel'];
		 $eposta=$ogrenci1['eposta'];
	   
	  
	   
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profil Sayfası</title>

<link rel="stylesheet" href="menu.css" type="text/css" media="screen"/>
<link href="profil.css" rel="stylesheet" type="text/css" />
<script src="javascript/sinavprogrami.js" language="javascript" type="text/javascript"></script>
<script src="javascript/jquery-2.1.4.min.js" language="javascript" type="text/javascript"></script>
<script src="javascript/responsive-voice.js" language="javascript" type="text/javascript"></script>
<script src="javascript/recognition-voice.js" language="javascript" type="text/javascript"></script>
<script>setTimeout(function(){ProgramiOku();},1000);</script>
</head>

<body>

<div class="site">
<div class="icerik">
  <div class="iceriksag">
	    <div class="icsgprofilresimi">
           	  <img src="img/profil.png" />
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
            <div><h2><img src="img/yildiz.png" width="74" height="71" /> Menüler </h2></div>
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
       	    <div>
       	      <h6><img src="img/takvim.png" width="1000" height="1000" />SINAV PROGRAMI</h6></div>
            <div style="border:1px solid #09C; border-radius:10px; width:98%; margin-left:1%; margin-bottom:5px; margin-top:-40px;">
            <p>&nbsp;</p>
            <table width="95%" border="1" align="center" class="TabloForm">
              <tr>
                <td colspan="8" align="center" id="tablo"><div>SINAV PROGRAMI</div></td>
              </tr>
              <tr>
                <td colspan="8" align="center" id="kullanici"><div ><?php echo $adi.' '.$soyad; ?></div></td>
              </tr>
              <tr>
                <td width="14%" align="center"><div id="AKA">-Ders Adı-</div></td>
                <td width="13%" align="center"><div id="BAT">-Sınav Tarihi-</div></td>
                <td width="12%" align="center"><div id="BIT">-Sınav Süresi-</div></td>
              </tr>
              <tr>
                <td align="center"><div id="AKA1"><?php echo $adDizi[0]; ?></div></td>
                <td align="center"><div id="BAT1"><?php echo $basDizi[0];?></div></td>
                <td align="center"><div id="BIT1"><?php echo $bitDizi[0]." Dakika";?></div></td>
              </tr>
              <tr>
                <td align="center"><div id="AKA2"><?php echo $adDizi[1]; ?></div></td>
                <td align="center"><div id="BAT2"><?php echo $basDizi[1];?></div></td>
                <td align="center"><div id="BIT2"><?php echo $bitDizi[1]." Dakika";?></div></td>
              </tr>
              <tr>
                <td align="center"><div id="AKA3"><?php echo $adDizi[2]; ?></div></td>
                <td align="center"><div id="BAT3"><?php echo $basDizi[2];?></div></td>
                <td align="center"><div id="BIT3"><?php echo $bitDizi[2]." Dakika";?></div></td>
              </tr>
              <tr>
                <td align="center"><div id="AKA4"><?php echo $adDizi[3]; ?></div></td>
                <td align="center"><div id="BAT4"><?php echo $basDizi[3];?></div></td>
                <td align="center"><div id="BIT4"><?php echo $bitDizi[3]." Dakika";?></div></td>
              </tr>
			  <tr>
                <td align="center"><div id="AKA5"><?php echo $adDizi[4]; ?></div></td>
                <td align="center"><div id="BAT5"><?php echo $basDizi[4];?></div></td>
                <td align="center"><div id="BIT5"><?php echo $bitDizi[4]." Dakika";?></div></td>
              </tr>
			  <tr>
                <td align="center"><div id="AKA6"><?php echo $adDizi[5]; ?></div></td>
                <td align="center"><div id="BAT6"><?php echo $basDizi[5];?></div></td>
                <td align="center"><div id="BIT6"><?php echo $bitDizi[5]." Dakika";?></div></td>
              </tr>
			 
              <tr>
                <td colspan="8" align="center"><div id="uyari">Sınavlarınızda Başarılar Dileriz.</div></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            
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

var AKAD=new Array("");

for(var i=0; i<=0; i++){	
for(var j=1;j<7;j++)	
			 AKAD[i]=AKAD[i]+document.getElementById('AKA').textContent+" , "+
			 				document.getElementById('AKA'+j).textContent +" , "+
							document.getElementById('BAT').textContent+" , "+
			 				 document.getElementById('BAT'+j).textContent+" , "+	
							 document.getElementById('BIT').textContent+" , "+			
							 document.getElementById('BIT'+j).textContent+" , ";
			 
			 		
					
					
			}



</script>
</html>
